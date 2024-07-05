<div >
    <!-- savings-plans-component.blade.php -->
<div class="p-6">
    <h2 class="text-2xl font-bold mb-4">Savings Plans</h2>
    @foreach($savingsPlans as $plan)
    <div class="mb-4 p-4 border rounded flex items-start">
        <div class="mr-4 text-green-700">
            <i class="fas fa-piggy-bank fa-2x"></i>
        </div>
        <div>
            <h3 class="text-lg font-bold">{{ $plan->title }}</h3>
            <p>{{ $plan->description }}</p>
        </div>
    </div>
@endforeach

    {{ $savingsPlans->links() }}
</div>

</div>
