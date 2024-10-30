<div class="@if ($ticketStatusId == 1) bg-blue-200 hover:bg-blue-400 
           @elseif($ticketStatusId == 2) bg-green-200 hover:bg-green-400 
           @elseif($ticketStatusId == 3) bg-red-200 hover:bg-red-400 
           @elseif($ticketStatusId == 4) bg-neutral-200 hover:bg-neutral-400 
           @else bg-yellow-700 hover:bg-yellow-800 @endif 
           py-2 px-12 rounded-full flex items-center justify-center transition-colors duration-200"
    wire:poll.1500ms>
    <label class="text-black text-bold">
        @if ($ticketStatusId == 1)
            New
        @elseif($ticketStatusId == 2)
            Open
        @elseif($ticketStatusId == 3)
            Overdue
        @elseif($ticketStatusId == 4)
            Closed
        @elseif($ticketStatusId == 5)
            Canceled
        @endif
    </label>
</div>