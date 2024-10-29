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
            ->setSearchEnabled() // Ensure this is set
            ->setColumnSearchEnabled(); // Enable column search
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
                }),

            TextFilter::make('ID Search')
                ->filter(function (Builder $builder, $value) {
                    $builder->where('id', 'like', '%' . $value . '%');
                }),
        ];
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")->sortable()->searchable()
                ->secondaryHeader(function() {
                    return view('livewire.ticket-items.tables.cells.input-search', ['field' => 'id', 'columnSearch' => $this->columnSearch]);
                })
                ->format(function ($value) {
                    return '<div class="text-center">' . e($value) . '</div>';
                }),

            Column::make("Topic", "topic")->sortable()->searchable()
                ->format(function ($value) {
                    return '<div class="text-center">' . e($value) . '</div>';
                })
                ->html(),

            Column::make("Description", "description")->sortable()->searchable()
                ->format(function ($value) {
                    return '<div class="text-center">' . e($value) . '</div>';
                })
                ->html(),

            Column::make("Lead id", "lead_id")->sortable()->searchable()
                ->format(function ($value) {
                    return '<div class="text-center">' . e($value) . '</div>';
                })
                ->html(),

            Column::make("Tags", "tags")->sortable()->searchable()
                ->format(function ($value) {
                    $displayValue = is_array($value) ? implode(', ', $value) : $value;
                    return '<div class="text-center">' . e($displayValue) . '</div>';
                })
                ->html(),

            // Other columns remain the same...
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
