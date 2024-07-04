@extends('layout')

@section('content')
    <section>

        <!-- Hero Section -->
        <livewire:hero-section type="loans" />
    </section>


    <!--Loan Information-->
    <livewire:loan-information-section />


    <!--Loan Types-->
    <section class="secondary-bg">

        @livewire('loan-types')

    </section>






    <div class="flex flex-wrap items-center justify-center">
        <!-- Column for the form -->
        <div class="w-full md:w-1/2 mb-4 md:mb-0">
            <livewire:loan-calculator />
        </div>

        <!-- Column for the video or image -->
        <div class="">
            <img src="{{ asset('assets/loan-calculator.png') }}" alt="Loan Calculator Image" class="w-full ">
        </div>
    </div>

@endsection
