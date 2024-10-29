<?php

namespace App\Http\Livewire\TicketItems;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class AddTicket extends ModalComponent
{
    public function render()
    {
        return view('livewire.ticket-items.add-ticket');
    }
}
