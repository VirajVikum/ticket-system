<?php

namespace App\Http\Livewire\TicketItems\Counts;

use App\Models\TicketItem;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class OpenCount extends Component
{
    public function render()
    {
        return view('livewire.ticket-items.counts.open-count');
    }

    public $openCount;


    public function mount()
    {
        $this->openCount = Cache::remember('tickets_table', 60, function () {
            return TicketItem::where('ticket_status_id', 2)->count();
        });
    }

    public function refreshComponent()
    {
            Cache::forget('tickets_table');

            $this->openCount = Cache::remember('tickets_table', 60, function () {
                return TicketItem::where('ticket_status_id', 2)->count();
            });
        
    }
}
