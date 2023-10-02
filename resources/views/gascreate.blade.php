<x-app-layout>
    <x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Data') }}
        </h2> --}}
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('gasstore') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="idgas" class="form-label">ID Sensor</label>
                            <input type="text" class="form-control" id="idgas" name="idgas" required>
                        </div>
                        <div class="mb-3">
                            <label for="namagas" class="form-label">Nama Sensor</label>
                            <input type="text" class="form-control" id="namagas" name="namagas" required>
                        </div>
                        <div class="mb-3">
                            <label for="jenisgas" class="form-label">Jenis Gas</label>
                            <input type="text" class="form-control" id="jenisgas" name="jenisgas" required>
                        </div>
                        <div class="mb-3">
                            <label for="nilaigas" class="form-label">Nilai Gas</label>
                            <input type="text" class="form-control" id="nilaigas" name="nilaigas" required>
                        </div>
                        <button type="submit" class="btn btn-primary" style="background-color: blue">Tambahkan Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
