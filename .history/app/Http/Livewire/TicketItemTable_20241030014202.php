<?php

namespace App\Http\Livewire;

use App\Models\Ticket;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;
use Rappasoft\LaravelLivewireTables\Views\Filters\TextFilter;

class TicketItemTable extends DataTableComponent
{
    protected $model = Ticket::class;


    public $columnSearch = [
        'id' => null,
    ];


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
                    '' => 'Any', // Default option
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

            // Add TextFilter for ID search
            // TextFilter::make('ID Search')
            //     ->filter(function (Builder $builder, $value) {
            //         $builder->where('id', 'like', '%' . $value . '%');
            //     }),
        ];
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")->sortable()->searchable()->format(function ($value) {
                return '<div class="text-center">' . e($value) . '</div>';
            })
            ->format(function ($value) {
                return $value + 0;
            })

            ->secondaryHeader(function() {
                return view('livewire.ticket-items.tables.cells.input-search', ['field' => 'id', 'columnSearch' => $this->columnSearch]);
            })
            ->footer(function($rows) {
                return '<strong>Name Footer</strong>';
            })->html(),


            Column::make("Topic", "topic")->sortable()->searchable()
            ->format(function ($value) {
                return '<div class="text-center">' . e($value) . '</div>';
            })
            ->secondaryHeader(function() {
                return view('livewire.ticket-items.tables.cells.input-search', ['field' => 'topic', 'columnSearch' => $this->columnSearch]);
            })
            ->footer(function($rows) {
                return '<strong>Name Footer</strong>';
            })
            ->html(),

            Column::make("Description", "description")->sortable()->searchable()
            ->format(function ($value) {
                return '<div class="text-center">' . e($value) . '</div>';
            })
            ->html()->secondaryHeaderFilter('active'),
            Column::make("Lead id", "lead_id")->sortable()->searchable()
            ->format(function ($value) {
                return '<div class="text-center">' . e($value) . '</div>';
            })
            ->html(),
            Column::make("Ticket category id", "ticket_category_id")->sortable()->searchable()
            ->format(function ($value) {
                return '<div class="text-center">' . e($value) . '</div>';
            })
            ->html(),
            Column::make("Ticket sub category id", "ticket_sub_category_id")->sortable()->searchable()
            ->format(function ($value) {
                return '<div class="text-center">' . e($value) . '</div>';
            })
            ->html(),

            Column::make("Call id", "call_id")->sortable()->searchable()
            ->format(function ($value) {
                return '<div class="text-center">' . e($value) . '</div>';
            })

            ->secondaryHeader(function() {
                return view('livewire.ticket-items.tables.cells.input-search', ['field' => 'call_id', 'columnSearch' => $this->columnSearch]);
            })
            ->footer(function($rows) {
                return '<strong>Name Footer</strong>';
            })
            ->html(),

            Column::make("Tags", "tags")->sortable()->searchable()
    ->format(function ($value) {
        // If $value is an array, join its elements into a string
        $displayValue = is_array($value) ? implode(', ', $value) : $value;
        return '<div class="text-center">' . e($displayValue) . '</div>';
    })
    ->html(),

            Column::make("Outlet id", "outlet_id")->sortable()->searchable()
            ->format(function ($value) {
                return '<div class="text-center">' . e($value) . '</div>';
            })
            ->html(),
            Column::make("Crm", "crm")->sortable()->searchable()
            ->format(function ($value) {
                return '<div class="text-center">' . e($value) . '</div>';
            })
            ->html(),
            Column::make("Order ref", "order_ref")->sortable()->searchable()
            ->format(function ($value) {
                return '<div class="text-center">' . e($value) . '</div>';
            })
            ->html(),
            Column::make("Ticket status id", "ticket_status_id")->sortable()->searchable()
            ->format(function ($value) {
                return '<div class="text-center">' . e($value) . '</div>';
            })
            ->html(),
            Column::make("Due at", "due_at")->sortable()->searchable()
            ->format(function ($value) {
                return '<div class="text-center">' . e($value) . '</div>';
            })
            ->html(),
            Column::make("Bill no", "bill_no")->sortable()->searchable()
            ->format(function ($value) {
                return '<div class="text-center">' . e($value) . '</div>';
            })

            ->secondaryHeader(function() {
                return view('livewire.ticket-items.tables.cells.input-search', ['field' => 'bill_no', 'columnSearch' => $this->columnSearch]);
            })
            ->footer(function($rows) {
                return '<strong>Name Footer</strong>';
            })
            ->html(),

            Column::make("Is synced", "is_synced")->sortable()->searchable()
            ->format(function ($value) {
                return '<div class="text-center">' . e($value) . '</div>';
            })
            ->html(),
            Column::make("Synced at", "synced_at")->sortable()->searchable()
            ->format(function ($value) {
                return '<div class="text-center">' . e($value) . '</div>';
            })
            ->html(),
            Column::make("Created at", "created_at")->sortable()->searchable()
            ->format(function ($value) {
                return '<div class="text-center">' . e($value) . '</div>';
            })
            ->html(),
            Column::make("Updated at", "updated_at")->sortable()->searchable()
            ->format(function ($value) {
                return '<div class="text-center">' . e($value) . '</div>';
            })
            ->html(),
            Column::make("Deleted at", "deleted_at")->sortable()->searchable()
            ->format(function ($value) {
                return '<div class="text-center">' . e($value) . '</div>';
            })
            ->html(),
            Column::make("View")
                ->label(function ($row) {
                    return view('livewire.ticket-items.index', ['ticketItemId' => $row->id]);
                })
                ->html(),
            Column::make("Status")
                ->label(function ($row) {
                    return view('livewire.ticket-items.status', ['ticketStatusId' => $row->ticket_status_id]);
                })
                ->html()
                ->format(function ($value) {
                    return '<div class="text-center">' . e($value) . '</div>';
                })
                ->html(),
        ];
    }

    public function builder():EloquentBuilder
    {
        return Ticket::query()
            ->when($this->columnSearch['id'] ?? null, fn ($query, $name) => $query->where('tickets.id', 'like', '%' . $name . '%'))
            ->when($this->columnSearch['topic'] ?? null, fn ($query, $topic) => $query->where('tickets.topic', 'like', '%' . $topic . '%'))
            ->when($this->columnSearch['bill_no'] ?? null, fn ($query, $bill_no) => $query->where('tickets.bill_no', 'like', '%' . $bill_no . '%'))
            ->when($this->columnSearch['call_id'] ?? null, fn ($query, $call_id) => $query->where('tickets.call_id', 'like', '%' . $call_id . '%'))
            ;
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
