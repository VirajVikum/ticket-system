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

        // Total tickets
    $totalTickets = Ticket::count();
    
    // Avoid division by zero
    if ($totalTickets > 0) {
        $this->newPrcntg = ($this->new / $totalTickets) * 100;
        $this->openPrcntg = ($this->open / $totalTickets) * 100;
        $this->overDuePrcntg = ($this->overDue / $totalTickets) * 100;
        $this->closedPrcntg = ($this->closed / $totalTickets) * 100;
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
