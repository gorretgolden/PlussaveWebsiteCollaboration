@extends('layout')

@section('title', 'Home')

@section('content')


    <!-- Hero Section in Blade Template -->
    <div>
        @livewire('carousel')

    </div>
    <br>


    <!--saving--call to action-->
    <div class=" mx-auto py-16 px-6">

        <div class="flex flex-col md:flex-row items-center justify-between">
            <div class="md:w-1/2 md:ml-6 mb-5 p-4">
                <h1 class="text-3xl font-bold mb-10 text-green-700">Start Saving Smart with Plussave Financial Solutions</h1>
                <h2 class=" text-2xl text-gray-700 leading-relaxed mb-6 ">Looking for a reliable way to manage your finances?
                    Plussave Financial Solutions offers more than just quick loans.
                    We provide secure, hassle-free solutions designed to help you save and grow your money with confidence.
                </h2>
                <h2 class="text-2xl text-gray-700 leading-relaxed">Join us today and start making smarter financial
                    decisions. Your future starts here.</h2>
                <br>
                <a href="{{ route('loans.apply') }}"
                    class=" text-2xl inline-block bg-green-700 text-white font-semibold py-2  px-8 rounded hover:bg-green-800 hover:text-white hover:shadow-lg">
                    Apply for a loan
                </a>



            </div>
            <!-- Image on the left -->
            <div class="md:w-1/2 mb-6 md:mb-0">
                <img src="{{ asset('assets/home-right-image.png') }}" />
            </div>
            <!-- Title and text on the right -->

        </div>
    </div>



    <!--why save with us  max-w-3xl mx-auto  mb-8-->
    <section class="bg-gray-100 mx-auto py-16 px-6">
        <div class="md:ml-6 mb-5 p-6 ">
            <h2 class="text-3xl font-bold text-gray-800 md:w-1/2 mb-5  ">Why Save with Plussave</h2>
            <p class="text-2xl text-gray-600 mb-4">
                Looking for a reliable way to manage your finances? Plussave Financial Solutions offers more than just quick
                loans. We provide secure, hassle-free solutions designed to help you save and grow your money with
                confidence.
            </p>
        </div>
        @livewire('why-save-with-us')
        </div>
    </section>






    <!--service types-->
    <section class="secondary-bg">

        @livewire('service-types')

    </section>


    <!--why choose us-->
    <section class="py-16 px-20 mb-5 bg-white">


        <!-- Section Heading -->
        <div class="mb-12 ">
            <h2 class="text-2xl font-bold text-gray-800 py-6">Why Choose Us</h2>
            <div class="border-b-4  border-green-700"></div>

            <p class="text-gray-600 mt-2 py-3">Discover the benefits of our services and products today</p>
        </div>
        <!-- Reasons Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Reason 1 -->
            <div class="flex items-center p-4 bg-gray-50 rounded-lg shadow-lg">
                <div class="w-16 h-16 flex-shrink-0 bg-green-700 text-white rounded-full flex items-center justify-center">

                    <svg class="w-8 h-8 icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                        </path>
                    </svg>
                </div>
                <div class="ml-4">
                    <h3 class="text-xl font-semibold text-gray-800">Professional Staff</h3>
                    <p class="text-gray-600 mt-2">Our team consists of experienced professionals dedicated to
                        providing top-notch services.</p>
                </div>
            </div>
            <!-- Reason 2 -->
            <div class="flex items-center p-6 bg-gray-50 rounded-lg shadow-lg">
                <div class="w-16 h-16 flex-shrink-0 bg-green-700 text-white rounded-full flex items-center justify-center">
                    <!-- Icon (use any appropriate icon) -->
                    <svg class="w-8 h-8 icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3">
                        </path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9.75 9.75a8.003 8.003 0 0110.386-1.377m-.118 7.866A8.003 8.003 0 015.37 5.37">
                        </path>
                    </svg>
                </div>
                <div class="ml-4">
                    <h3 class="text-xl font-semibold text-gray-800">Convenient Appointments</h3>
                    <p class="text-gray-600 mt-2">We offer flexible scheduling options to accommodate your busy
                        lifestyle.</p>
                </div>
            </div>
            <!-- Reason 3 -->
            <div class="flex items-center p-6 bg-gray-50 rounded-lg shadow-lg">
                <div class="w-16 h-16 flex-shrink-0 bg-green-700 text-white rounded-full flex items-center justify-center">
                    <!-- Icon (use any appropriate icon) -->
                    <svg class="w-8 h-8 icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12h.01M15 12h.01M12 12h.01M21 12.02a9.953 9.953 0 01-9 5.98 9.953 9.953 0 01-9-5.98m18 0a9.935 9.935 0 00-4.5-8.536m-9 0A9.935 9.935 0 003 12.02m18 0c0-1.5-.375-2.91-1.07-4.165a8.017 8.017 0 00-7.93-4.87m-9 0C3.375 9.11 3 10.52 3 12.02m18 0c0 1.75-.375 3.29-1.07 4.55a8.017 8.017 0 01-7.93 4.47m-9 0C3.375 14.31 3 12.77 3 11.02m18 0a9.935 9.935 0 00-4.5-8.536M7.03 2.456a8.017 8.017 0 013.5-1.456m3.5 1.456a8.017 8.017 0 013.5 1.456m-7-1.456A8.017 8.017 0 0112 2.022M2 12c0-5.2 4-9.502 8.997-9.998M13 21c0-5.2-4-9.502-8.997-9.998">
                        </path>
                    </svg>
                </div>
                <div class="ml-4">
                    <h3 class="text-xl font-semibold text-gray-800">High-Quality Products</h3>
                    <p class="text-gray-600 mt-2">We use only the best products to ensure your satisfaction and
                        long-lasting results.</p>
                </div>
            </div>
            <!-- Add more reasons as needed -->
        </div>

    </section>



    <!--How we give loans-->
    {{--
    <section class=" py-20 mt-10 secondary-bg">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">How We Give Loans</h2>

        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Column 1 -->
                <div class=" p-4">
                    <div class="p-4">
                        <div class="relative flex justify-center items-center">


                            <!-- Circular Image -->
                            <div class="relative z-10 rounded-full border-4 border-gray-200 overflow-hidden">
                                <img class="rounded-full w-full object-cover" src="https://img.freepik.com/free-photo/portrait-professional-elegant-businesswoman_23-2150917130.jpg?t=st=1718366140~exp=1718369740~hmac=5183569422c69decf96cae2b4624d6dd3a4aba754985ee83ab7b007c513bdf93&w=1060" alt="Businesswoman">
                            </div>
                        </div>
                    </div>


                </div>

                <!-- Column 2 -->
                <div class="relative">
                    <!-- Step 1 -->
                    <div class="flex items-center mb-12">
                        <div class="step-circle">1</div>
                        <div class="step-content ml-8">
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Apply Online</h3>
                            <p class="text-gray-600">Fill out our simple online application form with your personal and
                                financial details.</p>
                        </div>
                    </div>
                    <!-- Dashed Line -->
                    <div class="dashed-line"></div>
                    <!-- Step 2 -->
                    <div class="flex items-center mb-12">
                        <div class="step-circle">2</div>
                        <div class="step-content ml-8">
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Verification</h3>
                            <p class="text-gray-600">Our team reviews your application and verifies your information.</p>
                        </div>
                    </div>
                    <!-- Dashed Line -->
                    <div class="dashed-line"></div>
                    <!-- Step 3 -->
                    <div class="flex items-center mb-12">
                        <div class="step-circle">3</div>
                        <div class="step-content ml-8">
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Get Approved</h3>
                            <p class="text-gray-600">Once verified, your loan is approved and you receive the funds in your
                                account.</p>
                        </div>
                    </div>
                    <!-- Dashed Line -->
                    <div class="dashed-line"></div>
                    <!-- Step 4 -->
                    <div class="flex items-center mb-12">
                        <div class="step-circle">4</div>
                        <div class="step-content ml-8">
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Repay Easily</h3>
                            <p class="text-gray-600">Make easy monthly repayments through our secure platform.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </section> --}}


    <div class="secondary-bg">

        <!-- Apply for Loan Section -->
        <section class="py-16">
            <div class="container mx-auto">


                @livewire('loan-application-form')
            </div>
        </section>


        <!-- Testimonial Section -->
        {{-- <section class="secondary-bg py-16">
            <div class="container mx-auto">
                <h2 class="text-3xl font-bold text-center mb-8">What Our Customers Say</h2>
                <!-- Testimonial Client Component -->
                <livewire:testimonial-client-component />


            </div>
        </section> --}}




    </div>


@endsection


@section('scripts')
    <!-- Include the bodymovin library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.6/lottie.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            console.log('Document loaded, initializing Lottie animation...');

            var animation = bodymovin.loadAnimation({
                container: document.getElementById('lottie-animation'),
                path: '{{ asset('assets/save-money.json') }}',
                renderer: 'svg', // Ensure renderer is set to 'svg'
                loop: true,
                autoplay: true,
                rendererSettings: {
                    preserveAspectRatio: 'xMidYMid meet' // Adjust if needed
                }
            });


            animation.addEventListener('DOMLoaded', function() {
                console.log('Animation loaded and ready to play.');
                animation.play();
            });
        });
    </script>
@endsection
