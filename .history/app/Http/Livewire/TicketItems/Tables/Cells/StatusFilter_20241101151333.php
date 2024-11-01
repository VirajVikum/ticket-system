<?php

namespace App\Http\Livewire\TicketItems\Tables\Cells;

use Livewire\Component;

class StatusFilter extends Component
{
    public function updatedColumnSearchStatus($value)
{
    $this->builder->where('ticket_status_id', $value);
}


    public function render()
    {
        return view('livewire.ticket-items.tables.cells.status-filter');
    }
}
