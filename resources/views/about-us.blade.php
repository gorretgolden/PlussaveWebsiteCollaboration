@extends('layout')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-cover bg-center h-96" style="background-image: url('/images/about-hero-bg.jpg');">
        <div class="absolute inset-0 bg-purple-900 opacity-50"></div>
        <div class="container mx-auto px-4 h-full flex items-center justify-center">
            <div class="relative text-center text-white">
                <h1 class="text-4xl font-bold mb-4">Who Are We</h1>
                <p class="text-xl mb-8">Discover the story behind Beauty Salon, our mission, and our dedicated team.</p>
                <a href="#more" class="inline-block bg-white text-purple-800 font-semibold py-3 px-6 rounded-md shadow-lg hover:bg-gray-100">Learn More</a>
            </div>
        </div>
    </section>

    <!--About us-->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">

            <div class="flex flex-wrap items-center justify-center">
                <div class="w-full md:w-1/2 p-4">
                    <img src="https://img.freepik.com/free-photo/beautiful-african-woman-with-big-curly-afro-flowers-her-hair_181624-18034.jpg?t=st=1716802252~exp=1716805852~hmac=2185b292504d355098d6a7ec1f013f057eee8dd3a856ca36e564b691558d3333&w=1800" alt="Salon Interior" class="rounded-lg shadow-lg">
                </div>
                <div class="w-full md:w-1/2 p-4">
                    <h2 class="text-4xl font-bold  text-gray-800 mb-8">About Us</h2>
                    <p class="text-gray-600 mb-4">
                        Welcome to Beauty Salon, your number one destination for all things beauty. We're dedicated to
                        giving you the very best of hair styling, manicures, and pedicures, with a focus on quality,
                        customer service, and uniqueness.
                    </p>
                    <p class="text-gray-600 mb-4">
                        Founded in 2020 by Jane Doe, Beauty Salon has come a long way from its beginnings in a home office.
                        When Jane first started out, her passion for eco-friendly beauty products drove her to quit her day
                        job, and gave her the impetus to turn hard work and inspiration into a booming salon. We now serve
                        customers all over the city, and are thrilled to be a part of the eco-friendly wing of the beauty
                        industry.
                    </p>
                    <p class="text-gray-600 mb-4">
                        We hope you enjoy our services as much as we enjoy offering them to you. If you have any questions
                        or comments, please don't hesitate to contact us.
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
                Our mission is to provide high-quality beauty services in a relaxing and welcoming environment. We are
                committed to using eco-friendly products and techniques to ensure the well-being of our clients and the
                environment.
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
                        <img src="https://img.freepik.com/free-photo/medium-shot-beautiful-woman-with-braids_23-2151429485.jpg?t=st=1716802504~exp=1716806104~hmac=8d173623fc3cc408bd21cdfdae6ac637a0bc14051fc4157be0623f27aacae4b8&w=826" alt="Team Member 1" class=" rounded-full mx-auto mb-4">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Jane Doe</h3>
                        <p class="text-gray-600">Founder & CEO</p>
                    </div>
                </div>
                <div class="w-full md:w-1/4 p-4">
                    <div class="bg-gray-100 p-6 rounded-lg shadow-lg text-center">
                        <img src="https://img.freepik.com/free-photo/front-view-beautiful-woman-with-braids_23-2151429532.jpg?t=st=1716802728~exp=1716806328~hmac=2e7b1a8ea3fedc2d14aba5e22b1f665a70538e58955ef1a9066794a4f75c93cd&w=826" class=" rounded-full mx-auto mb-4">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">John Smith</h3>
                        <p class="text-gray-600">Senior Stylist</p>
                    </div>
                </div>
                <div class="w-full md:w-1/4 p-4">
                    <div class="bg-gray-100 p-6 rounded-lg shadow-lg text-center">
                        <img src="https://img.freepik.com/free-photo/low-angle-beautiful-woman-with-braids_23-2151429537.jpg?t=st=1716802633~exp=1716806233~hmac=578bdd6178e36115c1b38e3f9ca42842afb2310b86098f037b770eb75abd3938&w=826" alt="Team Member 3" class=" rounded-full mx-auto mb-4">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Sarah Johnson</h3>
                        <p class="text-gray-600">Nail Technician</p>
                    </div>
                </div>
                <div class="w-full md:w-1/4 p-4">
                    <div class="bg-gray-100 p-6 rounded-lg shadow-lg text-center">
                        <img src="https://img.freepik.com/free-photo/close-up-woman-wearing-make-up_23-2149042842.jpg?t=st=1716802676~exp=1716806276~hmac=bd2569bdb4d44ecaeed61cf701419b3bc291cc14d9e7fb110efbc1776ccd8760&w=826" alt="Team Member 4" class="rounded-full mx-auto mb-4">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Emily Davis</h3>
                        <p class="text-gray-600">Beauty Therapist</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
