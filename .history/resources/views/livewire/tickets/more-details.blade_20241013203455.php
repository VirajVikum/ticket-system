<div>
    <div class="p-6 bg-white rounded-lg shadow-md space-y-6">
        <h2 class="text-lg font-semibold">Ticket #201254</h2>
    
        <div class="grid grid-cols-2 gap-6">
            <div>
                <p><strong>Client Name :</strong> wajira pallawala</p>
                <p><strong>Category :</strong> Complaint</p>
                <p><strong>Report at :</strong> 7 minutes ago</p>
                <p><strong>Description :</strong> desc of ticket</p>
            </div>
            <div>
                <p><strong>Contact Number :</strong> 768209644</p>
                <p><strong>Sub Category :</strong> Service</p>
                <p><strong>Priority :</strong></p>
                <p><strong>Tags :</strong> Customer Care</p>
            </div>
        </div>
    
        <div class="mt-4">
            <textarea
                class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-400"
                rows="3" placeholder="Enter your comment here"></textarea>
            <button class="mt-2 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Comment</button>
        </div>
    
        <div class="space-y-4 mt-6">
            <div class="text-gray-500 text-sm">
                <span class="font-semibold">Commented on ticket by Achintha Udukumbura on 1 minute ago</span>
                <p class="ml-4">dddd</p>
            </div>
            <div class="text-gray-500 text-sm">
                <span class="font-semibold">Commented on ticket by Achintha Udukumbura on 4 minutes ago</span>
                <p class="ml-4">comment by achintha</p>
            </div>
            <div class="text-gray-500 text-sm">
                <span class="font-semibold">Ticket created by Achintha Udukumbura on 7 minutes ago</span>
            </div>
        </div>
    
        <div class="flex justify-between mt-8">
            <button class="text-red-500 font-semibold hover:text-red-600">Complete</button>
            <button class="text-gray-500 font-semibold hover:text-gray-600">Exit</button>
        </div>
    </div>
    
    <!-- Optional: Tailwind custom CSS for further tweaks -->
    <style>
        textarea::placeholder {
            color: #9CA3AF; /* Gray placeholder */
        }
    </style>
    


    
    <button type="button" wire:click="changeStatus" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit {{$ticketId}}</button>

  
</div>