@extends('layout')

@section('title', 'Financial Literacy')

@section('content')
<!-- Hero Section -->
<livewire:hero-section type="financial-literacy" />

<!-- Financial Tips and Tricks Section -->
<div class="container mx-auto py-16">
    @livewire('financial-tips-component')
</div>

<!-- Savings Plans Section -->
<div class="container secondary-bg mx-auto py-16 ">
    @livewire('savings-plans-component')
</div>

<!-- Financial Advice Section -->
<div class="container mx-auto py-16">
    @livewire('financial-advice-component')
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
