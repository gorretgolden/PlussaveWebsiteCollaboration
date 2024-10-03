<!-- Updated services-component.blade.php -->
<div class="bg-gray-100 px-4 sm:px-10 lg:px-20 py-2 mb-8">
    <h3 class="font-bold text-3xl text-green-700 text-center mb-6">Services We Provide</h3>

    <div class="py-4" >
        <div class="sm:px-12 md:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 ">
            @foreach($serviceTypes as $serviceType)
            <a href="{{ url('/services/' . $serviceType->route) }}">
                <div class="bg-green shadow-lg rounded-lg overflow-hidden hover:border border-green-700 transition duration-300 w-full">
                    <img class="w-full h-48 object-cover" src="{{ asset('storage/' . str_replace('\\', '/', $serviceType->image)) }}" alt="Card Image">
                    <div class="p-4 sm:p-6 lg:p-8">
                        <h2 class="text-xl font-bold mb-2">{{ $serviceType->name }}</h2>
                        <p class="text-gray-700 mb-4">{{ $serviceType->description }}</p>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>
