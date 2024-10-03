<div class="container mx-auto px-4 py-8">
    <h2 class="text-4xl font-bold text-center mb-8">Latest Blogs</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($blogs as $blog)
            <div class="bg-white p-6 rounded-lg shadow-lg">
                @if($blog->media_type === 'IMAGE')
                    <div class="w-full h-64 object-cover rounded-md shimmer">
                        <img src="{{ $blog->media_url }}" alt="{{ Str::limit($blog->caption, 50) }}"
                             class="w-full h-full object-cover rounded-md"
                             onload="this.parentElement.classList.add('media-loaded'); this.classList.add('loaded');">
                    </div>
                @elseif($blog->media_type === 'VIDEO')
                    <div class="w-full h-64 rounded-md shimmer">
                        <video controls class="w-full h-full rounded-md"
                               onloadeddata="this.parentElement.classList.add('media-loaded'); this.classList.add('loaded');">
                            <source src="{{ $blog->media_url }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                @endif
                <h3 class="text-xl font-semibold mb-2">{{ Str::limit($blog->caption, 50) }}</h3>
                <a href="{{ $blog->permalink }}" target="_blank" class="text-blue-500">Read more on Instagram</a>
            </div>
        @endforeach
    </div>

    <!-- Pagination Links -->
    <div class="mt-8">
        {{ $blogs->links() }}
    </div>
</div>
