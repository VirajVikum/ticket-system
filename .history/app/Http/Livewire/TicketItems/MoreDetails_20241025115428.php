<?php

namespace App\Http\Livewire\TicketItems;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class MoreDetails extends ModalComponent
{
    public function render()
    {
        return view('livewire.ticket-items.more-details');
    }
}
