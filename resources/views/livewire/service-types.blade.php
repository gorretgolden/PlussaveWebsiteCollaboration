<!-- resources/views/livewire/services-component.blade.php -->
<div class=" py-16 px-20 mb-8" >
    <h3 class="font-bold text-3xl text-green-700  text-center mb-4">Services We Provide</h3>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        @foreach($serviceTypes as $serviceType)
        <a href="{{ url('/services/' . $serviceType->route) }}">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:border border-green-700 transition duration-300 w-full md:w-auto md:max-w-none">
                <img class="w-full h-48 object-cover" src="{{ asset('storage/' . str_replace('\\', '/', $serviceType->image)) }}" alt="Card Image">
                <div class="p-6">
                    <h2 class="text-xl font-bold mb-2 ">{{ $serviceType->name }}</h2>
                    <p class="text-gray-700 mb-4">{{ $serviceType->description }}</p>
                </div>
            </div>
        </a>
        @endforeach
    </div>


</div>
