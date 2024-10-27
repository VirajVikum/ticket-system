<?php

namespace App\Http\Livewire\TicketItems;

use App\Models\TicketItem;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class CountPanel extends Component
{
    public $newCount;
    public $openCount;
    public $overDueCount;
    public $closedCount;

    public $tickets;

    public function mount()
    {
        $this->tickets = Cache::remember('tickets_table', 60, function () {
            return TicketItem::all();
        });
        $this->newCount = $this->tickets->where('status', 1)->count();
        $this->openCount = $this->tickets->where('status', 2)->count();
        $this->overDueCount = $this->tickets->where('status', 3)->count();
        $this->closedCount = $this->tickets->where('status', 4)->count();
        
    }

    public function refreshComponent()
    {
        if($this->updated)
        {
            Cache::forget('tickets_table');

            $this->tickets = Cache::remember('tickets_table', 60, function () {
                return Ticket::all();
            });

        $this->new = $this->tickets->where('status', 0);
        $this->open = $this->tickets->where('status', 1);
        $this->overDue = $this->tickets->where('status', 2);
        $this->closed = $this->tickets->where('status', 3);


        $this->newCount = $newTickets = $this->new->count();
        $this->openCount = $openTickets = $this->open->count();
        $this->overDueCount = $overDueTickets = $this->overDue->count();
        $this->closedCount = $closedTickets = $this->closed->count();

        $this->updated=false;

    }

    public function render()
    {
        return view('livewire.ticket-items.count-panel');
    }
}
