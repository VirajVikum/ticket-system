<?php

namespace App\Http\Livewire\Tickets;

use App\Models\Ticket;
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

    public function mount()
    {
        $this->new=Ticket::where('status',0)->get();
        $this->open=Ticket::where('status',1)->get();
        $this->overDue=Ticket::where('status',2)->get();
        $this->closed=Ticket::where('status',3)->get();

       // Fetch tickets for each status and count them
    $newTickets = Ticket::where('status', 0)->count();
    $openTickets = Ticket::where('status', 1)->count();
    $overDueTickets = Ticket::where('status', 2)->count();
    $closedTickets = Ticket::where('status', 3)->count();

    // Total tickets
    $totalTickets = Ticket::count();

    // Avoid division by zero
    if ($totalTickets > 0) {
        $this->newPrcntg = ($newTickets / $totalTickets) * 100;
        $this->openPrcntg = ($openTickets / $totalTickets) * 100;
        $this->overDuePrcntg = ($overDueTickets / $totalTickets) * 100;
        $this->closedPrcntg = ($closedTickets / $totalTickets) * 100;
    } else {
        // Set percentages to 0 if no tickets are found
        $this->newPrcntg = 0;
        $this->openPrcntg = 0;
        $this->overDuePrcntg = 0;
        $this->closedPrcntg = 0;
    }
    
    }

    public function refreshComponent()
{
    $this->new = Ticket::where('status', 0)->get();
    $this->open = Ticket::where('status', 1)->get();
    $this->overDue = Ticket::where('status', 2)->get();
    $this->closed = Ticket::where('status', 3)->get();
}

    public function render()
    {
        return view('livewire.tickets.index');
    }
}
