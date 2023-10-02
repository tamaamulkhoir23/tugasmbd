<x-app-layout>
    <x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Data Suhu') }}
        </h2> --}}
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('suhustore') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="idsuhu" class="form-label">ID Sensor</label>
                            <input type="text" class="form-control" id="idsuhu" name="idsuhu" required>
                        </div>
                        <div class="mb-3">
                            <label for="namasuhu" class="form-label">Nama Sensor</label>
                            <input type="text" class="form-control" id="namasuhu" name="namasuhu" required>
                        </div>
                        <div class="mb-3">
                            <label for="nilaisuhu" class="form-label">Nilai Suhu</label>
                            <input type="text" class="form-control" id="nilaisuhu" name="nilaisuhu" required>
                        </div>
                        <button type="submit" class="btn btn-primary" style="background-color: blue">Tambahkan Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
