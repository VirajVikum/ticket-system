<div>
<div wire:poll="refreshComponent" class="flex flex-col items-center">
    <div class="relative text-center">
        <!-- The progress bar container -->
        <div class="barOverflow relative overflow-hidden w-24 h-12">
            <!-- The rotating bar -->
            <div class="bar absolute top-0 left-0 w-24 h-24 rounded-full border-4 border-gray-200"
                 style="transform: rotate({{ $this->rotation() }}deg); border-bottom-color: #0bf; border-right-color: #0bf;">
            </div>
        </div>
        <!-- Percentage display -->
        <span class="absolute top-0 left-0 right-0 bottom-0 flex items-center justify-center text-2xl font-bold text-gray-700">
            {{ $progress }}
        </span>%
    </div>
</div>

<!-- Tailwind custom CSS -->
<style>
.barOverflow {
    margin-bottom: -14px; /* Adjust the positioning of numbers */
}

.bar {
    border-bottom-color: #e5e7eb; /* default gray bottom */
    border-right-color: #e5e7eb; /* default gray right */
    box-sizing: border-box;
}
</style>
</div>