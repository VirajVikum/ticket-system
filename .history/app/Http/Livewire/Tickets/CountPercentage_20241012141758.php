<?php

namespace App\Http\Livewire\Tickets;

use Livewire\Component;

class CountPercentage extends Component
{
    public $progress = 10; // Initial progress percentage

    protected $listeners = ['refresh'];

    public function mount($progress)
    {
        $this->progress = $progress;
    }

    
    public function refresh()
    {
        $this->mount(10);
    }

    public function render()
    {
        return view('livewire.tickets.count-percentage');
    }
}
