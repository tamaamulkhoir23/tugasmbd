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
                    <form action="{{ route('gasupdate', $gas->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="form-group">
                            <label for="idgas">ID Gas</label>
                            <input type="text" class="form-control" id="idgas" name="idgas" value="{{ $gas->idgas }}">
                        </div>

                        <div class="form-group">
                            <label for="namagas">Nama Gas</label>
                            <input type="text" class="form-control" id="namagas" name="namagas" value="{{ $gas->namagas }}">
                        </div>
                        
                        <div class="form-group">
                            <label for="jenisgas">Jenis Gas</label>
                            <input type="text" class="form-control" id="jenisgas" name="jenisgas" value="{{ $gas->jenisgas }}">
                        </div>
                        
                        <div class="form-group">
                            <label for="nilaigas">Nilai Gas</label>
                            <input type="text" class="form-control" id="nilaigas" name="nilaigas" value="{{ $gas->nilaigas }}">
                        </div>
                        
                        <button type="submit" class="btn btn-primary" style="background-color: blue">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
