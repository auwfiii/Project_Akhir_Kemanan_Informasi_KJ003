<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800 dark:text-white leading-tight">
            {{ __('Data Gaji') }}
        </h2>
    </x-slot>

    <div class="py-6 max-w-7xl mx-auto sm:px-6 lg:px-8">
        @if (session('success'))
            <div class="mb-4 text-green-600">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('gaji.create') }}" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">+ Tambah Gaji</a>

        <div class="mt-4 bg-white dark:bg-gray-800 shadow rounded p-4">
            <table class="min-w-full text-sm">
                <thead>
                    <tr>
                        <th class="text-left">Nama Karyawan</th>
                        <th class="text-left">Bulan</th>
                        <th class="text-left">Jumlah Gaji</th>
                        <th class="text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($gajis as $gaji)
                        <tr>
                            <td>{{ $gaji->karyawan->nama }}</td>
                            <td>{{ $gaji->bulan }}</td>
                            <td>
                                @php
                                    try {
                                        echo 'Rp ' . number_format(Crypt::decrypt($gaji->jumlah_gaji), 0, ',', '.');
                                    } catch (\Exception $e) {
                                        echo 'Gagal Dekripsi';
                                    }
                                @endphp
                            </td>
                            <td>
                                <a href="{{ route('gaji.edit', $gaji) }}" class="text-blue-600 hover:underline">Edit</a>
                                |
                                <form action="{{ route('gaji.destroy', $gaji) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('Yakin?')" class="text-red-600 hover:underline">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
