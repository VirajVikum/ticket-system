<div
    class=" @if ($ticketStatusId == 1) bg-green-300 @elseif($ticketStatusId == 2) bg-red-300 @elseif($ticketStatusId == 3) bg-gray-300 @else bg-yellow-200 @endif
     py-2 px-12 rounded" wire:poll.750ms>
    <label class="">
        @if ($ticketStatusId == 1)
            New
        @elseif($ticketStatusId == 2)
            Open
        @elseif($ticketStatusId == 3)
            Expired
        @elseif($ticketStatusId == 4)
            Closed
        @endif
    </label>
</div>
