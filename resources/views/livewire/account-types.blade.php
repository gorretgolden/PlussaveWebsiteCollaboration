<div class="space-x-10">
    @if($loading)
        <!-- Shimmer effect while loading -->
        @for ($i = 0; $i < 3; $i++)
        <div class="px-20 mx-auto bg-white rounded-lg overflow-hidden">
            <div class="grid grid-cols-1 md:grid-cols-2 p-4 shimmer-wrapper">
                <div class="py-4 px-3">
                    <div class="shimmer w-full h-48 rounded-lg mt-3"></div>
                </div>
                <div class="p-6">
                    <div class="shimmer h-8 w-1/2 mb-2 rounded-lg"></div>
                    <div class="shimmer h-4 w-3/4 mb-4 rounded-lg"></div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <div class="shimmer h-6 w-1/3 mb-2 rounded-lg"></div>
                            <ul class="list-none space-y-3">
                                @for ($j = 0; $j < 4; $j++)
                                    <li class="flex items-center p-2 bg-gray-100 rounded shadow">
                                        <div class="shimmer h-6 w-full rounded-lg"></div>
                                    </li>
                                @endfor
                            </ul>
                        </div>
                        <div>
                            <div class="shimmer h-6 w-1/3 mb-2 rounded-lg"></div>
                            <ul class="list-none space-y-3">
                                @for ($j = 0; $j < 4; $j++)
                                    <li class="flex items-center p-2 bg-gray-100 rounded shadow">
                                        <div class="shimmer h-6 w-full rounded-lg"></div>
                                    </li>
                                @endfor
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endfor
    @else
        <!-- Render the actual content once loaded -->
        @foreach($accountTypes as $accountType)
        <div class="bg-white rounded-lg overflow-hidden">
            <div class="grid grid-cols-1 md:grid-cols-2 p-4">
                <div class="py-4 px-3">
                    <img class="w-full object-contain rounded-lg mt-3" src="{{ asset('storage/' . str_replace('\\', '/', $accountType->image)) }}" alt="{{ $accountType->title }}">
                </div>
                <div class="p-6">
                    <h2 class="text-2xl font-bold mb-2 text-green-700">{{ $accountType->title }}</h2>
                    <p class="text-gray-700 mb-4">{{ $accountType->description }}</p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <h3 class="text-xl font-semibold mb-2 text-green-700">Features</h3>
                            <ul class="list-none space-y-3">
                                @if ($accountType->features)
                                    @foreach($accountType->features->take(4)  as $feature)
                                    <li class="flex items-center p-2 bg-gray-100 rounded shadow">
                                        <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                        <span class="text-gray-700">{{ $feature->feature }}</span>
                                    </li>
                                    @endforeach
                                @else
                                    <li class="text-gray-700">No features found.</li>
                                @endif
                            </ul>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold mb-2 text-green-700">Benefits</h3>
                            <ul class="list-none space-y-3">
                                @if ($accountType->benefits)
                                    @foreach($accountType->benefits->take(4)  as $benefit)
                                    <li class="flex items-center p-2 bg-gray-100 rounded shadow">
                                        <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                        <span class="text-gray-700">{{ $benefit->benefit }}</span>
                                    </li>
                                    @endforeach
                                @else
                                    <li class="text-gray-700">No benefits found.</li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    @endif
</div>
