<?php

namespace App\Http\Livewire\TicketItems;

use App\Models\TicketItem;
use Livewire\Component;

class Index extends Component
{
    public $ticketItemId; // Renaming to avoid ID conflict

    protected $listeners = ['delete' => 'delete'];

    public function mount($ticketItem)
    {
        $this->ticketItemId = $ticketItem->id;
    }

    public function edit($id)
    {
        // Logic to handle the edit action
        // Example: Open a modal or redirect to the edit page
    }

    public function delete($id)
    {
        // Logic to delete the ticket item
        TicketItem::destroy($id);

        // Optionally refresh the table or emit an event
        // $this->emit('refreshDatatable');
    }

    public function render()
    {
        return view('livewire.ticket-items.index');
    }
}
