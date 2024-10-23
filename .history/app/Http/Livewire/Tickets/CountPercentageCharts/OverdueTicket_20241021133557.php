<?php

namespace App\Http\Livewire\Tickets\CountPercentageCharts;

use App\Models\Ticket;
use Livewire\Component;

class OverdueTicket extends Component
{
    public $progress;

    public $updated =false;

    protected $listeners = ['updated' => 'changeStatus'];

    public function mount()
    {
        $newTickets = Ticket::where('status', 2)->count();
        $totalTickets = Ticket::count();

        if ($totalTickets > 0) {
            $this->progress = number_format(($newTickets / $totalTickets) * 100, 2);
        } else {
            
            $this->progress = 0;
        }

        
    }

    public function changeStatus()
    {
        $this->updated=true;
    }

    public function refreshComponent()
    {
        if($this->updated)
        {
        $newTickets = Ticket::where('status', 2)->count();
        $totalTickets = Ticket::count();

        if ($totalTickets > 0) {
            $this->progress = number_format(($newTickets / $totalTickets) * 100, 2);
        } else {
            
            $this->progress = 0;
        }
    }
    }

    public function rotation()
    {
        // Rotation formula: 45 + (progress * 1.8)
        return 45 + ($this->progress * 1.8);
    }

    public function render()
    {
        return view('livewire.tickets.count-percentage-charts.overdue-ticket');
    }
}
