<div
>
<form wire:submit.prevent="subscribe" class="flex items-center">
    <input wire:model="email" type="email" placeholder="Enter your email"
        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-green-600 mr-2">

    <button type="submit"
        class="block bg-green-700 text-white px-6 py-2 rounded-md hover:bg-green-800 focus:outline-none focus:ring-2 focus:ring-green-600 focus:ring-opacity-50">
        Subscribe
    </button>



</form>

@error('email')
<span class="text-red-500">{{ $message }}</span>
@enderror

</div>
