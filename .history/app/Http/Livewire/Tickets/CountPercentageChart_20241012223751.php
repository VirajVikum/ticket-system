<?php

namespace App\Http\Livewire\Tickets;

use App\Models\Ticket;
use Livewire\Component;

class CountPercentageChart extends Component
{
    public $progress = 0;

    public function mount($progress)
    {
        $this->progress = $progress;
    }

    public function rotation()
    {
        // Rotation formula: 45 + (progress * 1.8)
        return 45 + ($this->progress * 1.8);
    }

    public function render()
    {
        return view('livewire.tickets.count-percentage-chart');
    }
}