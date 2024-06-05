<div class=" bg-lime-950 shadow-xl p-8 rounded-lg" style="background-color: rgb(243, 249, 243)">
    <div class="flex flex-col md:flex-row items-center justify-center">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Column 1 -->
            <div class="bg-gray-200 p-4">
                <!-- Vector Image for Loan Application -->
                <img src="https://img.freepik.com/free-vector/bank-loan-concept-illustration_114360-17863.jpg?t=st=1717595415~exp=1717599015~hmac=3dc14218d45477dcf2d9ed0ef5eca474b3681e36d3dd7ea0812ddd8c07b1bb2b&w=1380" alt="Loan Application" class="w-48 md:w-1/2 max-w-xs md:max-w-none">
            </div>

            <!-- Column 2 -->
            <div class="bg-gray-200 p-4">
                <!-- Loan Application Form -->
                <div class="bg-white rounded-lg shadow-lg p-8 max-w-md md:ml-8">
                    <div class="mb-6">
                        <!-- Loan Amount -->
                        <label for="loan-amount" class="block text-green-800 mb-2">Loan Amount</label>
                        <input wire:model="loanAmount" type="number" id="loan-amount" name="loan-amount" placeholder="Enter Loan Amount" class="w-full px-4 py-2 border border-green-400 rounded-md focus:outline-none focus:border-green-600">
                    </div>
                    <!-- Personal Information -->
                    <div class="mb-6">
                        <label for="name" class="block text-green-800 mb-2">Full Name</label>
                        <input wire:model="name" type="text" id="name" name="name" placeholder="Enter Your Full Name" class="w-full px-4 py-2 border border-green-400 rounded-md focus:outline-none focus:border-green-600">
                    </div>
                    <div class="mb-6">
                        <label for="email" class="block text-green-800 mb-2">Email Address</label>
                        <input wire:model="email" type="email" id="email" name="email" placeholder="Enter Your Email Address" class="w-full px-4 py-2 border border-green-400 rounded-md focus:outline-none focus:border-green-600">
                    </div>
                    <div class="mb-6">
                        <label for="phone" class="block text-green-800 mb-2">Phone Number</label>
                        <input wire:model="phone" type="text" id="phone" name="phone" placeholder="Enter Your Phone Number" class="w-full px-4 py-2 border border-green-400 rounded-md focus:outline-none focus:border-green-600">
                    </div>
                    <!-- Submit Button -->
                    <div class="text-center">
                        <button wire:click="submit" class="bg-green-600 text-white py-2 px-6 rounded-full hover:bg-green-700 transition duration-300">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
