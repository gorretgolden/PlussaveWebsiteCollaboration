@extends('layout')

@section('content')
    <section>

        <!-- Hero Section -->
        <livewire:hero-section type="loans" />
    </section>


    <!--Loan Information-->
    <section>
        <livewire:loan-information-section />
    </section>



    <!--Loan Types-->
    <section class="secondary-bg">

        @livewire('loan-types')

    </section>



    <!--loan calculator-->
    <div class="flex flex-wrap items-center justify-center">

        <div class="w-full md:w-1/2 mb-4 md:mb-0">
            <livewire:loan-calculator />
        </div>


        <div class="">
            <img src="{{ asset('assets/loan-calculator.png') }}" alt="Loan Calculator Image" class="w-full ">
        </div>
    </div>

    <!--How to apply for loans-->
    <div class="flex flex-wrap items-center justify-center secondary-bg container p-8">

        <!-- iPhone frame image column -->
        <div >
            <div class="relative">
                <img src="{{asset('assets/loan-application-image.png')}}" alt="iPhone Frame" class=" w-70 h-96">

            </div>
        </div>

        <!-- Column for the steps -->
        <div class="w-full md:w-1/2">
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">

                <h2 class="text-xl font-bold mb-4">Loan Application Steps</h2>
                <!-- Stepper -->
                <div class="flex items-center mb-4">
                    <div class="bg-green-700 rounded-full h-8 w-8 flex items-center justify-center">
                        <span class="text-white">1</span>
                    </div>
                    <p class="ml-4">Step 1: Fill out the loan application form.</p>
                </div>

                <div class="flex items-center mb-4">
                    <div class="bg-green-700 rounded-full h-8 w-8 flex items-center justify-center">
                        <span class="text-white">2</span>
                    </div>
                    <p class="ml-4">Step 2: Provide necessary documents and information.</p>
                </div>

                <div class="flex items-center mb-4">
                    <div class="bg-green-700 rounded-full h-8 w-8 flex items-center justify-center">
                        <span class="text-white">3</span>
                    </div>
                    <p class="ml-4">Step 3: Review and submit your application.</p>
                </div>

                <div class="flex items-center">
                    <div class="bg-green-700 rounded-full h-8 w-8 flex items-center justify-center">
                        <span class="text-white">4</span>
                    </div>
                    <p class="ml-4">Step 4: Wait for loan approval and disbursement.</p>
                </div>
            </div>
        </div>
    </div>


@endsection
