<!-- financial-tips-component.blade.php -->
<div class="p-6">
    <h2 class="text-2xl font-bold mb-4">Financial Tips and Tricks</h2>
    @foreach($tips as $tip)
        <div class="bg-white shadow-md rounded p-4 mb-4">
            <h3 class="text-xl font-semibold">{{ $tip->title }}</h3>
            <p class="text-gray-700">{{ $tip->content }}</p>
        </div>
    @endforeach
</div>
