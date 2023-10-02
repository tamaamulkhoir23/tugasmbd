<x-app-layout>
    <x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Data Pengukuran Periodik') }}
        </h2> --}}
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('pengukuranstore') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="idpengukuran" class="form-label">ID Pengukuran</label>
                            <input type="text" class="form-control" id="idpengukuran" name="idpengukuran" required>
                        </div>
                        <div class="mb-3">
                            <label for="idgas" class="form-label">ID Gas</label>
                            <input type="text" class="form-control" id="idgas" name="idgas" required>
                        </div>
                        <div class="mb-3">
                            <label for="idsuhu" class="form-label">ID Suhu</label>
                            <input type="text" class="form-control" id="idsuhu" name="idsuhu" required>
                        </div>
                        <div class="mb-3">
                            <label for="idbuah" class="form-label">ID Buah</label>
                            <input type="text" class="form-control" id="idbuah" name="idbuah" required>
                        </div>
                        <div class="mb-3">
                            <label for="nilaigas" class="form-label">Nilai Gas</label>
                            <input type="text" class="form-control" id="nilaigas" name="nilaigas" required>
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
