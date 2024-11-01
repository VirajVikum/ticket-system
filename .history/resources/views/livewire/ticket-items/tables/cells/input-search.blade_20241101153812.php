{{-- <div>
    <input type="text" wire:model.debounce.500ms="columnSearch.{{ $field }}" class="block w-full border-gray-300 rounded-md shadow-sm transition duration-150 ease-in-out sm:text-sm sm:leading-5  focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md" placeholder="Search {{ $field }}" />
</div> --}}

<div>
    <select wire:model.debounce.500ms="columnSearch.{{ $field }}" class="block w-full border-gray-300 rounded-md shadow-sm transition duration-150 ease-in-out sm:text-sm sm:leading-5 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
        <option value="">Any</option>
        <option value="1">New</option>
        <option value="2">Open</option>
        <option value="3">Overdue</option>
        <option value="4">Closed</option>
        <option value="5">Canceled</option>
    </select>
</div>


