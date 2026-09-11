@props([
    'name',
    'price',
    'features' => [],
    'featured' => false
])

<div class="relative bg-white p-8 rounded-3xl border
            {{ $featured
                ? 'border-[#8b5e3c] shadow-xl'
                : 'border-[#eadfd5] shadow-sm'
            }}
            hover:-translate-y-2
            hover:shadow-xl
            transition duration-300">

    @if ($featured)
        <span class="absolute -top-4 left-1/2 -translate-x-1/2
                     bg-[#8b5e3c] text-white
                     px-4 py-1 rounded-full
                     text-sm font-semibold">
            Most Popular
        </span>
    @endif


    <!-- Package Name -->
    <h3 class="text-2xl font-bold text-[#2f211b]">
        {{ $name }}
    </h3>


    <!-- Price -->
    <div class="my-6">

        <span class="text-4xl font-bold text-[#2f211b]">
            ₱{{ $price }}
        </span>

        <p class="text-sm text-gray-500 mt-1">
            Sample package price
        </p>

    </div>


    <!-- Features -->
    <ul class="space-y-4 mb-8">

        @foreach ($features as $feature)

            <li class="flex items-start gap-3 text-gray-600">

                <span class="text-[#8b5e3c] font-bold">
                    ✓
                </span>

                <span>
                    {{ $feature }}
                </span>

            </li>

        @endforeach

    </ul>


    <!-- Button -->
    <a
        href="#contact"
        class="block w-full text-center
               bg-[#2f211b]
               text-white
               py-3
               rounded-xl
               font-semibold
               hover:bg-[#8b5e3c]
               transition duration-300"
    >
        Order Now
    </a>

</div>