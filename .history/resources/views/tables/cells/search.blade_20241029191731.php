<!-- resources/views/tables/cells/input-search.blade.php -->
<input type="text" wire:model.debounce.500ms="columnSearch.{{ $field }}" class="form-input" placeholder="Search {{ $field }}" />
