<?php

namespace App\Http\Livewire\Tickets\CountPercentageCharts;

use App\Models\Ticket;
use Livewire\Component;

class ClosedTicket extends Component
{
    public $progress;

    public function mount()
    {
        $newTickets = Ticket::where('status', 3)->count();
        $totalTickets = Ticket::count();

        if ($totalTickets > 0) {
            $this->progress = number_format(($newTickets / $totalTickets) * 100, 2);
        } else {
            
            $this->progress = 0;
        }

        
    }

    public function refreshComponent()
    {
        $newTickets = Ticket::where('status', 3)->count();
        $totalTickets = Ticket::count();

        if ($totalTickets > 0) {
            $this->progress = number_format(($newTickets / $totalTickets) * 100, 2);
        } else {
            
            $this->progress = 0;
        }
    }

    public function rotation()
    {
        // Rotation formula: 45 + (progress * 1.8)
        return 45 + ($this->progress * 1.8);
    }

    public function render()
    {
        return view('livewire.tickets.count-percentage-charts.closed-ticket');
    }
}
