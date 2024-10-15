<?php

namespace App\Http\Livewire\Tickets;

use Livewire\Component;

class CountPercentage extends Component
{
    public $progress = 10; // Initial progress percentage


    public function mount($progress)
    {
        $this->progress = $progress;
        dd($progress);
    }


    public function render()
    {
        return view('livewire.tickets.count-percentage');
    }
}
