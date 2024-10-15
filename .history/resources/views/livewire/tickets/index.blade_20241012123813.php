<div wire:poll="refreshComponent" class="flex justify-center p-8">
    <!-- Kanban Board -->

    <div class="flex space-x-6 w-full max-w-7xl">
        <!-- Column 1: To Do -->    

        <div class="w-1/4 bg-white shadow-md rounded-lg p-4">

            <div class="bg-white shadow-lg rounded-lg p-4 text-center">
                <h3 class="text-gray-700 font-bold mb-2">Service Level % in 20s</h3>
                <div class="relative">
                  <svg class="w-full h-32" viewBox="0 0 100 50">
                    <!-- Background gray arc -->
                    <path d="M 10,40 A 35,35 0 0,1 90,40" fill="none" stroke="#e5e7eb" stroke-width="10" />
                    <!-- Red progress arc -->
                    <path d="M 10,40 A 35,35 0 0,1 60,15" fill="none" stroke="#ef4444" stroke-width="10" />
                    <!-- Indicator line -->
                    <line x1="50" y1="40" x2="60" y2="15" stroke="#ef4444" stroke-width="2" />
                  </svg>
                  <div class="absolute inset-0 flex items-center justify-center">
                    <span class="text-3xl font-bold text-gray-900">46%</span>
                  </div>
                </div>
                <p class="text-sm text-gray-500 mt-2">60.00% target</p>
              </div>

            <h2 class="font-bold text-lg mb-4">New</h2>
            <div class="space-y-4">

                @foreach ($new as $nw)
                
                <div class="bg-yellow-100 p-4 rounded-md">
                    {{-- <a href=""> --}}
                    <span class="text-sm bg-yellow-400 text-white px-2 py-1 rounded">{{$nw->title1}}</span>
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
            
                @endforeach                
                
                <!-- Add another card -->
                <button class="text-blue-500 mt-4">+ Add another card</button>
            </div>
        </div>

        <!-- Column 2: In Progress -->
        <div class="w-1/4 bg-white shadow-md rounded-lg p-4">
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