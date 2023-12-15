@props(['disabled' => false, 'size'])

@php
    $size = [
        'xs' => 'px-2.5 py-1.5 text-xs',
        'sm' => 'px-3 py-2 text-sm leading-4',
        'md' => 'px-4 py-2 text-sm',
        'lg' => 'bg-[#231F20] px-10 text-white font-semibold py-3 rounded-lg text-[16px] mt-5',
        'xl' => 'px-6 py-3 text-base bg-[#FFDE17] text-black font-semibold'
    ][$size ?? 'md']
@endphp

<button {{ $disabled ? 'disabled' : '' }} {{ $attributes->merge(['class' => "inline-flex items-center justify-center $size border  rounded-xl  disabled:opacity-50 disabled:pointer-events-none transition "]) }}>
    {{$slot}}
</button>
