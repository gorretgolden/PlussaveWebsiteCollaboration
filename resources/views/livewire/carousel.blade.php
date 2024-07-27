<div class="relative w-full">
    <div class="relative h-80 overflow-hidden rounded-bg-lg md:h-[500px]">
        @foreach ($images as $index => $image)
            <div class="{{ $index === $currentIndex ? 'opacity-100 z-10' : 'opacity-0 z-0' }} transition-opacity duration-1000 ease-in-out absolute inset-0 bg-cover bg-center"
                style="background-image: url('{{ asset('storage/' . str_replace('\\', '/', $image->image_path)) }}');"
                data-index="{{ $index }}"
                data-image-url="{{ asset('storage/' . str_replace('\\', '/', $image->image_path)) }}">

                <!-- Semi-transparent black overlay -->
                <div class="absolute inset-0 bg-black opacity-50"></div>
                <div class="absolute inset-0 flex flex-col items-center justify-center text-center p-4">
                    <h1 class="carousel-title text-2xl md:text-4xl font-bold mb-2 transition-opacity duration-1000 ease-in-out typing-effect"
                        data-title="{{ $image->title }}">{{ $image->title }}</h1>
                    <p class="text-sm md:text-lg text-white mb-4 p-2">{{ $image->description }}</p>
                    <a href="{{ route('new-member') }}"
                        class="bg-green-600 text-white px-4 py-2 rounded-full shadow-md hover:bg-green-700 transition-colors duration-300">Become
                        a member</a>
                </div>
            </div>
        @endforeach
    </div>
</div>





<script>
    document.addEventListener('DOMContentLoaded', function() {
        const slides = document.querySelectorAll('[data-image-url]');
        let currentIndex = 0;
        const slideInterval = 5000;

        function updateSlide(index) {
            slides.forEach((slide, idx) => {
                if (idx === index) {
                    slide.classList.add('opacity-100', 'z-10');
                    slide.classList.remove('opacity-0', 'z-0');
                } else {
                    slide.classList.add('opacity-0', 'z-0');
                    slide.classList.remove('opacity-100', 'z-10');
                }
            });

            const currentSlide = slides[index];
            const imageUrl = currentSlide.dataset.imageUrl;

            // Create an image element to load the background image
            const img = new Image();
            img.src = imageUrl;

            // When the image is loaded, calculate its brightness
            img.onload = function() {
                const canvas = document.createElement('canvas');
                const ctx = canvas.getContext('2d');

                canvas.width = img.width;
                canvas.height = img.height;
                ctx.drawImage(img, 0, 0, img.width, img.height);

                const imageData = ctx.getImageData(0, 0, canvas.width, canvas.height);
                const data = imageData.data;
                let r, g, b, avg;
                let colorSum = 0;

                for (let x = 0, len = data.length; x < len; x += 4) {
                    r = data[x];
                    g = data[x + 1];
                    b = data[x + 2];
                    avg = Math.floor((r + g + b) / 3);
                    colorSum += avg;
                }

                const brightness = Math.floor(colorSum / (img.width * img.height));

                const titleElement = currentSlide.querySelector('.carousel-title');

                // Adjust the heading color based on brightness
                if (brightness > 128) { // bright image
                    titleElement.classList.add('text-black');
                    titleElement.classList.remove('text-white');
                } else { // dark image
                    titleElement.classList.add('text-white');
                    titleElement.classList.remove('text-black');
                }

                // Ensure the title is visible and apply typing effect
                titleElement.style.opacity = '1';
                applyTypingEffect(titleElement);
            }
        }

        function applyTypingEffect(element) {
            const text = element.dataset.title;
            element.textContent = ''; // Clear the element's current text

            let index = 0;

            function type() {
                if (index < text.length) {
                    element.textContent += text.charAt(index);
                    index++;
                    setTimeout(type, 100); // Adjust typing speed as needed
                }
            }
            type();
        }

        function nextSlide() {
            currentIndex = (currentIndex + 1) % slides.length;
            updateSlide(currentIndex);
        }

        updateSlide(currentIndex);
        setInterval(nextSlide, slideInterval);
    });
</script>
