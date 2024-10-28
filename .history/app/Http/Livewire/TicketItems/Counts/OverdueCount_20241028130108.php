<?php

namespace App\Http\Livewire\TicketItems\Counts;

use Livewire\Component;

class OverdueCount extends Component
{
    public function render()
    {
        return view('livewire.ticket-items.counts.overdue-count');
    }
}
