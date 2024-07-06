<div class="mx-auto px-20 py-16">
    <div class="flex flex-col md:flex-row items-center justify-between">
        <!-- Content on the left -->
        <div class="md:w-1/2 md:ml-6 mb-5 p-6">
            @if ($loanSection)
                <h2 class="text-3xl font-bold mb-6 text-green-700">{{ $loanSection->title }}</h2>
                <p class="text-gray-700 leading-relaxed mb-6">{{ $loanSection->description }}</p>
                <button class="bg-green-700 text-white py-2 px-4 rounded font-semibold hover:bg-white hover:text-green-700 hover:border-green-700 transition duration-300">
                    Apply for a Loan
                </button>
            @endif
        </div>
        <!-- Image on the right -->
        <div class="md:w-1/2 mb-6 md:mb-0">
            @if ($loanSection)
                <img class="w-full h-auto rounded-lg" src="{{ asset('storage/'.$loanSection->image_path) }}" alt="Image">
            @endif
        </div>
    </div>
</div>
