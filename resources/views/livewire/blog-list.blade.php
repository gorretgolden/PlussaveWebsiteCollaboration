<div class="container mx-auto px-4 py-8">
    <h2 class="text-4xl font-bold text-center mb-8">Latest Blogs</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($blogs as $blog)
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-semibold mb-2">{{ $blog->title }}</h3>
                <p class="text-gray-700 mb-4">{{ $blog->content }}</p>
                @if($blog->media_type === 'image')
                    <img src="{{ asset('storage/' . $blog->media_path) }}" alt="{{ $blog->title }}" class="w-full h-64 object-cover rounded-md">
                @elseif($blog->media_type === 'video')
                    <video controls class="w-full h-64 rounded-md">
                        <source src="{{ asset('storage/' . $blog->media_path) }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                @endif
            </div>
        @endforeach
    </div>

    <!-- Pagination Links -->
    <div class="mt-8">
        {{ $blogs->links() }}
    </div>
</div>
