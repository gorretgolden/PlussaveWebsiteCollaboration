@extends('layout')

@section('title', 'Other Financial Services')

@section('content')
    <!-- Hero Section -->
    <livewire:hero-section type="other-financial-services" />

    <!-- Financial Services Section -->
    <div class="container mx-auto  px-3 py-16">
        @livewire('other-financial-services-component')
    </div>
@endsection

@section('scripts')
<script>
    document.addEventListener('livewire:load', function () {
        Livewire.on('pageChanged', () => {
            const elements = document.querySelectorAll('.page-section');
            elements.forEach(element => {
                element.classList.add('transition-opacity', 'duration-500', 'ease-in-out');
                element.style.opacity = '0';
                setTimeout(() => {
                    element.style.opacity = '1';
                }, 500);
            });
        });
    });
</script>
@endsection
