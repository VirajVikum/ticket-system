<?php

namespace App\Http\Livewire\Tickets;

use Livewire\Component;

class Index extends Component
{
    public $new;
    public $open;
    public $overDue;
    public $closed;

    public function mount()
    {

    }

    public function render()
    {
        return view('livewire.tickets.index');
    }
}
