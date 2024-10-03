@extends('layout')


@section('content')
   <!-- Hero Section -->
   <livewire:hero-section type="faqs" />
    <div class="container mx-auto py-12">

        <section id="faq">
            <h2 class="text-3xl font-bold mb-6 text-center text-gray-900">Frequently Asked Questions</h2>
            <livewire:faqs />
        </section>
    </div>
@endsection
