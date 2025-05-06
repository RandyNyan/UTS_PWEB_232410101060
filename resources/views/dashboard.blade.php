@extends('layout.app')

@section('content')
<div class="container">
    @if(isset($username))
        <div class="alert alert-primary mb-4">
            <h4 class="mb-0">Selamat datang, {{ $username }}!</h4>
        </div>
    @endif

    <div class="card shadow-sm mb-5">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Jadwal Kuliah Semester Genap 2023/2024</h5>
            <span class="badge bg-light text-dark">Kelas A</span>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-striped table-hover mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th width="5%">No</th>
                            <th width="10%">Hari</th>
                            <th width="15%">Jam</th>
                            <th width="10%">Kode</th>
                            <th width="25%">Mata Kuliah</th>
                            <th width="5%">Kelas</th>
                            <th width="30%">Ruang</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($jadwal as $item)
                        <tr>
                            <td>{{ $item['no'] }}</td>
                            <td><strong>{{ $item['hari'] }}</strong></td>
                            <td>{{ $item['jam'] }}</td>
                            <td>{{ $item['kode'] }}</td>
                            <td>{{ $item['matakuliah'] }}</td>
                            <td class="text-center">{{ $item['kelas'] }}</td>
                            <td>{{ $item['ruang'] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
