@extends('layout')


@section('content')
   <!-- Hero Section -->
   <livewire:hero-section type="faqs" />
    <div class="container mx-auto py-12">
        {{-- <div class="hero bg-blue-600 text-white p-12 rounded-lg shadow-lg mb-12">
            <h1 class="text-4xl font-bold mb-4">Welcome to Our FAQ Page</h1>
            <p class="text-lg">Find answers to the most frequently asked questions about our fintech services.</p>
        </div> --}}
        <section id="faq">
            <h2 class="text-3xl font-bold mb-6 text-center text-gray-900">Frequently Asked Questions</h2>
            <livewire:faqs />
        </section>
    </div>
@endsection
