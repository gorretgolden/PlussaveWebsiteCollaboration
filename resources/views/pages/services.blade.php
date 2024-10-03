@extends('layout')

@section('content')

<!-- Hero Section in Blade Template -->
<div class="relative bg-cover bg-center h-96" style="background-image: url('/images/hero-bg.jpg');">
    <div class="absolute inset-0 bg-purple-900 opacity-50"></div>
    <div class="relative z-10 flex flex-col items-center justify-center h-full text-white text-center p-6">
        <h1 class="text-4xl lg:text-4xl font-bold mb-4">Transform Your Beauty</h1>
        <p class="text-lg lg:text-2xl mb-8">Experience top-notch hairdressing, manicure, and pedicure services at home.
        </p>

    </div>
</div>


<!-- Services Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center text-gray-800 mb-8">Our Services</h2>
        <p class="text-gray-600 text-center mb-12">Experience the best in beauty and personal care with our range of services designed to make you look and feel your best.</p>
        <div class="flex flex-wrap justify-center">
            <!-- Service Card -->
            <div class="w-full md:w-1/3 p-4">
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">Hair Styling</h3>
                    <p class="text-gray-600 mb-4">Transform your hair with our professional styling services.</p>
                    <ul class="text-gray-600">
                        <li class="flex justify-between py-2 border-b">
                            <span>Haircut</span>
                            <span>$40</span>
                        </li>
                        <li class="flex justify-between py-2 border-b">
                            <span>Hair Color</span>
                            <span>$70</span>
                        </li>
                        <li class="flex justify-between py-2 border-b">
                            <span>Highlights</span>
                            <span>$90</span>
                        </li>
                        <li class="flex justify-between py-2 border-b">
                            <span>Blowout</span>
                            <span>$35</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Service Card -->
            <div class="w-full md:w-1/3 p-4">
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">Manicure & Pedicure</h3>
                    <p class="text-gray-600 mb-4">Pamper your hands and feet with our manicure and pedicure services.</p>
                    <ul class="text-gray-600">
                        <li class="flex justify-between py-2 border-b">
                            <span>Manicure</span>
                            <span>$30</span>
                        </li>
                        <li class="flex justify-between py-2 border-b">
                            <span>Pedicure</span>
                            <span>$40</span>
                        </li>
                        <li class="flex justify-between py-2 border-b">
                            <span>Gel Manicure</span>
                            <span>$50</span>
                        </li>
                        <li class="flex justify-between py-2 border-b">
                            <span>Gel Pedicure</span>
                            <span>$60</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Service Card -->
            <div class="w-full md:w-1/3 p-4">
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">Facial Treatments</h3>
                    <p class="text-gray-600 mb-4">Rejuvenate your skin with our customized facial treatments.</p>
                    <ul class="text-gray-600">
                        <li class="flex justify-between py-2 border-b">
                            <span>Basic Facial</span>
                            <span>$50</span>
                        </li>
                        <li class="flex justify-between py-2 border-b">
                            <span>Anti-Aging Facial</span>
                            <span>$80</span>
                        </li>
                        <li class="flex justify-between py-2 border-b">
                            <span>Acne Treatment</span>
                            <span>$70</span>
                        </li>
                        <li class="flex justify-between py-2 border-b">
                            <span>Microdermabrasion</span>
                            <span>$90</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="w-full md:w-1/3 p-4">
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">Hair Styling</h3>
                    <p class="text-gray-600 mb-4">Transform your hair with our professional styling services.</p>
                    <ul class="text-gray-600">
                        <li class="flex justify-between py-2 border-b">
                            <span>Haircut</span>
                            <span>$40</span>
                        </li>
                        <li class="flex justify-between py-2 border-b">
                            <span>Hair Color</span>
                            <span>$70</span>
                        </li>
                        <li class="flex justify-between py-2 border-b">
                            <span>Highlights</span>
                            <span>$90</span>
                        </li>
                        <li class="flex justify-between py-2 border-b">
                            <span>Blowout</span>
                            <span>$35</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="w-full md:w-1/3 p-4">
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">Hair Styling</h3>
                    <p class="text-gray-600 mb-4">Transform your hair with our professional styling services.</p>
                    <ul class="text-gray-600">
                        <li class="flex justify-between py-2 border-b">
                            <span>Haircut</span>
                            <span>$40</span>
                        </li>
                        <li class="flex justify-between py-2 border-b">
                            <span>Hair Color</span>
                            <span>$70</span>
                        </li>
                        <li class="flex justify-between py-2 border-b">
                            <span>Highlights</span>
                            <span>$90</span>
                        </li>
                        <li class="flex justify-between py-2 border-b">
                            <span>Blowout</span>
                            <span>$35</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="w-full md:w-1/3 p-4">
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">Hair Styling</h3>
                    <p class="text-gray-600 mb-4">Transform your hair with our professional styling services.</p>
                    <ul class="text-gray-600">
                        <li class="flex justify-between py-2 border-b">
                            <span>Haircut</span>
                            <span>$40</span>
                        </li>
                        <li class="flex justify-between py-2 border-b">
                            <span>Hair Color</span>
                            <span>$70</span>
                        </li>
                        <li class="flex justify-between py-2 border-b">
                            <span>Highlights</span>
                            <span>$90</span>
                        </li>
                        <li class="flex justify-between py-2 border-b">
                            <span>Blowout</span>
                            <span>$35</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection
