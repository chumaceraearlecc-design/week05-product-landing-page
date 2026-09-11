@props([
    'image',
    'name',
    'position',
    'review',
    'rating' => 5
])

<div class="relative bg-white p-7 rounded-2xl border border-[#eadfd5]
            hover:border-[#d6b98c]
            shadow-sm hover:shadow-[0_16px_32px_-18px_rgba(47,33,27,0.35)]
            hover:-translate-y-1
            transition duration-300
            overflow-hidden">

    <!-- Decorative quote mark -->
    <svg viewBox="0 0 24 24" width="64" height="64" fill="#f3e7da"
         class="absolute -top-2 -right-2" aria-hidden="true">
        <path d="M9.5 7C6.5 8.3 5 10.5 5 13.5c0 2 1.2 3.3 2.9 3.3 1.5 0 2.6-1.1 2.6-2.6 0-1.4-1-2.4-2.3-2.4-.2 0-.4 0-.6.1.3-1.6 1.6-2.9 3.2-3.6L9.5 7Zm8 0c-3 1.3-4.5 3.5-4.5 6.5 0 2 1.2 3.3 2.9 3.3 1.5 0 2.6-1.1 2.6-2.6 0-1.4-1-2.4-2.3-2.4-.2 0-.4 0-.6.1.3-1.6 1.6-2.9 3.2-3.6L17.5 7Z"/>
    </svg>

    <!-- Customer -->
    <div class="relative flex items-center gap-4 mb-5">

        <img
            src="{{ asset($image) }}"
            alt=""
            width="56"
            height="56"
            loading="lazy"
            class="w-14 h-14 rounded-full object-cover ring-2 ring-[#f3e7da]"
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
    <div class="flex items-center gap-1 mb-4 text-[#8b5e3c]"
         role="img"
         aria-label="Rated {{ $rating }} out of 5 stars">

        @for ($i = 1; $i <= 5; $i++)
            @if ($i <= $rating)
                <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor" aria-hidden="true">
                    <path d="M12 2.5l2.9 6.1 6.6.9-4.8 4.6 1.2 6.6L12 17.6l-5.9 3.1 1.2-6.6L2.5 9.5l6.6-.9L12 2.5Z"/>
                </svg>
            @else
                <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
                    <path d="M12 2.5l2.9 6.1 6.6.9-4.8 4.6 1.2 6.6L12 17.6l-5.9 3.1 1.2-6.6L2.5 9.5l6.6-.9L12 2.5Z"/>
                </svg>
            @endif
        @endfor

    </div>

    <!-- Review -->
    <p class="relative text-gray-600 leading-relaxed">
        &ldquo;{{ $review }}&rdquo;
    </p>

</div>