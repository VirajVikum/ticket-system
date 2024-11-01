<?php

namespace App\Http\Livewire\TicketItems\Tables\Cells;

use Livewire\Component;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;

class StatusFilter extends Component
{
    public array $filters = [];

    public function filters(): array
{
    return [
        SelectFilter::make('Ticket Status')
            ->options([
                '' => 'Any', 
                1 => 'New',
                2 => 'Open',
                3 => 'Overdue',
                4 => 'Closed',
                5 => 'Canceled',
            ])
            ->filter(function (Builder $builder, $value) {
                if ($value) {
                    $builder->where('ticket_status_id', $value);
                }
            }),
    ];
}



    public function render()
    {
        return view('livewire.ticket-items.tables.cells.status-filter');
    }
}
