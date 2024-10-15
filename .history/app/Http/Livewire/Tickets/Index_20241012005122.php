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
        $this->new=Ticket::where('status',0)->get();
        $this->open=Ticket::where('status',1)->get();
        $this->overDue=Ticket::where('status',2)->get();
        $this->closed=Ticket::where('status',3)->get();
    }

    public function render()
    {
        return view('livewire.tickets.index');
    }
}
