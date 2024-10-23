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

    public $updated =false;

    protected $listeners = ['updated' => 'changeStatus','search' => 'searchItems'];

    public $tickets;

    public function mount()
    {
        $this->tickets = Cache::remember('tickets_table', 60, function () {
            return Ticket::all();
        });

        // Ticket:: replaced with $this->tickets->

        $this->new = $this->tickets->where('status', 0)->get();
        $this->open = $this->tickets->where('status', 1)->get();
        $this->overDue = $this->tickets->where('status', 2)->get();
        $this->closed = $this->tickets->where('status', 3)->get();


        $this->newCount = $newTickets = $this->new->count();
        $this->openCount = $openTickets = $this->open->count();
        $this->overDueCount = $overDueTickets = $this->overDue->count();
        $this->closedCount = $closedTickets = $this->closed->count();


        // $totalTickets = $this->tickets->count();


        // if ($totalTickets > 0) {
        //     $this->newPrcntg = number_format(($newTickets / $totalTickets) * 100, 2);
        //     $this->openPrcntg = number_format(($openTickets / $totalTickets) * 100, 2);
        //     $this->overDuePrcntg = number_format(($overDueTickets / $totalTickets) * 100, 2);
        //     $this->closedPrcntg = number_format(($closedTickets / $totalTickets) * 100, 2);
        // } else {

        //     $this->newPrcntg = 0;
        //     $this->openPrcntg = 0;
        //     $this->overDuePrcntg = 0;
        //     $this->closedPrcntg = 0;
        // }
    }

    public function changeStatus()
    {
        $this->updated=true;
    }


    public function refreshComponent()
    {
        if($this->updated)
        {

        $this->new = $this->tickets->where('status', 0)->get();
        $this->open = $this->tickets->where('status', 1)->get();
        $this->overDue = $this->tickets->where('status', 2)->get();
        $this->closed = $this->tickets->where('status', 3)->get();


        $this->newCount = $newTickets = $this->new->count();
        $this->openCount = $openTickets = $this->open->count();
        $this->overDueCount = $overDueTickets = $this->overDue->count();
        $this->closedCount = $closedTickets = $this->closed->count();

        $this->updated=false;

    }

        // $totalTickets = $this->tickets->count();


        // if ($totalTickets > 0) {
        //     $this->newPrcntg = number_format(($newTickets / $totalTickets) * 100, 2);
        //     $this->openPrcntg = number_format(($openTickets / $totalTickets) * 100, 2);
        //     $this->overDuePrcntg = number_format(($overDueTickets / $totalTickets) * 100, 2);
        //     $this->closedPrcntg = number_format(($closedTickets / $totalTickets) * 100, 2);
        // } else {

        //     $this->newPrcntg = 0;
        //     $this->openPrcntg = 0;
        //     $this->overDuePrcntg = 0;
        //     $this->closedPrcntg = 0;
        // }

        // dd($this->newPrcntg);


    }

    public function searchItems()
    {
        if ($this->searchItem) {
            $this->new = $this->tickets->where('status', 0)
                ->where(function ($query) {
                    $query->where('title1', 'like', '%' . $this->searchItem . '%')
                        ->orWhere('title2', 'like', '%' . $this->searchItem . '%')
                        ->orWhere('content', 'like', '%' . $this->searchItem . '%')
                        ->orWhere('contact', 'like', '%' . $this->searchItem . '%');
                })->get();

            $this->open = $this->tickets->where('status', 1)
                ->where(function ($query) {
                    $query->where('title1', 'like', '%' . $this->searchItem . '%')
                        ->orWhere('title2', 'like', '%' . $this->searchItem . '%')
                        ->orWhere('content', 'like', '%' . $this->searchItem . '%')
                        ->orWhere('contact', 'like', '%' . $this->searchItem . '%');
                })->get();

            $this->overDue = $this->tickets->where('status', 2)
                ->where(function ($query) {
                    $query->where('title1', 'like', '%' . $this->searchItem . '%')
                        ->orWhere('title2', 'like', '%' . $this->searchItem . '%')
                        ->orWhere('content', 'like', '%' . $this->searchItem . '%')
                        ->orWhere('contact', 'like', '%' . $this->searchItem . '%');
                })->get();

            $this->closed = $this->tickets->where('status', 3)
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
