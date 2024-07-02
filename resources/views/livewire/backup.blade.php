{{-- <div class="flex justify-center items-center h-screen">



    <form wire:submit.prevent="submit" class="bg-white shadow-md rounded-lg p-6 mx-auto max-w-lg">

        <div class="mb-4">
            <label for="account_type" class="block text-sm font-medium text-gray-700">Account Type</label>
            <select id="account_type" wire:model="account_type" class="form-select mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring focus:ring-purple-500 focus:ring-opacity-50">
                <option value="">Select Account Type</option>
                <option value="Current Savings Account">Current Savings Account</option>
                <option value="Fixed Account">Fixed Account</option>
                <option value="Toto Account">Toto Account</option>
                <option value="Joint Account">Joint Account</option>
                <option value="Group Account">Group Account</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
            <select id="title" wire:model="title" class="form-select mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring focus:ring-purple-500 focus:ring-opacity-50">
                <option value="Mr">Mr</option>
                <option value="Mrs">Mrs</option>
                <option value="Miss">Miss</option>
                <!-- Add more options as needed -->
            </select>
        </div>

        <div class="mb-4">
            <label for="firstName" class="block text-sm font-medium text-gray-700">First Name</label>
            <input id="firstName" type="text" wire:model="firstName" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring focus:ring-purple-500 focus:ring-opacity-50">
        </div>

        <div class="mb-4">
            <label for="lastName" class="block text-sm font-medium text-gray-700">Last Name</label>
            <input id="lastName" type="text" wire:model="lastName" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring focus:ring-purple-500 focus:ring-opacity-50">
        </div>

        <div class="mb-4">
            <label for="otherName" class="block text-sm font-medium text-gray-700">Other Name</label>
            <input id="otherName" type="text" wire:model="otherName" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring focus:ring-purple-500 focus:ring-opacity-50">
        </div>

        <div class="mb-4">
            <label for="physicalAddress" class="block text-sm font-medium text-gray-700">Physical Address</label>
            <textarea id="physicalAddress" wire:model="physicalAddress" class="form-textarea mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring focus:ring-purple-500 focus:ring-opacity-50"></textarea>
        </div>

        <div class="mb-4">
            <label for="gender" class="block text-sm font-medium text-gray-700">Gender</label>
            <select id="gender" wire:model="gender" class="form-select mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring focus:ring-purple-500 focus:ring-opacity-50">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="mobileNumber" class="block text-sm font-medium text-gray-700">Mobile Number</label>
            <input id="mobileNumber" type="text" wire:model="mobileNumber" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring focus:ring-purple-500 focus:ring-opacity-50">
        </div>

        <div class="mb-4">
            <label for="otherMobileNumber" class="block text-sm font-medium text-gray-700">Other Mobile Number</label>
            <input id="otherMobileNumber" type="text" wire:model="otherMobileNumber" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring focus:ring-purple-500 focus:ring-opacity-50">
        </div>

        <div class="mb-4">
            <label for="dateOfBirth" class="block text-sm font-medium text-gray-700">Date of Birth</label>
            <input id="dateOfBirth" type="date" wire:model="dateOfBirth" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring focus:ring-purple-500 focus:ring-opacity-50">
        </div>

        <div class="mb-4">
            <label for="placeOfBirth" class="block text-sm font-medium text-gray-700">Place of Birth</label>
            <input id="placeOfBirth" type="text" wire:model="placeOfBirth" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring focus:ring-purple-500 focus:ring-opacity-50">
        </div>

        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">E-mail Address</label>
            <input id="email" type="email" wire:model="email" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring focus:ring-purple-500 focus:ring-opacity-50">
        </div>

        <div class="mb-4">
            <label for="identificationType" class="block text-sm font-medium text-gray-700">Identification Type</label>
            <select id="identificationType" wire:model="identificationType" class="form-select mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring focus:ring-purple-500 focus:ring-opacity-50">
                <option value="">Select Identification Type</option>
                <option value="NID">National ID (NID)</option>
                <option value="Passport">Passport</option>
                <option value="DrivingPermit">Driving Permit</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="identificationNumber" class="block text-sm font-medium text-gray-700">Identification Number</label>
            <input id="identificationNumber" type="text" wire:model="identificationNumber" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring focus:ring-purple-500 focus:ring-opacity-50">
        </div>

        <div class="mb-4">
            <label for="occupation" class="block text-sm font-medium text-gray-700">Occupation</label>
            <input id="occupation" type="text" wire:model="occupation" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring focus:ring-purple-500 focus:ring-opacity-50">
        </div>

        <div class="mt-6">
            <button type="submit" class="w-full bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-opacity-50">
                Submit Application
            </button>
        </div>

    </form>

</div> --}}
