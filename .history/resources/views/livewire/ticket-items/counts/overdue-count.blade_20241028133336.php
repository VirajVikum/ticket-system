<div wire:poll.2000ms="refreshComponent" class="flex items-center justify-between bg-gradient-to-r from-red-100 to-red-200 p-4 rounded-lg shadow-lg transition-transform duration-300 hover:scale-105">
    <p class="font-semibold text-red-800 px-3 py-2 rounded-full text-lg bg-red-300/50">
        Overdue: {{ $overdueCount }}
    </p>
</div>
