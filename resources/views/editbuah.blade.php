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
                    <form action="{{ route('buahupdate', $buah->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="form-group">
                            <label for="idbuah">ID buah</label>
                            <input type="text" class="form-control" id="idbuah" name="idbuah" value="{{ $buah->idbuah }}">
                        </div>

                        <div class="form-group">
                            <label for="namabuah">Nama buah</label>
                            <input type="text" class="form-control" id="namabuah" name="namabuah" value="{{ $buah->namabuah }}">
                        </div>
                        
                        <div class="form-group">
                            <label for="beratbuah">Berat buah</label>
                            <input type="text" class="form-control" id="beratbuah" name="beratbuah" value="{{ $buah->beratbuah }}">
                        </div>
                        
                        <button type="submit" class="btn btn-primary" style="background-color: blue">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
