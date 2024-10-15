<?php

namespace App\Http\Livewire\Tickets;

use Livewire\Component;

class CountPercentageChart extends Component
{
    public $percentage =5;

    public function render()
    {
        return view('livewire.tickets.count-percentage-chart');
    }
}
