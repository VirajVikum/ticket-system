<div
    class="@if ($ticketStatusId == 1) bg-blue-400 hover:bg-blue-600 
           @elseif($ticketStatusId == 2) bg-red-300 hover:bg-red-400 
           @elseif($ticketStatusId == 3) bg-gray-300 hover:bg-gray-400 
           @elseif($ticketStatusId == 4) bg-yellow-100 hover:bg-yellow-200 
           @else bg-purple-200 hover:bg-purple-300 
           @endif 
           py-2 px-12 rounded-full flex items-center justify-center transition-colors duration-200" 
    wire:poll.1500ms>
    <label class="">
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
