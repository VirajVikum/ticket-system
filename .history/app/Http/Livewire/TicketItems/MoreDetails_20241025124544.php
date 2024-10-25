<?php

namespace App\Http\Livewire\TicketItems;

use App\Models\TicketItem;
use LivewireUI\Modal\ModalComponent;

class MoreDetails extends ModalComponent
{
    public $ticketItem;

    public function mount($ticketItemId)
    {
        $this->ticketItem = TicketItem::find($ticketItemId)->get();
    }

    public function render()
    {
        return view('livewire.ticket-items.more-details');
    }
}
