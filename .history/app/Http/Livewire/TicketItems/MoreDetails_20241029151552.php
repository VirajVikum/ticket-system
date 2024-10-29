<?php

namespace App\Http\Livewire\TicketItems;

use App\Models\Ticket;
use LivewireUI\Modal\ModalComponent;

class MoreDetails extends ModalComponent
{
    public $ticketItem;

    public function mount($ticketItemId)
    {
        $this->ticketItem = Ticket::find($ticketItemId);
    }

    public function changeStatus($id)
    {
        $ticket = Ticket::find($id);
        if ($ticket) {
            $ticket->ticket_status_id = 2; // Replace 'new_status' with the desired status value
            $ticket->save();
        }
        $this->closeModal();
        // return redirect(request()->header('Referer'));

    }


    public function render()
    {
        return view('livewire.ticket-items.more-details');
    }
}
