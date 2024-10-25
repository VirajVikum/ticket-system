<?php

namespace App\Http\Livewire\TicketItems;

use App\Models\TicketItem;
use LivewireUI\Modal\ModalComponent;

class MoreDetails extends ModalComponent
{
    public $ticketItem;

    public function mount($ticketItemId)
    {
        $this->ticketItem = TicketItem::find($ticketItemId);
    }

    // Override modalOptions to set the size
    public function modalOptions()
    {
        return [
            'size' => 'xl', // You can use 'sm', 'md', 'lg', or 'xl' for sizes
        ];
    }
    

    public function render()
    {
        return view('livewire.ticket-items.more-details')->layout('welcome');;
    }
}
