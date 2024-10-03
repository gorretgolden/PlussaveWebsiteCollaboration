<div class="max-w-4xl mx-auto px-4">
    <h2 class="text-2xl font-bold mb-4 text-center">Loan Application Form</h2>

    <div class="flex flex-col md:flex-row items-center justify-center mt-8">
        <div class="w-full md:w-2/3 lg:w-1/2 mb-8 md:mb-0 md:mr-4">
            <div class="bg-white shadow-md rounded px-8 py-6 mb-4">
                @if (session()->has('message'))
                    <div class="bg-green-100 border border-green-600 text-green-700 px-4 py-3 rounded mb-4" role="alert">
                        <span class="block sm:inline">{{ session('message') }}</span>
                    </div>
                @endif

                <form wire:submit.prevent="submit">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="loanAmount">
                            Loan Amount
                        </label>
                        <input wire:model="loanAmount" type="number" min="10000"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="loanAmount" placeholder="Loan Amount">
                        @error('loanAmount') <p class="text-red-500 text-xs">{{ $message }}</p> @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                            Name
                        </label>
                        <input wire:model="name"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="name" type="text" placeholder="Your Name">
                        @error('name') <p class="text-red-500 text-xs">{{ $message }}</p> @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                            Email
                        </label>
                        <input wire:model="email"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="email" type="email" placeholder="Email Address">
                        @error('email') <p class="text-red-500 text-xs">{{ $message }}</p> @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">
                            Phone
                        </label>
                        <input wire:model="phone"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="phone" type="text" placeholder="Phone Number">
                        @error('phone') <p class="text-red-500 text-xs">{{ $message }}</p> @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="loanType">
                            Loan Type
                        </label>
                        <select wire:model="loanType"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="loanType">
                            <option value="">Select Loan Type</option>
                            <option value="Business Loans">Business Loans</option>
                            <option value="Personal Loans">Personal Loans</option>
                            <option value="School Loans">School Loans</option>
                            <!-- Add more options as needed -->
                        </select>
                        @error('loanType') <p class="text-red-500 text-xs">{{ $message }}</p> @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="businessLocation">
                            Business Location
                        </label>
                        <input wire:model="businessLocation"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="businessLocation" type="text" placeholder="Business Location">
                        @error('businessLocation') <p class="text-red-500 text-xs">{{ $message }}</p> @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="loanPurpose">
                            Loan Purpose
                        </label>
                        <input wire:model="loanPurpose"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="loanPurpose" type="text" placeholder="Loan Purpose">
                        @error('loanPurpose') <p class="text-red-500 text-xs">{{ $message }}</p> @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="residence">
                            Residence
                        </label>
                        <input wire:model="residence"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="residence" type="text" placeholder="Residence">
                        @error('residence') <p class="text-red-500 text-xs">{{ $message }}</p> @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="businessNature">
                            Business Nature
                        </label>
                        <select wire:model.lazy="businessNature"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-green-500"
                            id="businessNature">
                            <option value="">Select Business Nature</option>
                            @foreach ($businessCategories as $category)
                                <option value="{{ $category }}">{{ $category }}</option>
                            @endforeach
                        </select>
                        @error('businessNature') <p class="text-red-500 text-xs">{{ $message }}</p> @enderror
                    </div>

                    <div class="flex items-center justify-center">
                        <button type="submit" wire:loading.attr="disabled"
                            class="bg-green-700 hover:bg-green-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full relative">
                            <span wire:loading wire:target="submit">
                                <svg class="animate-spin h-5 w-5 mr-3 absolute left-0 inset-y-0 m-auto pl-3"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                        stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor"
                                        d="M4 12a8 8 0 018-8V2.5a.5.5 0 011 0V4a8 8 0 01-8 8z"></path>
                                </svg>
                                Submitting...
                            </span>
                            <span wire:loading.remove>Submit</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="md:w-full lg:w-1/2 relative">
            <img src="{{ asset('assets/loan-application-image-right.png') }}" alt="loan-application-image-right"
                class="w-full h-auto">
        </div>
    </div>
</div>
