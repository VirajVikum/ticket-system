<div wire:poll="refreshComponent" class="flex">
    <p class="font-semibold bg-yellow-100 px-2 py-1 rounded text-lg mb-4">New : {{ $newCount }}</p>
    <p class="font-semibold bg-yellow-100 px-2 py-1 rounded text-lg mb-4">Open : {{ $openCount }}</p>
    <p class="font-semibold bg-yellow-100 px-2 py-1 rounded text-lg mb-4">Overdue : {{ $overDueCount }}</p>
    <p class="font-semibold bg-yellow-100 px-2 py-1 rounded text-lg mb-4">Closed : {{ $closedCount }}</p>
</div>
