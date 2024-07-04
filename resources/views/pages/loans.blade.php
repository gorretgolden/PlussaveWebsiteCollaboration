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



    <div class="container mx-auto py-16 px-6">

        <div class="flex flex-col md:flex-row items-center justify-between">
            <div>
                <img src="{{ asset('assets/loan-calculator.png') }}" alt="Loan Calculator Image" class="w-1/2 ml-4">

            </div>

            <div class="w-full">
                <livewire:loan-calculator />
            </div>


        </div>
    </div>
@endsection
