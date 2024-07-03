<div class="max-w-4xl mx-auto py-8">
    @if (session()->has('success'))
        <div
            class="bg-green-100 border-l-4 border-green-500 text-green-900 p-4 mb-4 shadow-md mx-auto max-w-lg rounded-md relative">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <div class="text-lg font-semibold mr-3">
                        Success
                    </div>
                    <div class="text-sm">
                        {{ session('success') }}
                    </div>
                </div>
                <button class="text-gray-500 hover:text-gray-700" onclick="this.parentElement.parentElement.remove()">
                    <svg class="h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 8.586l4.293-4.293a1 1 0 011.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 111.414-1.414L10 8.586z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        </div>
    @endif


    @if (session()->has('error'))
        <div
            class="bg-red-100 border-l-4 border-red-500 text-red-900 p-4 mb-4 shadow-md mx-auto max-w-sm rounded-md relative">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <div class="text-lg font-semibold mr-3">
                        Error
                    </div>
                    <div class="text-sm">
                        {{ session('error') }}
                    </div>
                </div>
                <button class="text-gray-500 hover:text-gray-700" onclick="this.parentElement.parentElement.remove()">
                    <svg class="h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 8.586l4.293-4.293a1 1 0 011.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 111.414-1.414L10 8.586z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        </div>
    @endif


    <div class="bg-white p-6 rounded-lg shadow-md">
        @if ($step === 1)
            <div>
                <h2 class="text-2xl font-bold mb-4">Step 1: Personal Information</h2>


                <!-- Personal Information Fields -->

                <!-- Title Field -->
                <div class="mb-4">
                    <label for="title" class="block mb-2">Title</label>
                    <select wire:model="title" id="title"
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-green-700">
                        <option value="">Select Title</option>
                        <option value="Mr">Mr</option>
                        <option value="Mrs">Mrs</option>
                        <option value="Miss">Miss</option>
                    </select>
                    @error('title')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="firstName" class="block mb-2">First Name</label>
                    <input wire:model="firstName" type="text" id="firstName"
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-green-700">
                    @error('firstName')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>


                <div class="mb-4">
                    <label for="lastName" class="block mb-2">Last Name</label>
                    <input wire:model="lastName" type="text" id="lastName"
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-green-700">
                    @error('lastName')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>


                <div class="mb-4">
                    <label for="otherName" class="block mb-2">Other Name</label>
                    <input wire:model="otherName" type="text" id="otherName"
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-green-700">
                    @error('otherName')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>


                <div class="mb-4">
                    <label for="physicalAddress" class="block mb-2">Physical Address</label>
                    <input wire:model="physicalAddress" type="text" id="physicalAddress"
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-green-700">
                    @error('physicalAddress')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>


                <div class="mb-4">
                    <label for="gender" class="block mb-2">Gender</label>
                    <select wire:model="gender" id="gender"
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-green-700">
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    @error('gender')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>


                <div class="mb-4">
                    <label for="mobileNumber" class="block mb-2">Mobile Number</label>
                    <input wire:model="mobileNumber" type="text" id="mobileNumber"
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-green-700">
                    @error('mobileNumber')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>


                <div class="mb-4">
                    <label for="otherMobileNumber" class="block mb-2">Other Mobile Number</label>
                    <input wire:model="otherMobileNumber" type="text" id="otherMobileNumber"
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-green-700">
                    @error('otherMobileNumber')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>


                <div class="mb-4">
                    <label for="dateOfBirth" class="block mb-2">Date of Birth</label>
                    <input wire:model="dateOfBirth" type="date" id="dateOfBirth"
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-green-700">
                    @error('dateOfBirth')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>


                <div class="mb-4">
                    <label for="placeOfWork" class="block mb-2">Place of Work</label>
                    <input wire:model="placeOfWork" type="text" id="placeOfWork"
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-green-700">
                    @error('placeOfWork')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>


                <div class="mb-4">
                    <label for="email" class="block mb-2">Email Address</label>
                    <input wire:model="email" type="email" id="email"
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-green-700">
                    @error('email')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>


                <div class="mb-4">
                    <label for="occupation" class="block mb-2">Occupation</label>
                    <input wire:model="occupation" type="text" id="occupation"
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-green-700">
                    @error('occupation')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>


                <div class="flex justify-between">
                    <div></div>
                    <button type="button" wire:click="nextStep"
                        class="bg-green-700 text-white py-2 px-4 rounded-lg hover:bg-green-800 transition duration-300">Next</button>
                </div>
            </div>
        @endif


        @if ($step === 2)
            <div>
                <h2 class="text-2xl font-bold mb-4">Step 2: Account Details</h2>


                <!-- Account Details Fields -->
                <div class="mb-4">
                    <label for="accountType" class="block text-green-800 mb-2">Account Type</label>
                    <select wire:model="accountType" id="accountType"
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-green-700">
                        <option value="">Select Account Type</option>
                        <option value="Current Savings Account">Current Savings Account</option>
                        <option value="Fixed Account">Fixed Account</option>
                        <option value="Toto Account">Toto Account</option>
                        <option value="Joint Account">Joint Account</option>
                        <option value="Group Account">Group Account</option>
                        <!-- Add more options as needed -->
                    </select>
                    @error('accountType')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>


                <div class="mb-4">
                    <label for="identificationType" class="block text-green-800 mb-2">Identification Type</label>
                    <select wire:model="identificationType" id="identificationType"
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-green-700">
                        <option value="">Select Identification Type</option>
                        <option value="NID">National ID (NID)</option>
                        <option value="Passport">Passport</option>
                        <option value="Driving Permit">Driving Permit</option>
                        <!-- Add more options as needed -->
                    </select>
                    @error('identificationType')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>


                <div class="mb-4">
                    <label for="identificationNumber" class="block text-green-800 mb-2">Identification
                        Number</label>
                    <input type="text" wire:model="identificationNumber" id="identificationNumber"
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-green-700">
                    @error('identificationNumber')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>


                <div class="mb-4">
                    <label for="occupation" class="block text-green-800 mb-2">Occupation</label>
                    <input type="text" wire:model="occupation" id="occupation"
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-green-700">
                    @error('occupation')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>


                <div class="mb-4">
                    <label for="placeOfWork" class="block text-green-800 mb-2">Place of Work</label>
                    <input type="text" wire:model="placeOfWork" id="placeOfWork"
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-green-700">
                    @error('placeOfWork')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>


                <!-- Add more fields as needed -->


                <div class="flex justify-between">
                    <button type="button" wire:click="previousStep"
                        class="bg-gray-500 text-white py-2 px-4 rounded-lg hover:bg-gray-600 transition duration-300">Previous</button>
                    <button type="button" wire:click="submit"
                        class="bg-green-700 text-white py-2 px-4 rounded-lg hover:bg-green-800 transition duration-300">Submit</button>
                </div>
            </div>
        @endif
    </div>
</div>
