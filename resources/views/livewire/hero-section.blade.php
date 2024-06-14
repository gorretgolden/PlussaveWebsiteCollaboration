<div>

    <section class="relative bg-cover bg-center  h-96" style="background-image: url('{{ asset('storage/' . str_replace('\\', '/', $backgroundImage)) }}');">
        {{-- <div class="absolute inset-0 bg-green-700 bg-opacity-75"></div> --}}
        <div class="container mx-auto px-4 h-full flex items-center justify-center">
            <div class="relative text-center text-white">
                <h1 class="text-4xl font-bold mb-4 slide-right">{{ $title }}</h1>
                <p class="text-xl mb-8">{{ $sub_title }}</p>
                <a href="#more" class="inline-bloc bg-green-700 text-whitefont-semibold py-3 px-6 rounded-md shadow-lg hover:bg-gray-100">Learn More</a> <!-- Updated button text color to green -->
            </div>
        </div>
    </section>





</div>
