<div>
    <select wire:model="columnSearch.{{ $field }}" class="block w-full border-gray-300 rounded-md shadow-sm transition duration-150 ease-in-out sm:text-sm sm:leading-5 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
        <option value="">Select Status</option>
        @foreach($statuses as $status)
            <option value="{{ $status }}">{{ $status }}</option>
        @endforeach
    </select>
</div>

