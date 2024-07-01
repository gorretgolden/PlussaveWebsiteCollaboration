<!-- resources/views/livewire/services-component.blade.php -->
<div class="mx-auto px-14 py-16 mb-8" >
    <h3 class="font-bold text-2xl py-6 text-center">Services We Provide</h3>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 py-4">
        @foreach($serviceTypes as $serviceType)
        <a href="{{ url('/services/' . $serviceType->route) }}">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:border border-green-700 transition duration-300">
                <img class="w-full h-48 object-cover" src="{{ asset('storage/' . str_replace('\\', '/', $serviceType->image)) }}" alt="Card Image">
                <div class="p-6">
                    <h2 class="text-xl font-bold mb-2 text-green-700">{{ $serviceType->name }}</h2>
                    <p class="text-gray-700 mb-4">{{ $serviceType->description }}</p>
                </div>
            </div>
        </a>
        @endforeach
    </div>

</div>
