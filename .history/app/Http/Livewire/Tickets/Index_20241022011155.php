<?php

namespace App\Http\Livewire\Tickets;

use App\Models\Ticket;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

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

    protected $listeners = ['updated' => 'changeStatus', 'search' => 'searchItems'];

    public $tickets;

    public function mount()
    {
        // Caching the tickets for 60 minutes, unless invalidated manually
        $this->tickets = Cache::forever('tickets_table', function () {
            return Ticket::all();
        });

        // Initialize the ticket counts and lists
        $this->initializeTicketCounts();
    }

    /**
     * Refreshes the tickets and recalculates the counts if there is an update.
     */
    public function refreshComponent()
    {
        $this->initializeTicketCounts();
    }

    /**
     * Reinitializes the ticket lists and counts for different statuses.
     */
    private function initializeTicketCounts()
    {
        $this->new = $this->filterTickets(0);
        $this->open = $this->filterTickets(1);
        $this->overDue = $this->filterTickets(2);
        $this->closed = $this->filterTickets(3);

        $this->newCount = $this->new->count();
        $this->openCount = $this->open->count();
        $this->overDueCount = $this->overDue->count();
        $this->closedCount = $this->closed->count();

        // Optionally, you can calculate percentages here if needed
        // $totalTickets = $this->tickets->count();
        // if ($totalTickets > 0) {
        //     $this->newPrcntg = number_format(($this->newCount / $totalTickets) * 100, 2);
        //     $this->openPrcntg = number_format(($this->openCount / $totalTickets) * 100, 2);
        //     $this->overDuePrcntg = number_format(($this->overDueCount / $totalTickets) * 100, 2);
        //     $this->closedPrcntg = number_format(($this->closedCount / $totalTickets) * 100, 2);
        // } else {
        //     $this->newPrcntg = 0;
        //     $this->openPrcntg = 0;
        //     $this->overDuePrcntg = 0;
        //     $this->closedPrcntg = 0;
        // }
    }

    /**
     * Filters the tickets by status.
     *
     * @param int $status
     * @return \Illuminate\Support\Collection
     */
    private function filterTickets($status)
    {
        return $this->tickets->where('status', $status);
    }

    /**
     * Handles the search functionality for the tickets.
     */
    public function searchItems()
    {
        if ($this->searchItem) {
            $this->new = $this->searchFilteredTickets(0);
            $this->open = $this->searchFilteredTickets(1);
            $this->overDue = $this->searchFilteredTickets(2);
            $this->closed = $this->searchFilteredTickets(3);

            $this->newCount = $this->new->count();
            $this->openCount = $this->open->count();
            $this->overDueCount = $this->overDue->count();
            $this->closedCount = $this->closed->count();
        }
    }

    /**
     * Filters the tickets by status and search item.
     *
     * @param int $status
     * @return \Illuminate\Support\Collection
     */
    private function searchFilteredTickets($status)
    {
        return $this->tickets->where('status', $status)
            ->filter(function ($ticket) {
                return str_contains($ticket->title1, $this->searchItem) ||
                    str_contains($ticket->title2, $this->searchItem) ||
                    str_contains($ticket->content, $this->searchItem) ||
                    str_contains($ticket->contact, $this->searchItem);
            });
    }

    public function render()
    {
        return view('livewire.tickets.index');
    }
}
