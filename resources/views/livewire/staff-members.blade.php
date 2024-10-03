<div>
    <section class="container mx-auto px-4 py-12">
        <h4 class="text-2xl mb-4 ml-3">Staff Members</h4>
        <div class="flex flex-wrap">
            @foreach ($staffMembers as $staffMember)
                <div class="w-full md:w-1/4 p-4">
                    <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                        <div class="w-48 h-64 mx-auto mb-4">
                            <img src="{{ asset('storage/' . $staffMember->image) }}" alt="{{ $staffMember->name }}"
                                 class="w-full h-full object-cover rounded-sm">
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">{{ $staffMember->name }}</h3>
                        <p class="text-green-700">{{ $staffMember->position }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mt-8 flex justify-end">
            {{ $staffMembers->links() }}
        </div>
    </section>
</div>
