<div wire:poll.2000ms="refreshComponent" class="flex flex-col items-center justify-between bg-gradient-to-r from-gray-100 to-gray-400 p-4 rounded-lg shadow-lg border-2 border-green-400 transition-transform duration-300 hover:scale-105">
    <h1 class="text-xl font-bold text-gray-800 mb-2">New</h1>
    <p class="font-semibold text-white px-3 py-2 rounded-full text-lg bg-black">
         {{ $newCount }}
    </p>
</div>