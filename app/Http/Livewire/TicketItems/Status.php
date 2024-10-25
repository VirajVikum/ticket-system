<?php

namespace App\Http\Livewire\TicketItems;

use Livewire\Component;

class Status extends Component
{
    public $statusId;
    public $status;

    public function mount($ticketStatusId)
    {
        $this->statusId=$ticketStatusId;
    }

    public function render()
    {
        return view('livewire.ticket-items.status');
    }
}
