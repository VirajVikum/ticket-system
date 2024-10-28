<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\TicketItem;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;

class TicketItemTable extends DataTableComponent
{
    protected $model = TicketItem::class;

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
                    // Apply the filter to the query
                    if ($value) {
                        $builder->where('ticket_status_id', $value);
                    }
                }),
        ];
    }

    // public function query(): Builder
    // {
    //     return TicketItem::query(); // Base query without any filters applied
    // }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")->sortable()->searchable(),
            Column::make("Topic", "topic")->sortable()->searchable(),
            Column::make("Description", "description")->sortable()->searchable(),
            Column::make("Lead id", "lead_id")->sortable()->searchable(),
            Column::make("Ticket category id", "ticket_category_id")->sortable()->searchable(),
            Column::make("Ticket sub category id", "ticket_sub_category_id")->sortable()->searchable(),
            Column::make("Call id", "call_id")->sortable()->searchable(),
            Column::make("Tags", "tags")->sortable()->searchable(),
            Column::make("Outlet id", "outlet_id")->sortable()->searchable(),
            Column::make("Crm", "crm")->sortable()->searchable(),
            Column::make("Order ref", "order_ref")->sortable()->searchable(),
            Column::make("Ticket status id", "ticket_status_id")->sortable()->searchable(),
            Column::make("Due at", "due_at")->sortable()->searchable(),
            Column::make("Bill no", "bill_no")->sortable()->searchable(),
            Column::make("Is synced", "is_synced")->sortable()->searchable(),
            Column::make("Synced at", "synced_at")->sortable()->searchable(),
            Column::make("Created at", "created_at")->sortable()->searchable(),
            Column::make("Updated at", "updated_at")->sortable()->searchable(),
            Column::make("Deleted at", "deleted_at")->sortable()->searchable(),
            Column::make("View")
                ->label(function ($row) {
                    return view('livewire.ticket-items.index', ['ticketItemId' => $row->id]);
                })
                ->html(),
            Column::make("Status")
                ->label(function ($row) {
                    return view('livewire.ticket-items.status', ['ticketStatusId' => $row->ticket_status_id]);
                })
                ->html(),
        ];
    }

    // Method to set row class based on ticket_status_id
    // public function rowClass($row): ?string
    // {
    //     switch ($row->ticket_status_id) {
    //         case 1:
    //             return 'bg-red-600';
    //         case 2:
    //             return 'bg-yellow-100';
    //         case 3:
    //             return 'bg-green-100';
    //         default:
    //             return 'bg-black';
    //     }
    // }

    public function delete($id)
    {
        TicketItem::destroy($id);
    }

    public function openModal($id)
    {
        $this->emit('openMoreDetailsModal', $id);
    }
}
