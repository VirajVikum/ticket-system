<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="./output.css" rel="stylesheet">
        <script src="https://cdn.tailwindcss.com"></script>

        <!-- Styles -->
        

       
    </head>
    <body class="bg-gray-100">

        <div class="flex justify-center p-8">
            <!-- Kanban Board -->
            <div class="flex space-x-6 w-full max-w-7xl">
                <!-- Column 1: To Do -->
                <div class="w-1/4 bg-white shadow-md rounded-lg p-4">
                    <h2 class="font-bold text-lg mb-4">To Do</h2>
                    <div class="space-y-4">
                        <!-- Card 1 -->
                        <div class="bg-yellow-100 p-4 rounded-md">
                            <span class="text-sm bg-yellow-400 text-white px-2 py-1 rounded">Phase 2</span>
                            <h3 class="font-semibold text-md mt-2">Design & Order Swag</h3>
                            <p class="text-xs text-gray-500">Due: Jun 8 - Jun 24</p>
                            <div class="flex items-center mt-2">
                                <img src="https://via.placeholder.com/24" alt="User" class="w-6 h-6 rounded-full">
                            </div>
                        </div>
                        <!-- Card 2 -->
                        <div class="bg-yellow-100 p-4 rounded-md">
                            <span class="text-sm bg-yellow-400 text-white px-2 py-1 rounded">Phase 2</span>
                            <h3 class="font-semibold text-md mt-2">Social Media Content</h3>
                            <p class="text-xs text-gray-500">Due: Jun 15</p>
                            <div class="flex items-center mt-2">
                                <img src="https://via.placeholder.com/24" alt="User" class="w-6 h-6 rounded-full">
                            </div>
                        </div>
                        <!-- Card 3 -->
                        <div class="bg-yellow-100 p-4 rounded-md">
                            <span class="text-sm bg-yellow-400 text-white px-2 py-1 rounded">Phase 3</span>
                            <h3 class="font-semibold text-md mt-2">Promo Video</h3>
                            <p class="text-xs text-gray-500">Due: Jul 6</p>
                            <div class="flex items-center mt-2">
                                <img src="https://via.placeholder.com/24" alt="User" class="w-6 h-6 rounded-full">
                            </div>
                        </div>
                        <!-- Add another card -->
                        <button class="text-blue-500 mt-4">+ Add another card</button>
                    </div>
                </div>
    
                <!-- Column 2: In Progress -->
                <div class="w-1/4 bg-white shadow-md rounded-lg p-4">
                    <h2 class="font-bold text-lg mb-4">In Progress</h2>
                    <div class="space-y-4">
                        <!-- Card 1 -->
                        <div class="bg-orange-100 p-4 rounded-md">
                            <span class="text-sm bg-orange-400 text-white px-2 py-1 rounded">Phase 3</span>
                            <h3 class="font-semibold text-md mt-2">Android Release Notes</h3>
                            <p class="text-xs text-gray-500">Due: Jun 10</p>
                            <div class="flex items-center mt-2">
                                <img src="https://via.placeholder.com/24" alt="User" class="w-6 h-6 rounded-full">
                            </div>
                        </div>
                        <!-- Card 2 -->
                        <div class="bg-orange-100 p-4 rounded-md">
                            <span class="text-sm bg-orange-400 text-white px-2 py-1 rounded">Phase 2</span>
                            <h3 class="font-semibold text-md mt-2">PR</h3>
                            <p class="text-xs text-gray-500">Due: Jun 14</p>
                        </div>
                        <!-- Add another card -->
                        <button class="text-blue-500 mt-4">+ Add another card</button>
                    </div>
                </div>
    
                <!-- Column 3: Done -->
                <div class="w-1/4 bg-white shadow-md rounded-lg p-4">
                    <h2 class="font-bold text-lg mb-4">Done</h2>
                    <div class="space-y-4">
                        <!-- Card 1 -->
                        <div class="bg-green-100 p-4 rounded-md">
                            <span class="text-sm bg-green-400 text-white px-2 py-1 rounded">Phase 1</span>
                            <h3 class="font-semibold text-md mt-2">GTM Plan and Messaging</h3>
                            <p class="text-xs text-gray-500">Completed: May 27</p>
                            <div class="flex items-center mt-2">
                                <img src="https://via.placeholder.com/24" alt="User" class="w-6 h-6 rounded-full">
                            </div>
                        </div>
                        <!-- Add another card -->
                        <button class="text-blue-500 mt-4">+ Add another card</button>
                    </div>
                </div>
                <!-- Column 4: Done -->
                <div class="w-1/4 bg-white shadow-md rounded-lg p-4">
                    <h2 class="font-bold text-lg mb-4">Done</h2>
                    <div class="space-y-4">
                        <!-- Card 1 -->
                        <div class="bg-green-100 p-4 rounded-md">
                            <span class="text-sm bg-green-400 text-white px-2 py-1 rounded">Phase 1</span>
                            <h3 class="font-semibold text-md mt-2">GTM Plan and Messaging</h3>
                            <p class="text-xs text-gray-500">Completed: May 27</p>
                            <div class="flex items-center mt-2">
                                <img src="https://via.placeholder.com/24" alt="User" class="w-6 h-6 rounded-full">
                            </div>
                        </div>
                        <!-- Add another card -->
                        <button class="text-blue-500 mt-4">+ Add another card</button>
                    </div>
                </div>
            </div>
        </div>
    
    </body>
</html>
