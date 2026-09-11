@props([
    'href' => '#',
    'variant' => 'primary'
])

@php
    $styles = match ($variant) {
        'outline' => 'border border-[#2f211b] text-[#2f211b] hover:bg-[#2f211b] hover:text-white',
        'light' => 'bg-[#d6b98c] text-[#2f211b] hover:bg-white',
        'dark' => 'bg-[#2f211b] text-white hover:bg-[#8b5e3c]',
        default => 'bg-[#8b5e3c] text-white hover:bg-[#2f211b]',
    };
@endphp

<a
    href="{{ $href }}"
    {{ $attributes->merge([
        'class' => "inline-flex items-center justify-center px-6 py-3
                    rounded-xl font-semibold transition duration-300 $styles"
    ]) }}
>
    {{ $slot }}
</a>