<?php

namespace App\Http\Livewire\Tickets;

use App\Models\Ticket;
use Livewire\Component;
use Illuminate\Support\Facades\Cache;

class Index extends Component
{
    public $new;
    public $open;
    public $overDue;
    public $closed;

    public $newPrcntg;
    public $openPrcntg;
    public $overDuePrcntg;
    public $closedPrcntg;

    public $newCount;
    public $openCount;
    public $overDueCount;
    public $closedCount;

    public $searchItem;

    public $updated = false;

    protected $listeners = ['updated' => 'changeStatus', 'search' => 'searchItems'];

    public function mount()
    {
        $this->fetchTicketData();
    }

    public function fetchTicketData()
    {
        $this->new = Cache::remember('tickets.new', 60, function () {
            return Ticket::where('status', 0)->get();
        });

        $this->open = Cache::remember('tickets.open', 60, function () {
            return Ticket::where('status', 1)->get();
        });

        $this->overDue = Cache::remember('tickets.overDue', 60, function () {
            return Ticket::where('status', 2)->get();
        });

        $this->closed = Cache::remember('tickets.closed', 60, function () {
            return Ticket::where('status', 3)->get();
        });

        $this->newCount = $newTickets = $this->new->count();
        $this->openCount = $openTickets = $this->open->count();
        $this->overDueCount = $overDueTickets = $this->overDue->count();
        $this->closedCount = $closedTickets = $this->closed->count();

        // Cache the ticket counts for faster access
        Cache::put('ticket_counts', [
            'newCount' => $this->newCount,
            'openCount' => $this->openCount,
            'overDueCount' => $this->overDueCount,
            'closedCount' => $this->closedCount,
        ], 60); // Cache for 60 minutes
    }

    public function changeStatus()
    {
        $this->updated = true;
    }

    public function refreshComponent()
    {
        if ($this->updated) {
            Cache::forget('tickets.new');
            Cache::forget('tickets.open');
            Cache::forget('tickets.overDue');
            Cache::forget('tickets.closed');

            $this->fetchTicketData();

            $this->updated = false;
        }
    }

    public function searchItems()
    {
        if ($this->searchItem) {
            // Skip using cache for search results as they are dynamic
            $this->new = Ticket::where('status', 0)
                ->where(function ($query) {
                    $query->where('title1', 'like', '%' . $this->searchItem . '%')
                        ->orWhere('title2', 'like', '%' . $this->searchItem . '%')
                        ->orWhere('content', 'like', '%' . $this->searchItem . '%')
                        ->orWhere('contact', 'like', '%' . $this->searchItem . '%');
                })->get();

            $this->open = Ticket::where('status', 1)
                ->where(function ($query) {
                    $query->where('title1', 'like', '%' . $this->searchItem . '%')
                        ->orWhere('title2', 'like', '%' . $this->searchItem . '%')
                        ->orWhere('content', 'like', '%' . $this->searchItem . '%')
                        ->orWhere('contact', 'like', '%' . $this->searchItem . '%');
                })->get();

            $this->overDue = Ticket::where('status', 2)
                ->where(function ($query) {
                    $query->where('title1', 'like', '%' . $this->searchItem . '%')
                        ->orWhere('title2', 'like', '%' . $this->searchItem . '%')
                        ->orWhere('content', 'like', '%' . $this->searchItem . '%')
                        ->orWhere('contact', 'like', '%' . $this->searchItem . '%');
                })->get();

            $this->closed = Ticket::where('status', 3)
                ->where(function ($query) {
                    $query->where('title1', 'like', '%' . $this->searchItem . '%')
                        ->orWhere('title2', 'like', '%' . $this->searchItem . '%')
                        ->orWhere('content', 'like', '%' . $this->searchItem . '%')
                        ->orWhere('contact', 'like', '%' . $this->searchItem . '%');
                })->get();

            $this->newCount = $this->new->count();
            $this->openCount = $this->open->count();
            $this->overDueCount = $this->overDue->count();
            $this->closedCount = $this->closed->count();
        }
    }

    public function render()
    {
        return view('livewire.tickets.index');
    }
}
