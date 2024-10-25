namespace App\Http\Livewire\TicketItems;

use LivewireUI\Modal\ModalComponent;

class MoreDetails extends ModalComponent
{
    public $ticketItemId;

    public function mount($ticketItemId)
    {
        $this->ticketItemId = $ticketItemId;
    }

    public function render()
    {
        return view('livewire.ticket-items.more-details');
    }
}
