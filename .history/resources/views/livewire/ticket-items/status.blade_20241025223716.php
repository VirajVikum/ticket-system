
    <div class=" @if($ticketStatusId==1) bg-green-300 @elseif($ticketStatusId==2) bg-red-600 @elseif($ticketStatusId==3) bg-purple-600 @else bg-blue-600 @endif
     py-2 px-12">
     <label class="">
        @if($ticketStatusId == 1)
        New
        @elseif($ticketStatusId == 2)
        Open
        @elseif($ticketStatusId == 3)
            Expired
        @endif
    </label>
</div>


