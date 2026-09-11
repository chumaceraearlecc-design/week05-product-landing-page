@props([
    'icon',
    'title',
    'description'
])

<div class="bg-white p-7 rounded-2xl border border-[#eadfd5]
            hover:border-[#d6b98c]
            shadow-sm hover:shadow-[0_16px_32px_-18px_rgba(47,33,27,0.35)]
            hover:-translate-y-1
            transition duration-300">

    <div class="w-14 h-14 bg-[#f3e7da] rounded-xl
                flex items-center justify-center
                text-[#8b5e3c]
                [&>svg]:w-7 [&>svg]:h-7
                mb-5">

        @switch($icon)

            @case('coffee')
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M4 8h13v6a5 5 0 0 1-5 5H9a5 5 0 0 1-5-5V8Z"/>
                    <path d="M17 9h1.5a2.5 2.5 0 0 1 0 5H17"/>
                    <path d="M8 4c.3 1-.6 1.4-.6 2.4M12 4c.3 1-.6 1.4-.6 2.4"/>
                </svg>
                @break

            @case('leaf')
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M20 4C10 4 4 10 4 18c8 0 14-6 14-14Z"/>
                    <path d="M8 18c2-4 6-8 11-13"/>
                </svg>
                @break

            @case('pairing')
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M6 3v6a2 2 0 0 0 4 0V3M8 9v11"/>
                    <path d="M16 3c-1.7 0-3 2-3 5s1.3 5 3 5v8"/>
                </svg>
                @break

            @case('cozy')
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M6 11V7a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v4"/>
                    <path d="M4 11h16v5a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-5Z"/>
                    <path d="M6 18v2M18 18v2"/>
                </svg>
                @break

            @case('friendly')
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M12 20s-7-4.4-9.5-8.8C.8 7.8 2.6 4.5 6 4c2-.3 3.7.8 4.5 2.4C11.3 4.8 13 3.7 15 4c3.4.5 5.2 3.8 3.5 7.2C16 15.6 12 20 12 20Z"/>
                </svg>
                @break

            @case('value')
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M12.6 3.4 20 10.8a2 2 0 0 1 0 2.8l-6.4 6.4a2 2 0 0 1-2.8 0L3.4 12.6a2 2 0 0 1-.6-1.4V5a1.6 1.6 0 0 1 1.6-1.6h6.2c.5 0 1 .2 1.4.6Z"/>
                    <circle cx="8" cy="8" r="1.4" fill="currentColor" stroke="none"/>
                </svg>
                @break

            @default
                {{-- Falls back to whatever was passed in (e.g. an emoji) if the icon key isn't recognized --}}
                <span class="text-2xl">{{ $icon }}</span>

        @endswitch

    </div>

    <h3 class="text-xl font-bold text-[#2f211b] mb-3">
        {{ $title }}
    </h3>

    <p class="text-gray-600 leading-relaxed">
        {{ $description }}
    </p>

</div>