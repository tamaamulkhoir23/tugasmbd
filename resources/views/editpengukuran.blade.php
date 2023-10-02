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
                    <form action="{{ route('pengukuranupdate', $pengukuran->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="form-group">
                            <label for="idpengukuran">ID Pengukuran</label>
                            <input type="text" class="form-control" id="idpengukuran" name="idpengukuran" value="{{ $pengukuran->idpengukuran }}">
                        </div>

                        <div class="form-group">
                            <label for="idgas">ID Gas</label>
                            <input type="text" class="form-control" id="idgas" name="idgas" value="{{ $pengukuran->idgas }}">
                        </div>
                        
                        <div class="form-group">
                            <label for="idsuhu">ID suhu</label>
                            <input type="text" class="form-control" id="idsuhu" name="idsuhu" value="{{ $pengukuran->idsuhu }}">
                        </div>

                        <div class="form-group">
                            <label for="idbuah">ID buah</label>
                            <input type="text" class="form-control" id="idbuah" name="idbuah" value="{{ $pengukuran->idbuah }}">
                        </div>

                        <div class="form-group">
                            <label for="nilaigas">Nilai Gas</label>
                            <input type="text" class="form-control" id="nilaigas" name="nilaigas" value="{{ $pengukuran->nilaigas }}">
                        </div>

                        <div class="form-group">
                            <label for="nilaisuhu">Nilai suhu</label>
                            <input type="text" class="form-control" id="nilaisuhu" name="nilaisuhu" value="{{ $pengukuran->nilaisuhu }}">
                        </div>
                        
                        <button type="submit" class="btn btn-primary" style="background-color: blue">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
