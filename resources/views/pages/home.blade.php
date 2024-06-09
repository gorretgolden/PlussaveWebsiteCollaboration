@extends('layout')

@section('title', 'Home')

@section('content')


    <!-- Hero Section in Blade Template -->
    <div>
        @livewire('carousel')

    </div>
    <br>

      <!--service types-->
      <section>

        @livewire('service-types')

      </section>


        <!--why choose us-->
        <section class="py-4 bg-white">

            <div class="container mx-auto px-4 mb-10">
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
                        <div
                            class="w-16 h-16 flex-shrink-0 bg-green-700 text-white rounded-full flex items-center justify-center">

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
                        <div
                            class="w-16 h-16 flex-shrink-0 bg-green-700 text-white rounded-full flex items-center justify-center">
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
                        <div
                            class="w-16 h-16 flex-shrink-0 bg-green-700 text-white rounded-full flex items-center justify-center">
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
            </div>
        </section>


    <div class="container mx-auto py-16 px-6">
        <div class="flex flex-col md:flex-row items-center justify-between">
            <!-- Image on the left -->
            <div class="md:w-1/2 mb-6 md:mb-0">
                <img class="w-full h-auto rounded-lg" src="https://img.freepik.com/free-photo/business-colleagues-studying-reports_74855-1139.jpg?t=st=1717752645~exp=1717756245~hmac=726d4428d263476c46e1f6ebe2d0a089d75a928b2c7b7cf01214a58afe46e224&w=1800" alt="Image">
            </div>
            <!-- Title and text on the right -->
            <div class="md:w-1/2 md:ml-6 mb-5 p-6" >
                <h2 class="text-3xl font-bold mb-4">Fintech Insights</h2>
                <p class="text-gray-700 leading-relaxed mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus scelerisque felis vel nibh lacinia placerat. Proin eget dolor ultrices, consectetur magna eget, vehicula sapien. Donec ac ultricies ligula. Integer ut risus leo.</p>
                <p class="text-gray-700 leading-relaxed">Nam ultricies, ex sit amet aliquet dapibus, magna nulla tempor tortor, ut consectetur odio erat eget turpis. Suspendisse potenti. Pellentesque commodo est id mauris rhoncus, ut vehicula arcu pretium.</p>
                <p class="text-gray-700 leading-relaxed mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus scelerisque felis vel nibh lacinia placerat. Proin eget dolor ultrices, consectetur magna eget, vehicula sapien. Donec ac ultricies ligula. Integer ut risus leo.</p>

            </div>
        </div>
    </div>


    <!--How we give loans-->

    <section class="py-12 bg-gray-100">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center text-gray-800 mb-12">How We Give Loans</h2>
            <div class="relative">
                <!-- Step 1 -->
                <div class="flex items-center mb-12">
                    <div class="step-circle">1</div>
                    <div class="step-content ml-8">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Apply Online</h3>
                        <p class="text-gray-600">Fill out our simple online application form with your personal and financial details.</p>
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
                        <p class="text-gray-600">Once verified, your loan is approved and you receive the funds in your account.</p>
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
    </section>


    <div class="content-wrapper">






        <div class="container mx-auto py-16 px-6">
            <div class="flex flex-col md:flex-row items-center justify-between">
              <!-- Title and text on the right -->
              <div class="md:w-1/2 md:ml-6 mb-5 p-6" >
                <h2 class="text-3xl font-bold mb-4">Fintech Insights</h2>
                <p class="text-gray-700 leading-relaxed mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus scelerisque felis vel nibh lacinia placerat. Proin eget dolor ultrices, consectetur magna eget, vehicula sapien. Donec ac ultricies ligula. Integer ut risus leo.</p>
                <p class="text-gray-700 leading-relaxed">Nam ultricies, ex sit amet aliquet dapibus, magna nulla tempor tortor, ut consectetur odio erat eget turpis. Suspendisse potenti. Pellentesque commodo est id mauris rhoncus, ut vehicula arcu pretium.</p>
                <p class="text-gray-700 leading-relaxed mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus scelerisque felis vel nibh lacinia placerat. Proin eget dolor ultrices, consectetur magna eget, vehicula sapien. Donec ac ultricies ligula. Integer ut risus leo.</p>

            </div>
                <div class="md:w-1/2 mb-6 md:mb-0">
                    <img class="w-full h-auto rounded-lg" src="https://img.freepik.com/free-photo/business-colleagues-studying-reports_74855-1139.jpg?t=st=1717752645~exp=1717756245~hmac=726d4428d263476c46e1f6ebe2d0a089d75a928b2c7b7cf01214a58afe46e224&w=1800" alt="Image">
                </div>

            </div>
        </div>



        <!-- Apply for Loan Section -->
        <section class="py-16 bg-white">
            <div class="container mx-auto">
                <h2 class="text-3xl font-bold text-center text-green-900 mb-8">Apply for a Loan</h2>
                @livewire('loan-application-form')
            </div>
        </section>


        <!-- Testimonial Section -->
        <section class="bg-green-700 py-16">
            <div class="container mx-auto">
                <h2 class="text-3xl font-bold text-center text-white mb-8">What Our Customers Say</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Testimonial 1 -->
                    <div class="bg-white p-6 rounded-lg shadow-md hover:border-green-600 transition duration-300">
                        <img src="https://img.freepik.com/free-photo/confident-african-businesswoman-smiling-closeup-portrait-jobs-career-campaign_53876-143280.jpg?t=st=1717592869~exp=1717596469~hmac=56882dbb7e44dba15a2eca030e85af6b79dc109bd3251d5751e0902998ca3201&w=2000"
                            alt="Client 1" class="rounded-full h-16 w-16 flex-shrink-0 mr-4">
                        <div class="p-3">
                            <p class="text-green-800 mb-4">"Finetech helped me to manage my finances efficiently. I highly
                                recommend their services."</p>
                            <p class="text-green-700 font-semibold">- John Doe</p>
                        </div>
                    </div>
                    <!-- Testimonial 2 -->
                    <div class="bg-white p-6 rounded-lg shadow-md hover:border-green-600 transition duration-300">
                        <img src="https://img.freepik.com/free-photo/confident-african-businesswoman-smiling-closeup-portrait-jobs-career-campaign_53876-143280.jpg?t=st=1717592869~exp=1717596469~hmac=56882dbb7e44dba15a2eca030e85af6b79dc109bd3251d5751e0902998ca3201&w=2000"
                            alt="Client 2" class="rounded-full h-16 w-16 flex-shrink-0 mr-4">
                        <div>
                            <p class="text-green-800 mb-4">"Applying for a loan was so easy with Finetech. I got the money
                                I needed quickly without any hassle."</p>
                            <p class="text-green-700 font-semibold">- Jane Smith</p>
                        </div>
                    </div>
                    <!-- Testimonial 3 -->
                    <div class="bg-white p-6 rounded-lg shadow-md hover:border-green-600 transition duration-300">
                        <img src="https://img.freepik.com/free-photo/confident-african-businesswoman-smiling-closeup-portrait-jobs-career-campaign_53876-143280.jpg?t=st=1717592869~exp=1717596469~hmac=56882dbb7e44dba15a2eca030e85af6b79dc109bd3251d5751e0902998ca3201&w=2000"
                            alt="Client 3" class="rounded-full h-16 w-16 flex-shrink-0 mr-4">
                        <div>
                            <p class="text-green-800 mb-4">"I've been using Finetech for a while now and I'm impressed with
                                their commitment to customer satisfaction."</p>
                            <p class="text-green-700 font-semibold">- David Johnson</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>




    </div>


@endsection
