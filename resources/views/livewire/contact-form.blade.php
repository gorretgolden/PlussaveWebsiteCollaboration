<div class="shadow-md rounded-lg p-6 bg-white">


    @if (session()->has('success'))
        <div class="mt-4 mb-3 bg-green-100 border border-green-6 00 text-green-700 px-4 py-3 rounded relative" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif
    <form wire:submit.prevent="sendContactMessage">
        <h2 class="font-bold 3xl ">Contact Form</h2>

        <br/>
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
            <input wire:model="name" type="text" id="name" name="name" class="form-input w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent">
            @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
            <input wire:model="email" type="email" id="email" name="email" class="form-input w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent">
            @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="phone" class="block text-gray-700 font-bold mb-2">Phone</label>
            <input wire:model="phone" type="text" id="phone" name="phone" class="form-input w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent">
            @error('phone') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="message" class="block text-gray-700 font-bold mb-2">Message</label>
            <textarea wire:model="message" id="message" name="message" rows="4" class="form-textarea w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent"></textarea>
            @error('message') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded w-full">Send Message</button>
    </form>

</div>
