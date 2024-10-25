<?php

namespace App\Http\Livewire\TicketItems;

use App\Models\TicketItem;
use LivewireUI\Modal\ModalComponent;

class MoreDetails extends ModalComponent
{
    public $ticketItem;
    public $maxWidth = '2xl';

    public function mount($ticketItemId, $maxWidth = '3xl')
    {
        $this->ticketItem = TicketItem::find($ticketItemId);
        $this->maxWidth = $maxWidth;
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
        return view('livewire.ticket-items.more-details')->layout('layouts.app');
    }
}
