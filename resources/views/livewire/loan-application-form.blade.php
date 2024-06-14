<div class=" bg-gray-100 shadow-xl p-8 rounded-lg" >
    <div class="flex flex-col md:flex-row items-center justify-center">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 bg-white">
            <!-- Column 1 -->
            <div class="text-center p-4">
                <!-- Vector Image for Loan Application -->
                <img src="https://img.freepik.com/free-vector/fill-out-concept-illustration_114360-5550.jpg?t=st=1717933215~exp=1717936815~hmac=331365bd275a76a06db3f0d935e0f519a6812df8eb9d9089f66d062477552aab&w=1060" alt="Loan Application" class=" w-64 md:w-1/2 max-w-xs md:max-w-none">
            </div>


            <!-- Column 2 -->
            <div class="p-4">
                <!-- Loan Application Form -->

                <div class="bg-white rounded-lg shadow-lg p-8 max-w-md md:ml-8">
                    <h2 class="text-1xl font-bold py-4">Application Form</h2>
                    <div class="mb-6">
                        <!-- Loan Amount -->
                        <label for="loan-amount" class="block text-green-800 mb-2">Loan Amount</label>
                        <input wire:model="loanAmount" type="number" id="loan-amount" name="loan-amount" placeholder="Enter Loan Amount" class="w-full px-4 py-2 border bg-green-800 rounded-md focus:outline-none focus:border-green-700">
                    </div>
                    <!-- Personal Information -->
                    <div class="mb-6">
                        <label for="name" class="block text-green-800 mb-2">Full Name</label>
                        <input wire:model="name" type="text" id="name" name="name" placeholder="Enter Your Full Name" class="w-full px-4 py-2 border bg-green-800 rounded-md focus:outline-none focus:border-green-700">
                    </div>
                    <div class="mb-6">
                        <label for="email" class="block text-green-800 mb-2">Email Address</label>
                        <input wire:model="email" type="email" id="email" name="email" placeholder="Enter Your Email Address" class="w-full px-4 py-2 border bg-green-800 rounded-md focus:outline-none focus:border-green-700">
                    </div>
                    <div class="mb-6">
                        <label for="phone" class="block text-green-800 mb-2">Phone Number</label>
                        <input wire:model="phone" type="text" id="phone" name="phone" placeholder="Enter Your Phone Number" class="w-full px-4 py-2 border bg-green-800 rounded-md focus:outline-none focus:border-green-700">
                    </div>
                    <!-- Submit Button -->
                    <div >
                        <button wire:click="submit" class="bg-green-700 text-white py-2 px-6  w-80 rounded-lg hover:bg-green-700 transition duration-300">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
