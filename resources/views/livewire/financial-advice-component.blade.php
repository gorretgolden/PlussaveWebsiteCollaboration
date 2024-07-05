<!-- financial-advice-component.blade.php -->
<div class="p-6">
    <h2 class="text-2xl font-bold mb-4">Financial Advice</h2>
    @foreach($advice as $item)
        <div class="bg-white shadow-md rounded p-4 mb-4">
            <h3 class="text-xl font-semibold">{{ $item->title }}</h3>
            <p class="text-gray-700">{{ $item->content }}</p>
        </div>
    @endforeach
</div>
