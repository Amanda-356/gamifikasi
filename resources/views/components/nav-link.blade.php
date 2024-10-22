@props(['active', 'icon', 'activeLevel' => " "])

@php
$classes = ($active ?? false) 
    ? "flex items-center p-2 rounded-lg bg-gray-700 group"  
    : "flex items-center p-2 rounded-lg group cursor-pointer hover:bg-gray-700";
@endphp

<a {{ $attributes->merge(['class' => $classes, 'data-active-level' => $activeLevel]) }}>
    <x-icon :icon="$icon"></x-icon>
    <span class="ms-3">
        {{ $slot }}
    </span>
</a>
