@extends('layout')

@section('content')
    <section>

        <!-- Hero Section -->
        <livewire:hero-section type="loans" />
    </section>


    <!--Loan Types-->
    <div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        @livewire('loan-types')
    </div>


    <div class="py-6 flex  items-center lg:items-start">
        <div class="w-full  flex justify-center lg:justify-start mb-6 lg:mb-0">
            <img src="{{ asset('assets/loan-calculator.png') }}" alt="Loan Calculator Image" class="w-64">
        </div>
        <div class="w-full ">
            <livewire:loan-calculator />
        </div>
    </div>

@endsection
