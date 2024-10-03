@extends('layout')

@section('content')
<section>

    <!-- Hero Section -->
    <livewire:hero-section type="contact" />

</section>

<div class="container mx-auto px-4 py-4 mt-10 mb-10">
    <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 gap-20">

        <livewire:contact-us-information />

        <livewire:contact-form/>

    </div>
</div>

<!-- Working Hours Section -->
<div class="mx-auto py-16 px-6">
    <livewire:working-hours />
</div>


<!-- Google Maps Section -->
{{--
<div class="p-8">
    <h2 class="text-3xl font-bold text-center text-gray-900 mb-6">Our Location</h2>
    <livewire:contact-map-component />
</div>
--}}

@endsection
