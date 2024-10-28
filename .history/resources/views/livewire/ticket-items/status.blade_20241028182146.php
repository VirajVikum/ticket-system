<div
    class=" @if ($ticketStatusId == 1) bg-green-300 @elseif($ticketStatusId == 2) bg-red-300 @elseif($ticketStatusId == 3) bg-gray-300 @else bg-yellow-200 @endif
     py-2 px-12 rounded-full flex items-center justify-center" wire:poll.1500ms>
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
