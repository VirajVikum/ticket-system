<?php

namespace App\Http\Livewire\TicketItems;

use App\Models\Ticket;
use App\Models\TicketActivity;
use Illuminate\Support\Facades\Auth;
use LivewireUI\Modal\ModalComponent;

class MoreDetails extends ModalComponent
{
    public $ticketId;
    public $ticketItem;
    public $activities;
    public $comment;

    protected $listeners = ['commented' => 'addComment'];

    protected $rules = [
        'comment' => 'required',
    ];

    public function mount($ticketItemId)
    {
        $this->ticketId=$ticketItemId;
        $this->ticketItem = Ticket::find($ticketItemId);
        $this->activities=TicketActivity::all()->where('ticket_id', $this->$ticketItemId);
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

    public function addComment()
    {
        $this->validate();
        TicketActivity::create([
            'ticket_id'=>$this->ticketId,
            'type'=>'Commented',
            'comment'=>$this->comment,
            'user_id'=>Auth::id(),
        ]);
        $this->comment='';
    }


    public function render()
    {
        return view('livewire.ticket-items.more-details');
    }
}
