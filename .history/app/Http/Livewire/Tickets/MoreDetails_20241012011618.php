<?php

namespace App\Http\Livewire\Tickets;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class MoreDetails extends ModalComponent
{
    public function render()
    {
        return view('livewire.tickets.more-details');
    }
}
