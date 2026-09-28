@props(['stok'])

@php
    if ($stok <= 0) {
        $label = 'Habis';
        $warna = 'bg-red-100 text-red-800';
    } elseif ($stok <= 10) {
        $label = 'Menipis';
        $warna = 'bg-yellow-100 text-yellow-800';
    } else {
        $label = 'Aman';
        $warna = 'bg-green-100 text-green-800';
    }
@endphp

<span {{ $attributes->merge(['class' => "px-2 py-1 text-xs font-semibold rounded-full $warna"]) }}>
    {{ $label }}
</span>