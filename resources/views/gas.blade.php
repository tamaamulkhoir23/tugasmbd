<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data Gas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <a href="{{ route('gascreate') }}" class="btn btn-primary mb-3">Tambah Data</a>
                
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID Sensor</th>
                            <th>Nama Sensor</th>
                            <th>Jenis Gas</th>
                            <th>Nilai Gas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($gas as $data)
                            <tr>
                                <td>{{ $data->idgas }}</td>
                                <td>{{ $data->namagas }}</td>
                                <td>{{ $data->jenisgas }}</td>
                                <td>{{ $data->nilaigas }}</td>
                                <td>
                                    <a href="{{ route('editgas', $data->id) }}" class="btn btn-primary">Edit</a>
                                    <form action="{{ route('gasdestroy', $data->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" style="background-color: red">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
