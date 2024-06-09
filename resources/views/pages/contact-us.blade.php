@extends('layout')

@section('content')
<section class=" bg-purple-600 ">

    <div class="mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class=" text-white pl-10 ">
                <h1 class="text-2xl font-bold pt-20 leading-10  ">
                    Transform your beauty at the
                    comformt of your home with our
                    hair dressing manicure and pedicure experts</h1>

                <h4 class="text-white text-xl  pt-6 leading-relaxed ">Make orders for hair dressing, manicure
                    and pedicure <br> services today</h4>
                <div class="book-now-btn  pt-10 py-10">
                    <button class=" bg-white text-purple-600 font-semibold py-4 px-8  rounded-md    shadow-5">
                        Book now</button>
                </div>

            </div>

            <div class=" text-white p-6 rounded-lg">
                {{-- <img class="w-full mt-5 object-cover" src="{{ asset('images/header-home-image.png') }}" /> --}}

            </div>
        </div>





</section>
    <div class="text-center h-24 mt-20">
        <h2 class=" text-center text-purple-900 font-bold text-2xl">Contact Us Today</h2>
        <h4 class="p-4">Any questions or remarks just write us a message</h4>


    </div>




    <div class="container mx-auto px-4 py-4  mt-10">
        <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 gap-20">

            <div class="py-6 px-10 bg-purple-50 shadow-md rounded ">
                <h4 class=" font-bold text-lg p-6">Contact Information</h4>
                <div class="flex justify-start py-4 px-6">
                    <svg class="w-6 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="w-6 h-6">
                        <path strokeLinecap="round" strokeLinejoin="round" d="M14.25 9.75v-4.5m0 4.5h4.5m-4.5 0 6-6m-3 18c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 0 1 4.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 0 0-.38 1.21 12.035 12.035 0 0 0 7.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 0 1 1.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 0 1-2.25 2.25h-2.25Z" />
                      </svg>


                    <p class="text-base px-8">Contact Number: +256751547654</p>

                </div>
                <div class="flex justify-start py-4 px-6">
                    <svg class="w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="w-6 h-6">
                        <path strokeLinecap="round" strokeLinejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                      </svg>


                    <p class="text-base px-8">Email Address: esoptron@gmail.com</p>

                </div>
                <div class="flex justify-start py-4 px-6">
                    <svg class="w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="w-6 h-6">
                        <path strokeLinecap="round" strokeLinejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        <path strokeLinecap="round" strokeLinejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                      </svg>



                    <p class="text-base px-8">Location: Mperere</p>

                </div>
                <div class="flex justify-start py-4 px-6">
                    <svg class="w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="w-6 h-6">
                        <path strokeLinecap="round" strokeLinejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        <path strokeLinecap="round" strokeLinejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                      </svg>



                    <p class="text-base px-8">Twitter: esoptron@salon</p>

                </div>
                <div class="flex justify-start py-4 px-6">
                    <svg class="w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="w-6 h-6">
                        <path strokeLinecap="round" strokeLinejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        <path strokeLinecap="round" strokeLinejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                      </svg>



                    <p class="text-base px-8">Instagram: esoptronsalon</p>

                </div>

            </div>
            @livewire('contact-form-component')

        </div>
    </div>
@endsection
