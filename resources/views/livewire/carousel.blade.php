<div class="relative w-full" >
    <div class="relative h-80 overflow-hidden rounded-bg-lg md:h-[500px]">
        @foreach($images as $index => $image)
            <div class="{{ $index === $currentIndex ? 'opacity-100 z-10' : 'opacity-0 z-0' }} transition-opacity duration-1000 ease-in-out absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('storage/' . str_replace('\\', '/', $image->image_path)) }}');">
                <div class="absolute inset-0  flex flex-col items-center justify-center text-center p-4">
                    <h1 class="carousel-title text-2xl md:text-4xl font-bold mb-2 text-white transition-opacity duration-1000 ease-in-out opacity-0" data-title="{{ $image->title }}"></h1>
                    <p class="text-sm md:text-lg text-white mb-4 p-2">{{ $image->description }}</p>
                    <a  href="{{route('new-member')}}" class="bg-green-600 text-white px-4 py-2 rounded-full shadow-md hover:bg-green-700 transition-colors duration-300">Become a member</a>
                </div>
            </div>
        @endforeach
    </div>
</div>

<script>
    document.addEventListener('livewire:load', function () {
        let typingSpeed = 100;

        function typeEffect(element, text, speed) {
            let i = 0;
            function typeWriter() {
                if (i < text.length) {
                    element.innerHTML += text.charAt(i);
                    i++;
                    setTimeout(typeWriter, speed);
                }
            }
            element.innerHTML = '';
            typeWriter();
        }

        function runTypingEffect() {
            let currentTitleElement = document.querySelector('.opacity-100 .carousel-title');
            if (currentTitleElement) {
                let text = currentTitleElement.getAttribute('data-title');
                currentTitleElement.classList.add('opacity-100'); // Show the title with fade-in effect
                setTimeout(() => { typeEffect(currentTitleElement, text, typingSpeed); }, 300);
            }
        }

        runTypingEffect(); // Run typing effect for the first title

        setInterval(function () {
            @this.call('next');
            setTimeout(runTypingEffect, 3000); // Add a delay to ensure the slide has changed
        }, 8000); // Change slide every 4 seconds
    });
</script>
