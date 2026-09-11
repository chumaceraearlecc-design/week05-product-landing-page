@props([
    'icon',
    'title',
    'description'
])

<div class="bg-white p-7 rounded-2xl border border-[#eadfd5]
            shadow-sm hover:shadow-lg hover:-translate-y-1
            transition duration-300">

    <div class="w-14 h-14 bg-[#f3e7da] rounded-xl
                flex items-center justify-center text-2xl mb-5">
        {{ $icon }}
    </div>

    <h3 class="text-xl font-bold text-[#2f211b] mb-3">
        {{ $title }}
    </h3>

    <p class="text-gray-600 leading-relaxed">
        {{ $description }}
    </p>

</div>