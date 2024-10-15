<?php

namespace App\Http\Livewire\Tickets;

use App\Models\Ticket;
use Livewire\Component;

class CountPercentageChart extends Component
{
    public $progress;

    public function mount()
    {
        $newTickets = Ticket::where('status', 0)->count();
        


        $totalTickets = Ticket::count();

     
        if ($totalTickets > 0) {
            $this->progress = number_format(($newTickets / $totalTickets) * 100, 2);
            
        } else {
            
            $this->progress = 0;
            
        }
    }

    public function render()
    {
        return view('livewire.tickets.count-percentage-chart');
    }
}
