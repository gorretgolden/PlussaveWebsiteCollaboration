<div class="bg-gray-100 px-4 sm:px-10 lg:px-16 ">

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @foreach($items as $item)
                <div class="p-4 sm:p-10 lg:p-8 bg-white rounded-lg shadow-lg flex flex-col items-center">
                    <div class="mb-4 bg-green-700 rounded-full p-3 sm:p-2 lg:p-5 flex items-center justify-center">
                        <!-- Render Font Awesome icon with white color -->
                        <i class="{{ $item->icon_class }} text-white fa-3x"></i>
                    </div>
                    <div>
                        <h2 class="text-base sm:text-lg font-semibold text-gray-800 mb-3 sm:mb-4 ">{{ $item->title }}</h2>
                        <p class="text-gray-600 sm:text-lg">
                            {{ $item->description }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>

</div>
