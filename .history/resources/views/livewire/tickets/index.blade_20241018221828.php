<div class="h-screen">
    <form class="flex items-center max-w-sm mx-auto pt-4">   
        <label for="simple-search" class="sr-only">Search</label>
        <div class="relative w-full">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5v10M3 5a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 10a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm12 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0V6a3 3 0 0 0-3-3H9m1.5-2-2 2 2 2"/>
                </svg>
            </div>
            <input type="text" wire:model="searchItem" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search here..." required />
        </div>
        <button type="submit" class="p-2.5 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
            </svg>
            <span class="sr-only">Search</span>
        </button>
    </form>


<div wire:poll="refreshComponent" class="flex justify-center p-8 h-5/6">

    <div class="flex space-x-6 w-full max-w-7xl h-full">

        <div class="w-1/4 bg-white shadow-md rounded-lg p-4 h-full">





            <livewire:tickets.count-percentage-charts.new-ticket />


            <p class="font-semibold bg-yellow-100 px-2 py-1 rounded text-lg mb-4">Count : {{ $newCount }}</p>


            <h2 class="font-bold text-lg mb-4">New</h2>
            <div class="space-y-4 h-2/3  overflow-y-auto ">

                @foreach ($new as $nw)
                    <div class="p-0.5  pt-1 bg-green-300 rounded hover:bg-green-500">
                        <div class=" bg-yellow-100 rounded-md p-4">
                            <div class="flex justify-between">
                                <h3 class="font-semibold">Ticket# 201254</h3>
                                <span
                                    class="text-xs bg-green-200 text-green-600 font-semibold px-2 py-1 rounded">Open</span>
                            </div>
                            <p class="text-gray-500 font-bold">{{ $nw->title1 }}</p>
                            <div wire:click="$emit('openModal', 'tickets.more-details', {{ json_encode(['ticket' => $nw->id]) }})"
                                class="text-sm text-gray-400 flex justify-between">
                                <div class="flex">
                                    <svg class="w-4 h-4 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                        data-slot="icon">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0 0 12 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75Z">
                                        </path>
                                    </svg>
                                    <p><i class="fa fa-map-marker"></i> Rajagiriya</p>
                                </div>

                                <div class="flex">
                                    <svg class="w-4 h-4 text-gray-600" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon">
                                        <path fill-rule="evenodd"
                                            d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <p class="pl-1"> 768209644</p>
                                </div>
                            </div>
                            <div
                                wire:click="$emit('openModal', 'tickets.more-details', {{ json_encode(['ticket' => $nw->id]) }})">
                                <p class="text-black text-sm mt-2 pb-1">Description</p>
                                <span
                                    class="bg-yellow-400 text-white font-semibold px-2 py-1 rounded">{{ $nw->title2 }}</span>
                            </div>
                            <div class="flex justify-between items-center mt-4 text-sm">
                                <button class="flex items-center"
                                    wire:click="$emit('openModal', 'tickets.more-details', {{ json_encode(['ticket' => $nw->id]) }})"><svg
                                        class="w-4 h-4 text-gray-600" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" stroke="none" viewBox="0 0 24 24">
                                        <path
                                            d="M5 5v14a1 1 0 0 0 1 1h3v-2H7V6h2V4H6a1 1 0 0 0-1 1zm14.242-.97-8-2A1 1 0 0 0 10 3v18a.998.998 0 0 0 1.242.97l8-2A1 1 0 0 0 20 19V5a1 1 0 0 0-.758-.97zM15 12.188a1.001 1.001 0 0 1-2 0v-.377a1 1 0 1 1 2 .001v.376z">
                                        </path>
                                    </svg> Open</button>
                                <button class="flex items-center"><svg class="w-4 h-4 text-gray-600"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="currentColor">
                                        <path
                                            d="M253.7,133.7l-24,24a8.2,8.2,0,0,1-11.4,0l-24-24a8.4,8.4,0,0,1-1.7-8.8A8,8,0,0,1,200,120h15.6A87.9,87.9,0,0,0,54.1,80.3,8,8,0,0,1,43,82.6a7.9,7.9,0,0,1-2.4-11A104,104,0,0,1,231.7,120H248a8,8,0,0,1,7.4,4.9A8.4,8.4,0,0,1,253.7,133.7ZM213,173.4a8,8,0,0,0-11.1,2.3,86.9,86.9,0,0,1-8.1,10.8h0a81.3,81.3,0,0,0-24.5-23,59.7,59.7,0,0,1-82.6,0,81.3,81.3,0,0,0-24.5,23h0A87.6,87.6,0,0,1,40.4,136H56a8,8,0,0,0,7.4-4.9,8.4,8.4,0,0,0-1.7-8.8l-24-24a8.1,8.1,0,0,0-11.4,0l-24,24a8.4,8.4,0,0,0-1.7,8.8A8,8,0,0,0,8,136H24.3a103.7,103.7,0,0,0,34.5,69.6h0l.4.3a103.9,103.9,0,0,0,156.2-21.5A7.9,7.9,0,0,0,213,173.4ZM128,164a44,44,0,1,0-44-44A44,44,0,0,0,128,164Z">
                                        </path>
                                    </svg> Assign</button>
                                <button class="flex items-center"><svg class="w-4 h-4 text-gray-600"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm1.41-1.41A8 8 0 1 0 15.66 4.34 8 8 0 0 0 4.34 15.66zm9.9-8.49L11.41 10l2.83 2.83-1.41 1.41L10 11.41l-2.83 2.83-1.41-1.41L8.59 10 5.76 7.17l1.41-1.41L10 8.59l2.83-2.83 1.41 1.41z">
                                        </path>
                                    </svg> Close</button>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <button class="text-blue-500 mt-2">+ Add another card</button>
        </div>

        <!-- Column 2: In Progress -->
        <div class="w-1/4 bg-white shadow-md rounded-lg p-4">

            {{-- <livewire:tickets.count-percentage :progress="$openPrcntg" /> --}}
            <livewire:tickets.count-percentage-charts.open-ticket />

            <p class="font-semibold bg-orange-100 px-2 py-1 rounded text-lg mb-4">Count : {{ $openCount }}</p>

            <h2 class="font-bold text-lg mb-4">Open</h2>
            <div class="space-y-4 h-2/3  overflow-y-auto ">

                @foreach ($open as $nw)
                    {{-- <div class="bg-orange-100 p-4 rounded-md">
                        <a href="">
                            <span class="text-sm bg-orange-400 text-white px-2 py-1 rounded">{{ $nw->title1 }}</span>
                            <h3 class="font-semibold text-md mt-2">{{ $nw->title2 }}</h3>
                            <p class="text-xs text-gray-500">{{ $nw->created_at }}</p>
                        </a>
                    </div> --}}

                    <div class="p-0.5  pt-1 bg-green-300 rounded hover:bg-green-500">
                        <div class=" bg-orange-100 rounded-md p-4">
                            <div class="flex justify-between">
                                <h3 class="font-semibold">Ticket# 201254</h3>
                                <span
                                    class="text-xs bg-green-200 text-green-600 font-semibold px-2 py-1 rounded">Open</span>
                            </div>
                            <p class="text-gray-500 font-bold">{{ $nw->title1 }}</p>
                            <div wire:click="$emit('openModal', 'tickets.more-details', {{ json_encode(['ticket' => $nw->id]) }})"
                                class="text-sm text-gray-400 flex justify-between">
                                <div class="flex">
                                    <svg class="w-4 h-4 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                        data-slot="icon">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0 0 12 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75Z">
                                        </path>
                                    </svg>
                                    <p><i class="fa fa-map-marker"></i> Rajagiriya</p>
                                </div>

                                <div class="flex">
                                    <svg class="w-4 h-4 text-gray-600" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon">
                                        <path fill-rule="evenodd"
                                            d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <p class="pl-1"> 768209644</p>
                                </div>
                            </div>
                            <div
                                wire:click="$emit('openModal', 'tickets.more-details', {{ json_encode(['ticket' => $nw->id]) }})">
                                <p class="text-black text-sm mt-2 pb-1">Description</p>
                                <span
                                    class="bg-orange-400 text-white font-semibold px-2 py-1 rounded">{{ $nw->title2 }}</span>
                            </div>
                            <div class="flex justify-between items-center mt-4 text-sm">
                                <button class="flex items-center"
                                    wire:click="$emit('openModal', 'tickets.more-details', {{ json_encode(['ticket' => $nw->id]) }})"><svg
                                        class="w-4 h-4 text-gray-600" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" stroke="none" viewBox="0 0 24 24">
                                        <path
                                            d="M5 5v14a1 1 0 0 0 1 1h3v-2H7V6h2V4H6a1 1 0 0 0-1 1zm14.242-.97-8-2A1 1 0 0 0 10 3v18a.998.998 0 0 0 1.242.97l8-2A1 1 0 0 0 20 19V5a1 1 0 0 0-.758-.97zM15 12.188a1.001 1.001 0 0 1-2 0v-.377a1 1 0 1 1 2 .001v.376z">
                                        </path>
                                    </svg> Open</button>
                                <button class="flex items-center"><svg class="w-4 h-4 text-gray-600"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="currentColor">
                                        <path
                                            d="M253.7,133.7l-24,24a8.2,8.2,0,0,1-11.4,0l-24-24a8.4,8.4,0,0,1-1.7-8.8A8,8,0,0,1,200,120h15.6A87.9,87.9,0,0,0,54.1,80.3,8,8,0,0,1,43,82.6a7.9,7.9,0,0,1-2.4-11A104,104,0,0,1,231.7,120H248a8,8,0,0,1,7.4,4.9A8.4,8.4,0,0,1,253.7,133.7ZM213,173.4a8,8,0,0,0-11.1,2.3,86.9,86.9,0,0,1-8.1,10.8h0a81.3,81.3,0,0,0-24.5-23,59.7,59.7,0,0,1-82.6,0,81.3,81.3,0,0,0-24.5,23h0A87.6,87.6,0,0,1,40.4,136H56a8,8,0,0,0,7.4-4.9,8.4,8.4,0,0,0-1.7-8.8l-24-24a8.1,8.1,0,0,0-11.4,0l-24,24a8.4,8.4,0,0,0-1.7,8.8A8,8,0,0,0,8,136H24.3a103.7,103.7,0,0,0,34.5,69.6h0l.4.3a103.9,103.9,0,0,0,156.2-21.5A7.9,7.9,0,0,0,213,173.4ZM128,164a44,44,0,1,0-44-44A44,44,0,0,0,128,164Z">
                                        </path>
                                    </svg> Assign</button>
                                <button class="flex items-center"><svg class="w-4 h-4 text-gray-600"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm1.41-1.41A8 8 0 1 0 15.66 4.34 8 8 0 0 0 4.34 15.66zm9.9-8.49L11.41 10l2.83 2.83-1.41 1.41L10 11.41l-2.83 2.83-1.41-1.41L8.59 10 5.76 7.17l1.41-1.41L10 8.59l2.83-2.83 1.41 1.41z">
                                        </path>
                                    </svg> Close</button>
                            </div>
                        </div>
                    </div>

                @endforeach

                <!-- Add another card -->
                
            </div>
            <button class=" text-blue-500 mt-2">+ Add another card</button>
        </div>

        <!-- Column 3: Done -->
        <div class="w-1/4 bg-white shadow-md rounded-lg p-4">

            {{-- <livewire:tickets.count-percentage :progress="$overDuePrcntg" /> --}}
            <livewire:tickets.count-percentage-charts.overdue-ticket />

            <p class="font-semibold bg-red-100 px-2 py-1 rounded text-lg mb-4">Count : {{ $overDueCount }}</p>

            <h2 class="font-bold text-lg mb-4">Overdue</h2>
            <div class="space-y-4 h-2/3  overflow-y-auto ">

                @foreach ($overDue as $nw)
                    {{-- <div class="bg-red-100 p-4 rounded-md">
                        <a href="">
                            <span class="text-sm bg-red-300 text-white px-2 py-1 rounded">{{ $nw->title1 }}</span>
                            <h3 class="font-semibold text-md mt-2">{{ $nw->title2 }}</h3>
                            <p class="text-xs text-gray-500">{{ $nw->created_at }}</p>
                        </a>
                    </div> --}}

                    <div class="p-0.5  pt-1 bg-green-300 rounded hover:bg-green-500">
                        <div class=" bg-red-100 rounded-md p-4">
                            <div class="flex justify-between">
                                <h3 class="font-semibold">Ticket# 201254</h3>
                                <span
                                    class="text-xs bg-green-200 text-green-600 font-semibold px-2 py-1 rounded">Open</span>
                            </div>
                            <p class="text-gray-500 font-bold">{{ $nw->title1 }}</p>
                            <div wire:click="$emit('openModal', 'tickets.more-details', {{ json_encode(['ticket' => $nw->id]) }})"
                                class="text-sm text-gray-400 flex justify-between">
                                <div class="flex">
                                    <svg class="w-4 h-4 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                        data-slot="icon">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0 0 12 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75Z">
                                        </path>
                                    </svg>
                                    <p><i class="fa fa-map-marker"></i> Rajagiriya</p>
                                </div>

                                <div class="flex">
                                    <svg class="w-4 h-4 text-gray-600" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon">
                                        <path fill-rule="evenodd"
                                            d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <p class="pl-1"> 768209644</p>
                                </div>
                            </div>
                            <div
                                wire:click="$emit('openModal', 'tickets.more-details', {{ json_encode(['ticket' => $nw->id]) }})">
                                <p class="text-black text-sm mt-2 pb-1">Description</p>
                                <span
                                    class="bg-red-400 text-white font-semibold px-2 py-1 rounded">{{ $nw->title2 }}</span>
                            </div>
                            <div class="flex justify-between items-center mt-4 text-sm">
                                <button class="flex items-center"
                                    wire:click="$emit('openModal', 'tickets.more-details', {{ json_encode(['ticket' => $nw->id]) }})"><svg
                                        class="w-4 h-4 text-gray-600" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" stroke="none" viewBox="0 0 24 24">
                                        <path
                                            d="M5 5v14a1 1 0 0 0 1 1h3v-2H7V6h2V4H6a1 1 0 0 0-1 1zm14.242-.97-8-2A1 1 0 0 0 10 3v18a.998.998 0 0 0 1.242.97l8-2A1 1 0 0 0 20 19V5a1 1 0 0 0-.758-.97zM15 12.188a1.001 1.001 0 0 1-2 0v-.377a1 1 0 1 1 2 .001v.376z">
                                        </path>
                                    </svg> Open</button>
                                <button class="flex items-center"><svg class="w-4 h-4 text-gray-600"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="currentColor">
                                        <path
                                            d="M253.7,133.7l-24,24a8.2,8.2,0,0,1-11.4,0l-24-24a8.4,8.4,0,0,1-1.7-8.8A8,8,0,0,1,200,120h15.6A87.9,87.9,0,0,0,54.1,80.3,8,8,0,0,1,43,82.6a7.9,7.9,0,0,1-2.4-11A104,104,0,0,1,231.7,120H248a8,8,0,0,1,7.4,4.9A8.4,8.4,0,0,1,253.7,133.7ZM213,173.4a8,8,0,0,0-11.1,2.3,86.9,86.9,0,0,1-8.1,10.8h0a81.3,81.3,0,0,0-24.5-23,59.7,59.7,0,0,1-82.6,0,81.3,81.3,0,0,0-24.5,23h0A87.6,87.6,0,0,1,40.4,136H56a8,8,0,0,0,7.4-4.9,8.4,8.4,0,0,0-1.7-8.8l-24-24a8.1,8.1,0,0,0-11.4,0l-24,24a8.4,8.4,0,0,0-1.7,8.8A8,8,0,0,0,8,136H24.3a103.7,103.7,0,0,0,34.5,69.6h0l.4.3a103.9,103.9,0,0,0,156.2-21.5A7.9,7.9,0,0,0,213,173.4ZM128,164a44,44,0,1,0-44-44A44,44,0,0,0,128,164Z">
                                        </path>
                                    </svg> Assign</button>
                                <button class="flex items-center"><svg class="w-4 h-4 text-gray-600"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm1.41-1.41A8 8 0 1 0 15.66 4.34 8 8 0 0 0 4.34 15.66zm9.9-8.49L11.41 10l2.83 2.83-1.41 1.41L10 11.41l-2.83 2.83-1.41-1.41L8.59 10 5.76 7.17l1.41-1.41L10 8.59l2.83-2.83 1.41 1.41z">
                                        </path>
                                    </svg> Close</button>
                            </div>
                        </div>
                    </div>

                @endforeach

                <!-- Add another card -->
                
            </div>
            <button class="text-blue-500 mt-2">+ Add another card</button>
        </div>
        <!-- Column 4: Done -->
        <div class="w-1/4 bg-white shadow-md rounded-lg p-4">

            {{-- <livewire:tickets.count-percentage :progress="$closedPrcntg" /> --}}
            <livewire:tickets.count-percentage-charts.closed-ticket />

            <p class="font-semibold bg-green-100 px-2 py-1 rounded text-lg mb-4">Count : {{ $closedCount }}</p>

            <h2 class="font-bold text-lg mb-4">Closed</h2>
            <div class="space-y-4 h-2/3  overflow-y-auto ">

                @foreach ($closed as $nw)
                    {{-- <div class="bg-green-100 p-4 rounded-md">
                        <a href="">
                            <span class="text-sm bg-green-400 text-white px-2 py-1 rounded">{{ $nw->title1 }}</span>
                            <h3 class="font-semibold text-md mt-2">{{ $nw->title2 }}</h3>
                            <p class="text-xs text-gray-500">{{ $nw->created_at }}</p>
                        </a>
                    </div> --}}

                    <div class="p-0.5  pt-1 bg-green-300 rounded hover:bg-green-500">
                        <div class=" bg-green-100 rounded-md p-4">
                            <div class="flex justify-between">
                                <h3 class="font-semibold">Ticket# 201254</h3>
                                <span
                                    class="text-xs bg-green-200 text-green-600 font-semibold px-2 py-1 rounded">Open</span>
                            </div>
                            <p class="text-gray-500 font-bold">{{ $nw->title1 }}</p>
                            <div wire:click="$emit('openModal', 'tickets.more-details', {{ json_encode(['ticket' => $nw->id]) }})"
                                class="text-sm text-gray-400 flex justify-between">
                                <div class="flex">
                                    <svg class="w-4 h-4 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                        data-slot="icon">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0 0 12 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75Z">
                                        </path>
                                    </svg>
                                    <p><i class="fa fa-map-marker"></i> Rajagiriya</p>
                                </div>

                                <div class="flex">
                                    <svg class="w-4 h-4 text-gray-600" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon">
                                        <path fill-rule="evenodd"
                                            d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <p class="pl-1"> 768209644</p>
                                </div>
                            </div>
                            <div
                                wire:click="$emit('openModal', 'tickets.more-details', {{ json_encode(['ticket' => $nw->id]) }})">
                                <p class="text-black text-sm mt-2 pb-1">Description</p>
                                <span
                                    class="bg-green-400 text-white font-semibold px-2 py-1 rounded">{{ $nw->title2 }}</span>
                            </div>
                            <div class="flex justify-between items-center mt-4 text-sm">
                                <button class="flex items-center"
                                    wire:click="$emit('openModal', 'tickets.more-details', {{ json_encode(['ticket' => $nw->id]) }})"><svg
                                        class="w-4 h-4 text-gray-600" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" stroke="none" viewBox="0 0 24 24">
                                        <path
                                            d="M5 5v14a1 1 0 0 0 1 1h3v-2H7V6h2V4H6a1 1 0 0 0-1 1zm14.242-.97-8-2A1 1 0 0 0 10 3v18a.998.998 0 0 0 1.242.97l8-2A1 1 0 0 0 20 19V5a1 1 0 0 0-.758-.97zM15 12.188a1.001 1.001 0 0 1-2 0v-.377a1 1 0 1 1 2 .001v.376z">
                                        </path>
                                    </svg> Open</button>
                                <button class="flex items-center"><svg class="w-4 h-4 text-gray-600"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="currentColor">
                                        <path
                                            d="M253.7,133.7l-24,24a8.2,8.2,0,0,1-11.4,0l-24-24a8.4,8.4,0,0,1-1.7-8.8A8,8,0,0,1,200,120h15.6A87.9,87.9,0,0,0,54.1,80.3,8,8,0,0,1,43,82.6a7.9,7.9,0,0,1-2.4-11A104,104,0,0,1,231.7,120H248a8,8,0,0,1,7.4,4.9A8.4,8.4,0,0,1,253.7,133.7ZM213,173.4a8,8,0,0,0-11.1,2.3,86.9,86.9,0,0,1-8.1,10.8h0a81.3,81.3,0,0,0-24.5-23,59.7,59.7,0,0,1-82.6,0,81.3,81.3,0,0,0-24.5,23h0A87.6,87.6,0,0,1,40.4,136H56a8,8,0,0,0,7.4-4.9,8.4,8.4,0,0,0-1.7-8.8l-24-24a8.1,8.1,0,0,0-11.4,0l-24,24a8.4,8.4,0,0,0-1.7,8.8A8,8,0,0,0,8,136H24.3a103.7,103.7,0,0,0,34.5,69.6h0l.4.3a103.9,103.9,0,0,0,156.2-21.5A7.9,7.9,0,0,0,213,173.4ZM128,164a44,44,0,1,0-44-44A44,44,0,0,0,128,164Z">
                                        </path>
                                    </svg> Assign</button>
                                <button class="flex items-center"><svg class="w-4 h-4 text-gray-600"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm1.41-1.41A8 8 0 1 0 15.66 4.34 8 8 0 0 0 4.34 15.66zm9.9-8.49L11.41 10l2.83 2.83-1.41 1.41L10 11.41l-2.83 2.83-1.41-1.41L8.59 10 5.76 7.17l1.41-1.41L10 8.59l2.83-2.83 1.41 1.41z">
                                        </path>
                                    </svg> Close</button>
                            </div>
                        </div>
                    </div>

                @endforeach
                <!-- Add another card -->
                
            </div>
            <button class="text-blue-500 mt-2">+ Add another card</button>
        </div>
    </div>
</div>

</div>