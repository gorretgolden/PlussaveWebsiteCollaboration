<div
>
<!-- loan-calculator.blade.php -->

<div class="flex justify-center items-center min-h-screen ">
    <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-lg">
        <h2 class="text-2xl font-bold mb-6  text-gray-800 ">Loan Calculator</h2>


        <form wire:submit.prevent="calculateLoan">
            <div class="mb-6">
                <label for="total_amount" class="block text-gray-700 font-semibold mb-2">Total Amount (UGX)</label>
                <input wire:model.lazy="totalAmount" type="text" id="total_amount" name="total_amount" class="form-input w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent">
                @error('totalAmount') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <div class="mb-6">
                <label for="down_payment" class="block text-gray-700 font-semibold mb-2">Down Payment (UGX)</label>
                <input wire:model.lazy="downPayment" type="text" id="down_payment" name="down_payment" class="form-input w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent">
                @error('downPayment') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <div class="mb-6">
                <label for="interest_rate" class="block text-gray-700 font-semibold mb-2">Interest Rate (%)</label>
                <input wire:model.lazy="interestRate" type="text" id="interest_rate" name="interest_rate" class="form-input w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent">
                @error('interestRate') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <div class="mb-6">
                <label for="amortization_period" class="block text-gray-700 font-semibold mb-2">Amortization Period (years)</label>
                <input wire:model.lazy="amortizationPeriod" type="text" id="amortization_period" name="amortization_period" class="form-input w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent">
                @error('amortizationPeriod') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <button type="submit" class="bg-green-700 hover:bg-green-800 text-white font-bold py-2 px-4 rounded w-full">Calculate</button>
        </form>

        @if($monthlyPayment)
        <div class="bg-white shadow-lg rounded-lg p-6 mt-6 text-center">
            <h3 class="text-lg font-bold mb-2">Monthly Payment</h3>
            <p class="text-2xl font-bold text-green-700">UGX {{ number_format($monthlyPayment, 2) }}</p>
        </div>
        @endif
    </div>
</div>

</div>
