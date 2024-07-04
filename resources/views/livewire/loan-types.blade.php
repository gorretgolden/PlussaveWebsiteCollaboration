<div class="container mx-auto px-4">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach($loanTypes as $loanType)
            <div class="bg-white p-6 rounded-lg shadow-lg transition transform hover:-translate-y-1">
                <img src="{{ $loanType->image }}" alt="{{ $loanType->title }}" class="w-full h-48 object-cover object-center mb-4 rounded">
                <h2 class="text-xl font-semibold mb-2">{{ $loanType->title }}</h2>
                <p class="text-gray-700">{{ $loanType->description }}</p>
            </div>
        @endforeach
    </div>
</div>
