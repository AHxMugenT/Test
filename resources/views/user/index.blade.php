@extends('layouts.main')

@section('main')

    <table class="table table-hover text-dark text-center">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Usia</th>
                <th>Pekerjaan</th>
                <th>Jenis Kelamin</th>
                <th>Pendidikan</th>
                <th>Golongan Darah</th>
                <th>NIK</th>
                <th>Provinsi</th>
                <th>Kota/Kabupaten</th>
                <th>Kecamatan</th>
                <th>Kelurahan</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody class="text-dark">
            {{-- @php $no =1 @endphp --}}
            @foreach ($user_data as $data)
            <tr>
                {{-- <th>{{ $no++ }}</th> --}}
                <th>{{ auth()->user()->name }}</th>
                <th>{{ $data->tanggal_lahir }}</th>
                <th>{{ $data->usia }}</th>
                <th>{{ $data->pekerjaan }}</th>
                <th>{{ $data->jk }}</th>
                <th>{{ $data->pendidikan }}</th>
                <th>{{ $data->golongan_darah }}</th>
                <th>{{ $data->nik }}</th>
                <th>{{ $data->provinsi }}</th>
                <th>{{ $data->kota_kab }}</th>
                <th>{{ $data->kec }}</th>
                <th>{{ $data->kel }}</th>
                <th>{{ $data->alamat }}</th>
                <th>
                    <a href="/user/{{ $data->id }}/edit">Edit</a>
                    <a href="/user/{{ $data->id }}/hapus">Hapus</a>
                </th>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
