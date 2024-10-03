<div class="bg-white shadow-lg rounded-lg p-6 mb-6">
    <h3 class="text-3xl font-bold mb-4 text-gray-800 text-center">
        {{-- <i class="fas fa-clock text-green-500 mr-2"></i> <!-- Static Clock Icon --> --}}
        Working Hours
    </h3>
    <ul class="space-y-4">
        @foreach($workingHours as $hour)
            <li class="flex items-center">
                <!-- Static Icon for each day -->
                <div class="w-8 h-8 flex items-center justify-center bg-green-700  text-white rounded-full mr-3">
                    <i class="fas fa-clock"></i> <!-- Static Clock Icon -->
                </div>
                <div class="text-lg font-medium text-gray-700">
                    {{ $hour->day }}: <span class="font-bold">{{ $hour->opening_time }} - {{ $hour->closing_time }}</span>
                </div>
            </li>
        @endforeach
    </ul>
</div>
