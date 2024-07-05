<div>
    <h2 class="text-2xl font-bold mb-8">More About Financial Services</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        @foreach($financialServices as $service)
            <div class="mb-4 p-4 border rounded flex items-start">
                <div class="mr-4 text-green-700">
                    <i class="fas fa-{{ $service->icon }} fa-2x"></i>
                </div>
                <div>
                    <h3 class="text-lg font-bold">{{ $service->title }}</h3>
                    <p>{{ $service->description }}</p>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Pagination Links -->
    <div class="mt-8">
        {{ $financialServices->links() }}
    </div>
</div>
