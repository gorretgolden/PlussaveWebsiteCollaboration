<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 max-w-6xl p-4">
        <!-- Form Column -->
        <div class="flex items-center justify-center">
            <div class="bg-white rounded-lg shadow-lg p-8 transform transition-all duration-500 hover:scale-105 w-full">
                <h2 class="text-2xl font-bold text-center mb-8">Loan Application Form</h2>
                <div class="mb-6">
                    <!-- Loan Amount -->
                    <label for="loan-amount" class="block text-green-800 mb-2">Loan Amount</label>
                    <input wire:model="loanAmount" type="number" id="loan-amount" name="loan-amount" placeholder="Enter Loan Amount" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-green-700">
                </div>
                <!-- Personal Information -->
                <div class="mb-6">
                    <label for="name" class="block text-green-800 mb-2">Full Name</label>
                    <input wire:model="name" type="text" id="name" name="name" placeholder="Enter Your Full Name" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-green-700">
                </div>
                <div class="mb-6">
                    <label for="email" class="block text-green-800 mb-2">Email Address</label>
                    <input wire:model="email" type="email" id="email" name="email" placeholder="Enter Your Email Address" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-green-700">
                </div>
                <div class="mb-6">
                    <label for="phone" class="block text-green-800 mb-2">Phone Number</label>
                    <input wire:model="phone" type="text" id="phone" name="phone" placeholder="Enter Your Phone Number" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-green-700">
                </div>
                <!-- Submit Button -->
                <div class="flex justify-center">
                    <button wire:click="submit" class="bg-green-700 text-white py-2 px-6 rounded-lg hover:bg-green-800 transition duration-300">Submit</button>
                </div>
            </div>
        </div>
        <!-- Image Column -->
        <div class="flex items-center justify-center">
            <img src="https://img.freepik.com/free-vector/bank-loan-concept-illustration_114360-17863.jpg?size=626&ext=jpg&ga=GA1.2.1085104606.1668665649&semt=ais" alt="Businesswoman" class="rounded-lg shadow-lg h-auto transform transition-all duration-500 hover:scale-105">
        </div>
    </div>
</div>
