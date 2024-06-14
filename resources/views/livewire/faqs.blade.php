<div class="max-w-4xl mx-auto py-8">
    <h1 class="text-3xl font-bold mb-4">Frequently Asked Questions</h1>
    @foreach ($faqs as $faq)
        <div class="mb-4 p-4 bg-white rounded shadow">
            <h2 class="text-xl font-semibold">{{ $faq->question }}</h2>
            <p class="mt-2">{{ $faq->answer }}</p>
        </div>
    @endforeach
</div>
