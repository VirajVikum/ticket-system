<div>
    <!-- Example button that triggers a Livewire action -->
    {{-- <button wire:click="edit({{ $ticketItem->id }})" class="bg-blue-500 text-white px-2 py-1 rounded">
        Edit
    </button> --}}

    <button wire:click="delete({{ $ticketItemId }})" class="bg-blue-500 text-white px-2 py-1 rounded">
        Delete
    </button>
    <button wire:click="openModal({{ $ticketItemId }})" class="bg-blue-500 text-white px-2 py-1 rounded">
        Open
    </button>
</div>