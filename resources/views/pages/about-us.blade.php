@extends('layout')

@section('content')
    <!-- Hero Section -->
    @livewire('hero-section')

    <!--About us-->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">

            <div class="flex flex-wrap items-center justify-center">
                <div class="w-full md:w-1/2 p-4 ">
                    <img class="rounded-lg shadow-lg" src="{{ asset('storage/' . $aboutUs->image) }}">
                </div>
                <div class="w-full md:w-1/2 p-4">
                    <h2 class="text-2xl font-bold  text-gray-800 mb-8">{{ $aboutUs->background_title }}</h2>
                    <p class="text-gray-600 mb-4">
                        {{ $aboutUs->background_info }}
                    </p>


                </div>
            </div>
        </div>
    </section>

    <!-- Our Mission Section -->
    <section class="py-20 bg-gray-100">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center text-gray-800 mb-8">Our Mission</h2>
            <p class="text-gray-600 text-center mb-8">
                {{ $aboutUs->mision }}
            </p>
            <div class="flex flex-wrap justify-center">
                <div class="w-full md:w-1/3 p-4">
                    <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                        <h3 class="text-2xl font-semibold text-gray-800 mb-4">Quality Service</h3>
                        <p class="text-gray-600">Our experienced professionals provide top-notch services tailored to your
                            individual needs.</p>
                    </div>
                </div>
                <div class="w-full md:w-1/3 p-4">
                    <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                        <h3 class="text-2xl font-semibold text-gray-800 mb-4">Eco-Friendly Products</h3>
                        <p class="text-gray-600">We use products that are kind to your skin and the environment.</p>
                    </div>
                </div>
                <div class="w-full md:w-1/3 p-4">
                    <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                        <h3 class="text-2xl font-semibold text-gray-800 mb-4">Customer Satisfaction</h3>
                        <p class="text-gray-600">Your satisfaction is our priority. We strive to make every visit enjoyable
                            and relaxing.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Our Team Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center text-gray-800 mb-8">Meet Our Team</h2>
            <div class="flex flex-wrap justify-center">
                <div class="w-full md:w-1/4 p-4">
                    <div class="bg-gray-100 p-6 rounded-lg shadow-lg text-center">
                        <img src="https://img.freepik.com/free-photo/medium-shot-beautiful-woman-with-braids_23-2151429485.jpg?t=st=1716802504~exp=1716806104~hmac=8d173623fc3cc408bd21cdfdae6ac637a0bc14051fc4157be0623f27aacae4b8&w=826"
                            alt="Team Member 1" class=" rounded-full mx-auto mb-4">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Jane Doe</h3>
                        <p class="text-gray-600">Founder & CEO</p>
                    </div>
                </div>
                <div class="w-full md:w-1/4 p-4">
                    <div class="bg-gray-100 p-6 rounded-lg shadow-lg text-center">
                        <img src="https://img.freepik.com/free-photo/front-view-beautiful-woman-with-braids_23-2151429532.jpg?t=st=1716802728~exp=1716806328~hmac=2e7b1a8ea3fedc2d14aba5e22b1f665a70538e58955ef1a9066794a4f75c93cd&w=826"
                            class=" rounded-full mx-auto mb-4">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">John Smith</h3>
                        <p class="text-gray-600">Senior Stylist</p>
                    </div>
                </div>
                <div class="w-full md:w-1/4 p-4">
                    <div class="bg-gray-100 p-6 rounded-lg shadow-lg text-center">
                        <img src="https://img.freepik.com/free-photo/low-angle-beautiful-woman-with-braids_23-2151429537.jpg?t=st=1716802633~exp=1716806233~hmac=578bdd6178e36115c1b38e3f9ca42842afb2310b86098f037b770eb75abd3938&w=826"
                            alt="Team Member 3" class=" rounded-full mx-auto mb-4">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Sarah Johnson</h3>
                        <p class="text-gray-600">Nail Technician</p>
                    </div>
                </div>
                <div class="w-full md:w-1/4 p-4">
                    <div class="bg-gray-100 p-6 rounded-lg shadow-lg text-center">
                        <img src="https://img.freepik.com/free-photo/close-up-woman-wearing-make-up_23-2149042842.jpg?t=st=1716802676~exp=1716806276~hmac=bd2569bdb4d44ecaeed61cf701419b3bc291cc14d9e7fb110efbc1776ccd8760&w=826"
                            alt="Team Member 4" class="rounded-full mx-auto mb-4">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Emily Davis</h3>
                        <p class="text-gray-600">Beauty Therapist</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
