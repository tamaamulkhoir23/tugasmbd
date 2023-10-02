<x-app-layout>
    <x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Data Buah') }}
        </h2> --}}
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('buahstore') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="idbuah" class="form-label">ID Buah</label>
                            <input type="text" class="form-control" id="idbuah" name="idbuah" required>
                        </div>
                        <div class="mb-3">
                            <label for="namabuah" class="form-label">Nama Buah</label>
                            <input type="text" class="form-control" id="namabuah" name="namabuah" required>
                        </div>
                        <div class="mb-3">
                            <label for="beratbuah" class="form-label">Berat Buah</label>
                            <input type="text" class="form-control" id="beratbuah" name="beratbuah" required>
                        </div>
                        <button type="submit" class="btn btn-primary" style="background-color: blue">Tambahkan Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
