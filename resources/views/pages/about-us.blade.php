@extends('layout')

@section('content')
    <!-- Hero Section -->
    <livewire:hero-section type="about" />

    <!-- About Us -->
    <section class="py-20 bg-white">
        <div class="mx-auto px-20">
            <div class="flex flex-wrap items-center justify-center">
                <div class="w-full md:w-1/2 p-4">
                    <h2 class="text-2xl font-bold text-green-700 mb-8">{{ $aboutUs->background_title }}</h2>
                    <p class="text-gray-600 mb-4">{{ $aboutUs->background_info }}</p>
                </div>
                <div class="w-full md:w-1/2 p-4">
                    <img src="{{ asset('storage/' . $aboutUs->image) }}" alt="About Us Image" class="rounded-lg ">
                </div>
            </div>
        </div>
    </section>

    <!-- Our Mission Section -->
    <section class="py-20 bg-gray-100">
        <div class="mx-auto px-20 ">
            <h2 class="text-2xl font-bold text-center mb-8">Our Mission</h2>
            <p class="text-gray-600 text-center mb-8">{{ $aboutUs->mision }}</p>
            <div class="flex flex-wrap justify-center">
                <div class="w-full md:w-1/3 p-4">
                    <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                        <div class="mb-4 text-green-700">
                            <i class="fas fa-award fa-3x"></i>
                        </div>
                        <h3 class="text-2xl font-semibold text-gray-800 mb-4">Quality Service</h3>
                        <p class="text-gray-600">Our experienced professionals provide top-notch services tailored to your individual needs.</p>
                    </div>
                </div>
                <div class="w-full md:w-1/3 p-4">
                    <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                        <div class="mb-4 text-green-700">
                            <i class="fas fa-leaf fa-3x"></i>
                        </div>
                        <h3 class="text-2xl font-semibold text-gray-800 mb-4">Eco-Friendly Products</h3>
                        <p class="text-gray-600">We use products that are kind to your skin and the environment.</p>
                    </div>
                </div>
                <div class="w-full md:w-1/3 p-4">
                    <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                        <div class="mb-4 text-green-700">
                            <i class="fas fa-heart fa-3x"></i>
                        </div>
                        <h3 class="text-2xl font-semibold text-gray-800 mb-4">Customer Satisfaction</h3>
                        <p class="text-gray-600">Your satisfaction is our priority. We strive to make every visit enjoyable and relaxing.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Vision Section -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold text-center mb-8">Our Vision</h2>
            <p class="text-gray-600 text-center mb-8">{{ $aboutUs->vision }}</p>
            <div class="flex flex-wrap justify-center">
                <div class="w-full md:w-1/3 p-4">
                    <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                        <div class="mb-4 text-green-700">
                            <i class="fas fa-handshake fa-3x"></i>
                        </div>
                        <h3 class="text-2xl font-semibold text-gray-800 mb-4">Partnerships</h3>
                        <p class="text-gray-600">Building strong partnerships to expand our reach and impact.</p>
                    </div>
                </div>
                <div class="w-full md:w-1/3 p-4">
                    <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                        <div class="mb-4 text-green-700">
                            <i class="fas fa-lightbulb fa-3x"></i>
                        </div>
                        <h3 class="text-2xl font-semibold text-gray-800 mb-4">Innovation</h3>
                        <p class="text-gray-600">Driving innovation to meet future challenges and opportunities.</p>
                    </div>
                </div>
                <div class="w-full md:w-1/3 p-4">
                    <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                        <div class="mb-4 text-green-700">
                            <i class="fas fa-users fa-3x"></i>
                        </div>
                        <h3 class="text-2xl font-semibold text-gray-800 mb-4">Community</h3>
                        <p class="text-gray-600">Empowering our community through education and support.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Team Section -->
    <section class="py-20 bg-gray-100">
        <div class=" mx-auto px-4">
            <h2 class="text-2xl font-bold text-center text-gray-800 mb-8">Our Team</h2>

            <!-- Board Members -->

            <livewire:board-members />

            <!-- Staff Members -->
            <section >

                <livewire:staff-members />
            </section>

            <!-- Executive Members -->
            {{-- <section class="container mx-auto px-4 py-12">
                <h4 class="text-2xl mb-4 ml-3">Executive Members</h4>
                <div class="flex flex-wrap">
                    @foreach ($executiveMembers as $executiveMember)
                        <div class="w-full md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                                <div class="w-48 h-64 mx-auto mb-4">
                                    <img src="{{ asset('storage/' . $executiveMember->image) }}" alt="{{ $executiveMember->name }}"
                                         class="w-full h-full object-cover rounded-sm">
                                </div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-2">{{ $executiveMember->name }}</h3>
                                <p class="text-green-700">{{ $executiveMember->position }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="mt-8 flex justify-end">
                    {{ $executiveMembers->links() }}
                </div>
            </section> --}}

        </div>
    </section>


    <!--Gallery-->
    {{-- <livewire:gallery-component /> --}}

@endsection
