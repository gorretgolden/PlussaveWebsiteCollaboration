<div >

    <!-- financial-advice-component.blade.php -->
<div class="p-6">
    <h2 class="text-2xl font-bold mb-4 text-green-700">Financial Advice</h2>
    @foreach($financialAdvice as $advice)
    <div class="mb-4 p-4 border rounded flex items-start">
        <div class="mr-4 text-green-700">
            <i class="fas fa-comments fa-2x"></i>
        </div>
        <div>
            <h3 class="text-lg font-bold">{{ $advice->title }}</h3>
            <p>{{ $advice->content }}</p>
        </div>
    </div>
@endforeach

    {{ $financialAdvice->links() }}
</div>

</div>
