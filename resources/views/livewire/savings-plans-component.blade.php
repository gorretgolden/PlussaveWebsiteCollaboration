<!-- savings-plans-component.blade.php -->
<div class="p-6">
    <h2 class="text-2xl font-bold mb-4">Savings Plans</h2>
    @foreach($plans as $plan)
        <div class="bg-white shadow-md rounded p-4 mb-4">
            <h3 class="text-xl font-semibold">{{ $plan->name }}</h3>
            <p class="text-gray-700">{{ $plan->description }}</p>
        </div>
    @endforeach
</div>
