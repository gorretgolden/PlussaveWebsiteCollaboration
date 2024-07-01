<div class="space-x-10">
    @foreach($accountTypes as $accountType)
    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="p-6">
                <img class="w-full h-52 object-cover rounded-lg" src="{{ asset('storage/' . str_replace('\\', '/', $accountType->image)) }}" alt="{{ $accountType->title }}">
            </div>
            <div class="p-6">
                <h2 class="text-2xl font-bold mb-2 text-green-700">{{ $accountType->title }}</h2>
                <p class="text-gray-700 mb-4">{{ $accountType->description }}</p>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <h3 class="text-xl font-semibold mb-2 text-green-700">Features</h3>
                        <ul class="list-none space-y-3">
                            @foreach($accountType->features as $feature)
                            <li class="flex items-center p-2 bg-gray-100 rounded shadow">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                <span class="text-gray-700">{{ $feature->feature }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2 text-green-700">Benefits</h3>
                        <ul class="list-none space-y-2">
                            @foreach($accountType->benefits as $benefit)
                            <li class="flex items-center p-2 bg-gray-100 rounded shadow">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                <span class="text-gray-700">{{ $benefit->benefit }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
