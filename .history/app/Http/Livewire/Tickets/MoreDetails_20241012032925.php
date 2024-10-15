<?php

namespace App\Http\Livewire\Tickets;

use App\Models\Ticket;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class MoreDetails extends ModalComponent
{
    public $ticketId;

    public function mount($ticket)
    {
        $this->ticketId=$ticket;
    }

    public function changeStatus()
    {
        $ticket = Ticket::find($this->ticketId);

    if ($ticket) {
        $ticket->update(['status' => 1]);
    }
    }

    public function render()
    {
        return view('livewire.tickets.more-details');
    }
}
