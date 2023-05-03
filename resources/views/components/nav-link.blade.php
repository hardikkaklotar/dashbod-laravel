@props(['active'])

@php
$classes = ($active ?? false)
            ? 'text-lg sm:text-xl  font-medium leading-5 font-semibold'
            : 'text-lg sm:text-xl hidden font-medium leading-5 font-semibold';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
