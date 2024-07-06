<div>
    <!-- financial-tips-component.blade.php -->
    <div class="p-6">
        <h2 class="text-2xl font-bold mb-4 text-green-700">Financial Tips and Tricks</h2>
        @foreach ($financialTips as $tip)
            <div class="mb-4 p-4 border rounded flex items-start">
                <div class="mr-4 text-green-700">
                    <i class="fas fa-lightbulb fa-2x"></i>
                </div>
                <div>
                    <h3 class="text-lg font-bold">{{ $tip->title }}</h3>
                    <p>{{ $tip->content }}</p>
                </div>
            </div>
        @endforeach

        {{ $financialTips->links() }}
    </div>

</div>
