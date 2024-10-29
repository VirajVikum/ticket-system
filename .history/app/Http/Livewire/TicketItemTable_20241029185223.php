<?php

namespace App\Http\Livewire;

use App\Models\Ticket;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;
use Rappasoft\LaravelLivewireTables\Views\Filters\TextFilter;

class TicketItemTable extends DataTableComponent
{
    protected $model = Ticket::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id')
            ->setSearchEnabled();
    }

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
                })
                ->hiddenFromAll(), // Hide from main filter menu
            
            TextFilter::make('ID Search')
                ->filter(function (Builder $builder, $value) {
                    $builder->where('id', 'like', '%' . $value . '%');
                }),
        ];
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable()
                ->searchable()
                ->secondaryHeaderFilter(TextFilter::make('ID Search')->label('ID')), // Inline text filter

            Column::make("Topic", "topic")
                ->sortable()
                ->searchable()
                ->format(fn($value) => '<div class="text-center">' . e($value) . '</div>')
                ->html(),

            Column::make("Ticket Status", "ticket_status_id")
                ->sortable()
                ->secondaryHeader($this->getFilterByKey('ticket_status_id')) // Inline dropdown filter for Ticket Status
                ->format(fn($value) => '<div class="text-center">' . e($value) . '</div>')
                ->html(),

            // Additional columns as defined
            Column::make("Description", "description")->sortable()->searchable()
                ->format(fn($value) => '<div class="text-center">' . e($value) . '</div>')
                ->html(),

            Column::make("Created at", "created_at")->sortable()->searchable()
                ->format(fn($value) => '<div class="text-center">' . e($value) . '</div>')
                ->html(),
            
            Column::make("Updated at", "updated_at")->sortable()->searchable()
                ->format(fn($value) => '<div class="text-center">' . e($value) . '</div>')
                ->html(),
            
            Column::make("View")
                ->label(fn($row) => view('livewire.ticket-items.index', ['ticketItemId' => $row->id]))
                ->html(),

            Column::make("Status")
                ->label(fn($row) => view('livewire.ticket-items.status', ['ticketStatusId' => $row->ticket_status_id]))
                ->html()
                ->format(fn($value) => '<div class="text-center">' . e($value) . '</div>')
                ->html(),
        ];
    }

    public function delete($id)
    {
        Ticket::destroy($id);
    }

    public function openModal($id)
    {
        $this->emit('openMoreDetailsModal', $id);
    }
}
