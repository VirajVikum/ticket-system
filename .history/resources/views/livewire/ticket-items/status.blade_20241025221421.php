<div class="p-4 text-black rounded bg-green-500">
    <button class="
    {{ $ticketStatusId == 1 ? 'bg-green-500' : '' }}
    {{ $ticketStatusId == 2 ? 'bg-yellow-500' : '' }}
    {{ $ticketStatusId == 3 ? 'bg-red-500' : '' }}
    {{ $ticketStatusId == 4 ? 'bg-blue-500' : '' }}
     py-2 px-12">
    <label class=" bg-slate-500 ">{{ $ticketStatusId }}</label>
</button>

</div>
