<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="flex justify-between pb-2 gap-4">
                <div class="flex-1">
                    @livewire('ticket-items.counts.new-count')
                </div>
                <div class="flex-1">
                    @livewire('ticket-items.counts.open-count')
                </div>
                <div class="flex-1">
                    @livewire('ticket-items.counts.overdue-count')
                </div>
                <div class="flex-1">
                    @livewire('ticket-items.counts.closed-count')
                </div>
            </div>
            

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    {{-- @livewire('ticket-items.count-panel') --}}
                    

                    @livewire('ticket-item-table')

            <script>
                document.addEventListener('livewire:load', function () {
                    Livewire.on('openMoreDetailsModal', ticketItemId => {
                        Livewire.emit('openModal', 'ticket-items.more-details', { ticketItemId });
                    });
                });
            </script>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
