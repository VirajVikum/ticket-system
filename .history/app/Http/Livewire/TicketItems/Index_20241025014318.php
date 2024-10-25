<?php

namespace App\Http\Livewire\TicketItems;

use App\Models\TicketItem;
use Livewire\Component;

class Index extends Component
{
    public $id;

    public function mount($ticketItem)
    {
        $this->id=$ticketItem;
    }

    public function edit($id)
{
    // Logic to handle the edit action
    // For example, redirect to edit page or open a modal
}

public function delete()
{
    // Logic to delete the item
    TicketItem::destroy($this->id);
    $this->resetPage(); // Reset the table page to refresh data
    $this->emit('refreshDatatable'); // Optionally emit an event to refresh the datatable
}

    public function render()
    {
        return view('livewire.ticket-items.index');
    }
}
