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

    public $newCount;
    public $openCount;
    public $overDueCount;
    public $closedCount;

    public function mount()
    {
        $this->new = Ticket::where('status', 0)->get();
        $this->open = Ticket::where('status', 1)->get();
        $this->overDue = Ticket::where('status', 2)->get();
        $this->closed = Ticket::where('status', 3)->get();

        
        $this->newCount = $newTickets = Ticket::where('status', 0)->count();
        $openTickets = Ticket::where('status', 1)->count();
        $overDueTickets = Ticket::where('status', 2)->count();
        $closedTickets = Ticket::where('status', 3)->count();


        $totalTickets = Ticket::count();

     
        if ($totalTickets > 0) {
            $this->newPrcntg = number_format(($newTickets / $totalTickets) * 100, 2);
            $this->openPrcntg = number_format(($openTickets / $totalTickets) * 100, 2);
            $this->overDuePrcntg = number_format(($overDueTickets / $totalTickets) * 100, 2);
            $this->closedPrcntg = number_format(($closedTickets / $totalTickets) * 100, 2);
        } else {
            
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

        
        $this->newCount = $newTickets = Ticket::where('status', 0)->count();
        $this->openCount = $openTickets = Ticket::where('status', 1)->count();
        $this->overDueCount = $overDueTickets = Ticket::where('status', 2)->count();
        $this->closedCount = $closedTickets = Ticket::where('status', 3)->count();

       
        $totalTickets = Ticket::count();

       
        if ($totalTickets > 0) {
            $this->newPrcntg = number_format(($newTickets / $totalTickets) * 100, 2);
            $this->openPrcntg = number_format(($openTickets / $totalTickets) * 100, 2);
            $this->overDuePrcntg = number_format(($overDueTickets / $totalTickets) * 100, 2);
            $this->closedPrcntg = number_format(($closedTickets / $totalTickets) * 100, 2);
        } else {
            
            $this->newPrcntg = 0;
            $this->openPrcntg = 0;
            $this->overDuePrcntg = 0;
            $this->closedPrcntg = 0;
        }

        dd($this->newPrcntg);
        
        
    }

    public function render()
    {
        return view('livewire.tickets.index');
    }
}
