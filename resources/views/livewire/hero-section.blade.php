<div>
    <section class="relative z-30 bg-cover bg-center h-96" style="background-image: url('{{ asset('storage/' . str_replace('\\', '/', $backgroundImage)) }}');" id="dynamic-section">
        <div class="container mx-auto px-4 h-full flex items-center justify-center">
            <div class="relative text-center">
                <h1 class="dynamic-title text-4xl font-bold mb-4">{{ $title }}</h1>
                <p class="dynamic-subtitle text-xl mb-8">{{ $sub_title }}</p>
                <a href="#more" class="inline-block bg-green-700 text-white font-semibold py-3 px-6 rounded-md shadow-lg hover:bg-gray-100 hover:text-green-700">Learn More</a>
            </div>
        </div>
    </section>


</div>

<script>

document.addEventListener('DOMContentLoaded', function () {
    const section = document.getElementById('dynamic-section');
    const imageUrl = section.style.backgroundImage.slice(5, -2); // Extract URL from style

    // Create an image element to load the background image
    const img = new Image();
    img.src = imageUrl;

    // When the image is loaded, calculate its brightness
    img.onload = function () {
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

        const titleElement = section.querySelector('.dynamic-title');
        const subtitleElement = section.querySelector('.dynamic-subtitle');

        // Adjust the heading and subheading colors based on brightness
        if (brightness > 128) { // bright image
            titleElement.classList.add('text-green-700');
            titleElement.classList.remove('text-white');
            subtitleElement.classList.add('text-black');
            subtitleElement.classList.remove('text-white');
        } else { // dark image
            titleElement.classList.add('text-white');
            titleElement.classList.remove('text-green-700');
            subtitleElement.classList.add('text-white');
            subtitleElement.classList.remove('text-black');
        }
    }
});


</script>
