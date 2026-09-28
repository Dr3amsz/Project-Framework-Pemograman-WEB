<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Contoh Komponen Badge</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <x-card>
                <h3 class="text-lg font-semibold mb-4">Daftar Status Stok</h3>
                <div class="space-y-2 text-sm text-gray-600">
                    <div class="flex items-center gap-3">
                        <x-badge :stok="50" /> <span>Stok lebih dari 10</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <x-badge :stok="5" /> <span>Stok 1 sampai 10</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <x-badge :stok="0" /> <span>Stok kosong</span>
                    </div>
                </div>
            </x-card>

            <x-card>
                <h3 class="text-lg font-semibold mb-4">Data Produk</h3>
                <table class="w-full text-sm text-left">
                    <thead>
                        <tr class="bg-gray-50 text-gray-600">
                            <th class="py-2 px-3">Nama Barang</th>
                            <th class="py-2 px-3">Sisa Stok</th>
                            <th class="py-2 px-3">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $produk = [
                                ['nama' => 'Sabun Mandi', 'stok' => 30],
                                ['nama' => 'Kopi Sachet', 'stok' => 4],
                                ['nama' => 'Teh Botol', 'stok' => 0],
                            ];
                        @endphp

                        @foreach ($produk as $p)
                            <tr class="border-b">
                                <td class="py-2 px-3">{{ $p['nama'] }}</td>
                                <td class="py-2 px-3">{{ $p['stok'] }}</td>
                                <td class="py-2 px-3"><x-badge :stok="$p['stok']" /></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </x-card>

        </div>
    </div>
</x-app-layout>