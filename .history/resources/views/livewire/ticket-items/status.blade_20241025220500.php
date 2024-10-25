<div class="
    p-4 text-black rounded 
    {{ $ticketStatusId == 1 ? 'bg-green-500' : '' }}
    {{ $ticketStatusId == 2 ? 'bg-yellow-500' : '' }}
    {{ $ticketStatusId == 3 ? 'bg-red-500' : '' }}
    {{ $ticketStatusId == 4 ? 'bg-blue-500' : '' }}
">
    <label>{{ $ticketStatusId }}</label>
</div>
