<div>
    @if (session()->has('success'))
    <div class="bg-green-100 border-l-4 border-green-500 text-green-900 p-4 mb-4 shadow-md mx-auto max-w-lg rounded-md relative">
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <div class="text-lg font-semibold mr-3">
                    Success
                </div>
                <div class="text-sm">
                    {{ session('success') }}
                </div>
            </div>
            <button class="text-gray-500 hover:text-gray-700" wire:click="$refresh">
                <svg class="h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10 8.586l4.293-4.293a1 1 0 011.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 111.414-1.414L10 8.586z"
                        clip-rule="evenodd" />
                </svg>
            </button>
        </div>
    </div>
    @endif



    <form wire:submit.prevent="subscribe" class="flex items-center">
        <input wire:model="email" type="email" placeholder="Enter your email"
            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-green-600 mr-2">

        <button type="submit" wire:loading.attr="disabled"
            class="block bg-green-700 text-white px-6 py-2 rounded-md hover:bg-green-800 focus:outline-none focus:ring-2 focus:ring-green-600 focus:ring-opacity-50">
            <span wire:loading wire:target="subscribe">
                <i class="fa fa-spinner fa-spin"></i> Subscribing...
            </span>
            <span wire:loading.remove>
                Subscribe
            </span>
        </button>
    </form>

    @error('email')
    <span class="text-red-500">{{ $message }}</span>
    @enderror
</div>
