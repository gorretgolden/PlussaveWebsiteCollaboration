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
    <div class="container mx-auto py-16 bg-gray-100">
        @livewire('savings-plans-component')
    </div>

    <!-- Financial Advice Section -->
    <div class="container mx-auto py-16">
        @livewire('financial-advice-component')
    </div>
@endsection
