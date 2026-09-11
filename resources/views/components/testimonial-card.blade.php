@props([
    'image',
    'name',
    'position',
    'review'
])

<div class="bg-white p-7 rounded-2xl border border-[#eadfd5]
            shadow-sm hover:shadow-lg hover:-translate-y-1
            transition duration-300">

    <!-- Customer -->
    <div class="flex items-center gap-4 mb-5">

        <img
            src="{{ asset($image) }}"
            alt="{{ $name }}"
            class="w-14 h-14 rounded-full object-cover"
        >

        <div>
            <h3 class="font-bold text-[#2f211b]">
                {{ $name }}
            </h3>

            <p class="text-sm text-gray-500">
                {{ $position }}
            </p>
        </div>

    </div>

    <!-- Stars -->
    <div class="text-[#8b5e3c] mb-4">
        ★★★★★
    </div>

    <!-- Review -->
    <p class="text-gray-600 leading-relaxed">
        "{{ $review }}"
    </p>

</div>