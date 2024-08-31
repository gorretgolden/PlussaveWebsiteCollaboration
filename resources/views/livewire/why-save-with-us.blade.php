<div class="p-4 sm:p-6 md:p-8 lg:p-10 bg-gray-100">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @foreach($items as $item)
                <div class="p-4 sm:p-6 bg-white rounded-lg shadow-lg flex flex-col items-center">
                    <div class="mb-4 bg-green-700 rounded-full p-3 sm:p-4 flex items-center justify-center">
                        <!-- Render Font Awesome icon with white color -->
                        <i class="{{ $item->icon_class }} text-white fa-3x"></i>
                    </div>
                    <div class="text-center">
                        <h3 class="text-base sm:text-lg font-semibold text-gray-800 mb-3 sm:mb-4">{{ $item->title }}</h3>
                        <p class="text-gray-600 text-sm sm:text-base">
                            {{ $item->description }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
