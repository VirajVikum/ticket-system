<div wire:poll="refreshComponent" class="flex justify-center p-8">
    <!-- Kanban Board -->

    <div class="flex space-x-6 w-full max-w-7xl">
        <!-- Column 1: To Do -->    

        <div class="w-1/4 bg-white shadow-md rounded-lg p-4">

            


            
            
            <livewire:tickets.count-percentage-charts.new-ticket />
        

             <p class="font-semibold bg-yellow-100 px-2 py-1 rounded text-lg mb-4">Count : {{$newCount}}</p>


            <h2 class="font-bold text-lg mb-4">New</h2>
            <div class="space-y-4">

                @foreach ($new as $nw)
                
                <div class="bg-yellow-100 p-4 rounded-md">
                    {{-- <a href=""> --}}
                        <div class="flex justify-between">
                    <span class="text-sm text-black px-2 py-1 rounded">Ticket ID - #2000</span>
                    
                    <span class="text-xs border border-black text-black p-1">open</span>
                    </div>
                    <span class="text-sm bg-yellow-400 text-white px-2 py-1 rounded">Ticket ID - #{{$nw->title1}}</span>
                    <h3 class="font-semibold text-md mt-2">{{$nw->title2}}</h3>
                    <p class="text-xs text-gray-500">{{$nw->created_at}}</p>
                    {{-- <div class="flex items-center mt-2">
                        <img src="https://via.placeholder.com/24" alt="User" class="w-6 h-6 rounded-full">
                    </div> --}}
                    <button wire:click="$emit('openModal', 'tickets.more-details', {{ json_encode(['ticket' => $nw->id]) }})">
                        Open Modal
                    </button>
                {{-- </a> --}}
                </div>

                <div class="border-2 border-green-500 bg-yellow-100 rounded-md p-4">
                    <div class="flex justify-between">
                        <h3 class="font-bold">Ticket# 201254</h3>
                        <span class="text-xs bg-green-200 text-green-600 font-semibold px-2 py-1 rounded">Open</span>
                    </div>
                    <p class="text-gray-500">{{$nw->title1}}</p>
                    <div class="text-sm text-gray-400 flex justify-between">
                        <p><i class="fa fa-map-marker"></i> Rajagiriya</p>
                        <p><i class="fa fa-phone"></i> 768209644</p>
                    </div>
                    <p class="text-gray-600 font-semibold mt-2">{{$nw->title2}}</p>
                    <span class="bg-yellow-400 text-white font-semibold px-2 py-1 rounded">Customer Care</span>
                    <div class="flex justify-between items-center mt-4 text-sm">
                        <button class="flex items-center" wire:click="$emit('openModal', 'tickets.more-details', {{ json_encode(['ticket' => $nw->id]) }})"><i class="fa fa-folder-open"></i> Open</button>
                        <button class="flex items-center"><i class="fa fa-user-plus"></i> Assign</button>
                        <button class="flex items-center"><i class="fa fa-times"></i> Close</button>
                    </div>
                </div>
            
                @endforeach                
                
                <!-- Add another card -->
                <button class="text-blue-500 mt-4">+ Add another card</button>
            </div>
        </div>

        <!-- Column 2: In Progress -->
        <div class="w-1/4 bg-white shadow-md rounded-lg p-4">

            {{-- <livewire:tickets.count-percentage :progress="$openPrcntg" /> --}}
            <livewire:tickets.count-percentage-charts.open-ticket />

            <p class="font-semibold bg-orange-100 px-2 py-1 rounded text-lg mb-4">Count : {{$openCount}}</p>

            <h2 class="font-bold text-lg mb-4">Open</h2>
            <div class="space-y-4">

                @foreach ($open as $nw)
               
                <div class="bg-orange-100 p-4 rounded-md">
                    <a href="">
                    <span class="text-sm bg-orange-400 text-white px-2 py-1 rounded">{{$nw->title1}}</span>
                    <h3 class="font-semibold text-md mt-2">{{$nw->title2}}</h3>
                    <p class="text-xs text-gray-500">{{$nw->created_at}}</p>
                    </a>
                </div>

                @endforeach
                
                <!-- Add another card -->
                <button class="text-blue-500 mt-4">+ Add another card</button>
            </div>
        </div>

        <!-- Column 3: Done -->
        <div class="w-1/4 bg-white shadow-md rounded-lg p-4">

            {{-- <livewire:tickets.count-percentage :progress="$overDuePrcntg" /> --}}
            <livewire:tickets.count-percentage-charts.overdue-ticket />

            <p class="font-semibold bg-red-100 px-2 py-1 rounded text-lg mb-4">Count : {{$overDueCount}}</p>

            <h2 class="font-bold text-lg mb-4">Overdue</h2>
            <div class="space-y-4">
                
                @foreach ($overDue as $nw)

                <div class="bg-red-100 p-4 rounded-md">
                    <a href="">
                    <span class="text-sm bg-red-300 text-white px-2 py-1 rounded">{{$nw->title1}}</span>
                    <h3 class="font-semibold text-md mt-2">{{$nw->title2}}</h3>
                    <p class="text-xs text-gray-500">{{$nw->created_at}}</p>
                    </a>
                </div>
                @endforeach

                <!-- Add another card -->
                <button class="text-blue-500 mt-4">+ Add another card</button>
            </div>
        </div>
        <!-- Column 4: Done -->
        <div class="w-1/4 bg-white shadow-md rounded-lg p-4">

            {{-- <livewire:tickets.count-percentage :progress="$closedPrcntg" /> --}}
            <livewire:tickets.count-percentage-charts.closed-ticket />

            <p class="font-semibold bg-green-100 px-2 py-1 rounded text-lg mb-4">Count : {{$closedCount}}</p>

            <h2 class="font-bold text-lg mb-4">Closed</h2>
            <div class="space-y-4">
                
                @foreach ($closed as $nw)
                
                <div class="bg-green-100 p-4 rounded-md">
                    <a href="">
                    <span class="text-sm bg-green-400 text-white px-2 py-1 rounded">{{$nw->title1}}</span>
                    <h3 class="font-semibold text-md mt-2">{{$nw->title2}}</h3>
                    <p class="text-xs text-gray-500">{{$nw->created_at}}</p>
                    </a>
                </div>
                @endforeach
                <!-- Add another card -->
                <button class="text-blue-500 mt-4">+ Add another card</button>
            </div>
        </div>
    </div>
</div>