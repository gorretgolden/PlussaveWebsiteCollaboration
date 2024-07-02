<div>
    <!-- loan-application.blade.php -->
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="w-full lg:w-4/5 xl:w-2/3  p-4">
            <div class="bg-white rounded-lg shadow-lg p-8 transform transition-transform duration-500">
                <h2 class="text-2xl font-bold text-center mb-4">Loan Application Form</h2>

                @if (session()->has('message'))
                    <div class="mb-4 text-green-700 text-center font-bold">
                        {{ session('message') }}
                    </div>
                @endif
                <form wire:submit.prevent="submit" class="bg-white shadow-md rounded-lg p-6 mx-auto max-w-lg">

                    <div class="mb-4">
                        <label for="account_type" class="block text-green-800 mb-2">Account Type</label>
                        <select id="account_type" wire:model="account_type" class="form-select mt-1 block w-full px-4 py-2 border rounded-md focus:outline-none focus:border-green-700">
                            <option value="">Select Account Type</option>
                            <option value="Current Savings Account">Current Savings Account</option>
                            <option value="Fixed Account">Fixed Account</option>
                            <option value="Toto Account">Toto Account</option>
                            <option value="Joint Account">Joint Account</option>
                            <option value="Group Account">Group Account</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="title" class="block text-green-800 mb-2">Title</label>
                        <select id="title" wire:model="title" class="form-select mt-1 block w-full px-4 py-2 border rounded-md focus:outline-none focus:border-green-700">
                            <option value="Mr">Mr</option>
                            <option value="Mrs">Mrs</option>
                            <option value="Miss">Miss</option>
                            <!-- Add more options as needed -->
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="firstName" class="block text-green-800 mb-2">First Name</label>
                        <input id="firstName" type="text" wire:model="firstName" class="form-input mt-1 block w-full px-4 py-2 border rounded-md focus:outline-none focus:border-green-700">
                    </div>

                    <div class="mb-4">
                        <label for="lastName" class="block text-green-800 mb-2">Last Name</label>
                        <input id="lastName" type="text" wire:model="lastName" class="form-input mt-1 block w-full px-4 py-2 border rounded-md focus:outline-none focus:border-green-700">
                    </div>

                    <div class="mb-4">
                        <label for="otherName" class="block text-green-800 mb-2">Other Name</label>
                        <input id="otherName" type="text" wire:model="otherName" class="form-input mt-1 block w-full px-4 py-2 border rounded-md focus:outline-none focus:border-green-700">
                    </div>

                    <div class="mb-4">
                        <label for="physicalAddress" class="block text-green-800 mb-2">Physical Address</label>
                        <textarea id="physicalAddress" wire:model="physicalAddress" class="form-textarea mt-1 block w-full px-4 py-2 border rounded-md focus:outline-none focus:border-green-700"></textarea>
                    </div>

                    <div class="mb-4">
                        <label for="gender" class="block text-green-800 mb-2">Gender</label>
                        <select id="gender" wire:model="gender" class="form-select mt-1 block w-full px-4 py-2 border rounded-md focus:outline-none focus:border-green-700">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="mobileNumber" class="block text-green-800 mb-2">Mobile Number</label>
                        <input id="mobileNumber" type="text" wire:model="mobileNumber" class="form-input mt-1 block w-full px-4 py-2 border rounded-md focus:outline-none focus:border-green-700">
                    </div>

                    <div class="mb-4">
                        <label for="otherMobileNumber" class="block text-green-800 mb-2">Other Mobile Number</label>
                        <input id="otherMobileNumber" type="text" wire:model="otherMobileNumber" class="form-input mt-1 block w-full px-4 py-2 border rounded-md focus:outline-none focus:border-green-700">
                    </div>

                    <div class="mb-4">
                        <label for="dateOfBirth" class="block text-green-800 mb-2">Date of Birth</label>
                        <input id="dateOfBirth" type="date" wire:model="dateOfBirth" class="form-input mt-1 block w-full px-4 py-2 border rounded-md focus:outline-none focus:border-green-700">
                    </div>

                    <div class="mb-4">
                        <label for="placeOfBirth" class="block text-green-800 mb-2">Place of Birth</label>
                        <input id="placeOfBirth" type="text" wire:model="placeOfBirth" class="form-input mt-1 block w-full px-4 py-2 border rounded-md focus:outline-none focus:border-green-700">
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block text-green-800 mb-2">E-mail Address</label>
                        <input id="email" type="email" wire:model="email" class="form-input mt-1 block w-full px-4 py-2 border rounded-md focus:outline-none focus:border-green-700">
                    </div>

                    <div class="mb-4">
                        <label for="identificationType" class="block text-green-800 mb-2">Identification Type</label>
                        <select id="identificationType" wire:model="identificationType" class="form-select mt-1 block w-full px-4 py-2 border rounded-md focus:outline-none focus:border-green-700">
                            <option value="">Select Identification Type</option>
                            <option value="NID">National ID (NID)</option>
                            <option value="Passport">Passport</option>
                            <option value="DrivingPermit">Driving Permit</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="identificationNumber" class="block text-green-800 mb-2">Identification Number</label>
                        <input id="identificationNumber" type="text" wire:model="identificationNumber" class="form-input mt-1 block w-full px-4 py-2 border rounded-md focus:outline-none focus:border-green-700">
                    </div>

                    <div class="mb-4">
                        <label for="occupation" class="block text-green-800 mb-2">Occupation</label>
                        <input id="occupation" type="text" wire:model="occupation" class="form-input mt-1 block w-full px-4 py-2 border rounded-md focus:outline-none focus:border-green-700">
                    </div>

                    <div class="flex justify-center">
                        <button type="submit" class="bg-green-700 text-white py-2 px-6 rounded-lg hover:bg-green-800 transition duration-300">Submit Application</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
