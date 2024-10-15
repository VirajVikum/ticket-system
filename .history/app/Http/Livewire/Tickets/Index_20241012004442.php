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

    public function mount()
    {
        $this->new=Ticket::where('status',0);
    }

    public function render()
    {
        return view('livewire.tickets.index');
    }
}
