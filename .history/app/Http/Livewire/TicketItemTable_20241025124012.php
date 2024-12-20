<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\TicketItem;

class TicketItemTable extends DataTableComponent
{
    protected $model = TicketItem::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")->sortable(),
            Column::make("Topic", "topic")->sortable(),
            Column::make("Description", "description")->sortable(),
            Column::make("Lead id", "lead_id")->sortable(),
            Column::make("Ticket category id", "ticket_category_id")->sortable(),
            Column::make("Ticket sub category id", "ticket_sub_category_id")->sortable(),
            Column::make("Call id", "call_id")->sortable(),
            Column::make("Tags", "tags")->sortable(),
            Column::make("Outlet id", "outlet_id")->sortable(),
            Column::make("Crm", "crm")->sortable(),
            Column::make("Order ref", "order_ref")->sortable(),
            Column::make("Ticket status id", "ticket_status_id")->sortable(),
            Column::make("Due at", "due_at")->sortable(),
            Column::make("Bill no", "bill_no")->sortable(),
            Column::make("Is synced", "is_synced")->sortable(),
            Column::make("Synced at", "synced_at")->sortable(),
            Column::make("Created at", "created_at")->sortable(),
            Column::make("Updated at", "updated_at")->sortable(),
            Column::make("Deleted at", "deleted_at")->sortable(),

            // Adding Actions Column without referencing a database column
            Column::make("Actions")
                ->label(function ($row) {
                    return view('livewire.ticket-items.index', ['ticketItemId' => $row]);
                })
                ->html(), // Render as HTML to allow button display
        ];
    }

    public function delete($id)
    {
        // Logic to delete the ticket item by its ID
        TicketItem::destroy($id);

        // Optionally refresh the table or emit an event
        // $this->emit('refreshDatatable');
    }

    public function openModal($id)
{
    $this->emit('openMoreDetailsModal', $id);
}
}
