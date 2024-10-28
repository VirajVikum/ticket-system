<div wire:poll.2000ms="refreshComponent" class="flex flex-col items-center justify-between bg-gradient-to-r from-red-100 to-red-400 p-4 rounded-lg shadow-lg border-2 border-black transition-transform duration-300 hover:scale-105 hover:border-red-400">
    <h1 class="text-md font-bold text-gray-800 mb-2">Overdue</h1>
    <p class="font-semibold text-black px-3 py-1 rounded-full text-4xl ">
         {{ $overdueCount }}
    </p>
</div>
