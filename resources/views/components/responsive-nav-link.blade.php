@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block pl-3 pr-4 py-2 border-l-4 border-white rounded-md text-base font-medium text-black bg-bleu-pastel focus:outline-none focus:text-black focus:bg-white transition duration-150 ease-in-out'
            : 'block pl-3 pr-4 py-2 border-l-4 border-transparent rounded-md text-base font-medium text-gray-600 bg-transparent hover:text-gray-800 hover:bg-white focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
