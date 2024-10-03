
<div class="max-w-6xl mx-auto py-8 overflow-hidden">


    <div id="testimonial-carousel" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 transition-transform duration-1000">
        @if($clients && count($clients))
            @foreach($clients as $client)
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="flex items-center mb-4">
                        <img src="{{ asset('storage/' . str_replace('\\', '/', $client['client_image'])) }}" alt="{{ $client['name'] }}" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900">{{ $client['name'] }}</h3>
                            <p class="text-gray-600">Client</p>
                        </div>
                    </div>
                    <p class="text-gray-700">{{ $client['testimonial'] }}</p>
                </div>
            @endforeach
        @else
            <p>No testimonials available.</p>
        @endif
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const carousel = document.getElementById('testimonial-carousel');
        const interval = 60000; // 1 minute
        let index = 0;
        const numItems = {{ $clients ? count($clients) : 0 }};
        const itemsPerSlide = 4; // Number of items to show per slide
        const totalSlides = Math.ceil(numItems / itemsPerSlide);

        function scrollTestimonials() {
            index = (index + 1) % totalSlides;
            const transformValue = -100 * index;
            carousel.style.transform = `translateX(${transformValue}%)`;
        }

        if (numItems > 0) {
            setInterval(scrollTestimonials, interval);
        }
    });
</script>
