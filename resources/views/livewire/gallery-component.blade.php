<div class="w-full overflow-x-hidden">
    <div class="relative w-full h-64 overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-full flex overflow-x-auto scrolling-touch">
            @foreach($galleries as $gallery)
                <div class="flex-shrink-0 w-full md:w-1/3 lg:w-1/4 p-2">
                    <?php
                    dump( $gallery->media_path->download->link);
                   ?>

                    @if($gallery->media_type == 'image')
               <img src="{{ asset('storage/' . $gallery->media_path) }}" class="w-full h-64 object-cover rounded shadow-lg">
                    @elseif($gallery->media_type == 'video')
                        <video class="w-full h-64 object-cover rounded shadow-lg" controls>
                            <source src="{{ asset('storage/' . $gallery->media_path) }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</div>

{{-- <style>
    .scrolling-touch {
        animation: scroll-horizontal 20s linear ;
    }

    @keyframes scroll-horizontal {
        from { transform: translateX(0); }
        to { transform: translateX(-100%); }
    }
</style> --}}
