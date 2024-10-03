<!-- Livewire View (contact-map-component.blade.php) -->

<div class="max-w-full mx-auto overflow-hidden rounded-lg shadow-lg">
    <img class="w-full h-auto" src="https://maps.googleapis.com/maps/api/staticmap?center={{ $location }}&zoom=15&size=600x300&maptype=roadmap&markers=color:red%7C{{ $location }}&key=YOUR_GOOGLE_MAPS_API_KEY" alt="Google Maps">
</div>
