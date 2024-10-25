<div class="p-4 text-black rounded bg-green-500">
    <button class=" @if($ticketStatusId==1) bg-green-300 @elseif($ticketStatusId==2) bg-red-600 @elseif($ticketStatusId==3) bg-purple-600 @else bg-blue-600 @endif
     py-2 px-12">
    <label class=" bg-slate-500 ">{{ $ticketStatusId }}</label>
</button>

</div>
