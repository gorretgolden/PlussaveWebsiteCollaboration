<div class="p-4 sm:p-6 md:p-8 lg:p-10 bg-gray-100">
    <div class="container mx-auto">
        <div class="overflow-x-auto whitespace-nowrap">
            <div class="inline-flex space-x-4">
                @foreach($testimonials as $testimonial)
                    <div class="w-80 p-4 bg-white rounded-lg shadow-lg">
                        <div class="mb-4">
                            @if($testimonial->media_type === 'video')
                                <video class="w-full rounded-lg" controls>
                                    <source src="{{ $testimonial->media_url }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            @elseif($testimonial->media_type === 'image')
                                <img class="w-full rounded-lg" src="{{ $testimonial->media_url }}" alt="Testimonial Image">
                            @endif
                        </div>
                        <div class="flex items-center mb-4">
                            <img class="w-12 h-12 rounded-full" src="{{ $testimonial->client_image }}" alt="{{ $testimonial->client_name }}">
                            <div class="ml-4">
                                <h3 class="font-semibold text-gray-800">{{ $testimonial->client_name }}</h3>
                            </div>
                        </div>
                        <p class="text-gray-600">{{ $testimonial->testimonial }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const container = document.querySelector('.overflow-x-auto');
        const scrollAmount = 1; // Amount to scroll each interval
        const scrollSpeed = 30; // Speed of scroll (lower is faster)

        function autoScroll() {
            container.scrollBy({
                left: scrollAmount,
                behavior: 'smooth'
            });
            if (container.scrollLeft + container.clientWidth >= container.scrollWidth) {
                container.scrollLeft = 0;
            }
        }

        setInterval(autoScroll, scrollSpeed);
    });
</script>
