<div class="py-6 px-10 bg-white shadow-md rounded">
    <h4 class="font-bold text-lg p-6">Contact Information</h4>

    <div class="flex justify-start py-4 px-6">
        <i class="fas fa-phone text-green-700 w-10"></i>
        <p class="text-base px-8">Contact Number: {{ $contactInformation->phone }}</p>
    </div>

    <div class="flex justify-start py-4 px-6">
        <i class="fas fa-envelope text-green-700 w-10"></i>
        <p class="text-base px-8">Email Address: {{ $contactInformation->email }}</p>
    </div>

    <div class="flex justify-start py-4 px-6">
        <i class="fas fa-map-marker-alt text-green-700 w-10"></i>
        <p class="text-base px-8">Location: {{ $contactInformation->address }}</p>
    </div>

    <div class="flex justify-start py-4 px-6">
        <i class="fab fa-twitter text-green-700 w-10"></i>
        <p class="text-base px-8">Twitter: {{ $contactInformation->twitter }}</p>
    </div>

    <div class="flex justify-start py-4 px-6">
        <i class="fab fa-instagram text-green-700 w-10"></i>
        <p class="text-base px-8">Instagram: {{ $contactInformation->instagram }}</p>
    </div>
</div>
