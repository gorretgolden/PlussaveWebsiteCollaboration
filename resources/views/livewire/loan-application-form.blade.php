<!-- loan-application.blade.php -->

<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 max-w-6xl p-4">
        <!-- Form Column -->
        <div class="flex items-center justify-center">
            <div class="bg-white rounded-lg shadow-lg p-8 transform transition-all duration-500 hover:scale-105 w-full">
                <h2 class="text-2xl font-bold text-center mb-8">Loan Application Form</h2>

                @if (session()->has('message'))
                    <div class="mb-6 text-green-700 text-center font-bold">
                        {{ session('message') }}
                    </div>
                @endif

                <form wire:submit.prevent="submit">
                    <div class="mb-6">
                        <label for="loan-amount" class="block text-green-800 mb-2">Loan Amount</label>
                        <input wire:model="loanAmount" type="number" id="loan-amount" name="loan-amount" placeholder="Enter Loan Amount" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-green-700">
                        @error('loanAmount') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-6">
                        <label for="name" class="block text-green-800 mb-2">Full Name</label>
                        <input wire:model="name" type="text" id="name" name="name" placeholder="Enter Your Full Name" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-green-700">
                        @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-6">
                        <label for="email" class="block text-green-800 mb-2">Email Address</label>
                        <input wire:model="email" type="email" id="email" name="email" placeholder="Enter Your Email Address" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-green-700">
                        @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-6">
                        <label for="phone" class="block text-green-800 mb-2">Phone Number</label>
                        <input wire:model="phone" type="text" id="phone" name="phone" placeholder="Enter Your Phone Number" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-green-700">
                        @error('phone') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-6">
                        <label for="loan-type" class="block text-green-800 mb-2">Loan Type</label>
                        <select wire:model="loanType" id="loan-type" name="loan-type" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-green-700">
                            <option value="">Select Loan Type</option>
                            <option value="savings">Savings</option>
                            <option value="loans">Loans</option>
                            <option value="financial-advice">Financial Advice</option>
                            <option value="others">Others</option>
                        </select>
                        @error('loanType') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-6">
                        <label for="business-location" class="block text-green-800 mb-2">Business Location</label>
                        <input wire:model="businessLocation" type="text" id="business-location" name="business-location" placeholder="Enter Business Location" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-green-700">
                        @error('businessLocation') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-6">
                        <label for="loan-purpose" class="block text-green-800 mb-2">Loan Purpose</label>
                        <input wire:model="loanPurpose" type="text" id="loan-purpose" name="loan-purpose" placeholder="Enter Loan Purpose" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-green-700">
                        @error('loanPurpose') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-6">
                        <label for="business-nature" class="block text-green-800 mb-2">Business Nature</label>
                        <select wire:model="businessNature" id="business-nature" name="business-nature" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-green-700">
                            <option value="">Select Business Nature</option>
                            <option value="agriculture">Agriculture</option>
                            <option value="education">Education</option>
                            <option value="commerce">Commerce</option>
                            <option value="manufacturing">Manufacturing</option>
                            <option value="services">Services</option>
                        </select>
                        @error('businessNature') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-6">
                        <label for="residence" class="block text-green-800 mb-2">Place of Residence</label>
                        <input wire:model="residence" type="text" id="residence" name="residence" placeholder="Enter Place of Residence" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-green-700">
                        @error('residence') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div class="flex justify-center">
                        <button type="submit" class="bg-green-700 text-white py-2 px-6 rounded-lg hover:bg-green-800 transition duration-300">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Image Column -->
        <div class="flex items-center justify-center">
            <img src="https://img.freepik.com/free-vector/bank-loan-concept-illustration_114360-17863.jpg?size=626&ext=jpg&ga=GA1.2.1085104606.1668665649&semt=ais" alt="Businesswoman" class="rounded-lg h-auto transform transition-all duration-500">
        </div>
    </div>
</div>
