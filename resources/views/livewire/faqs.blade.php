<div class="max-w-4xl mx-auto py-8">
    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
        @forelse ($faqs as $faq)
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-green-700 mb-4">{{ $faq->question }}</h2>
                    <p class="text-gray-700">{{ $faq->answer }}</p>
                </div>
            </div>
        @empty
            <p class="text-gray-700">No FAQs available at the moment.</p>
        @endforelse
    </div>

    <div class="mt-6">
        {{ $faqs->links() }}
    </div>
</div>
