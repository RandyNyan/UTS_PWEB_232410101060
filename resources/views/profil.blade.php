@extends('layout.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="card-title mb-0">Profil Pengguna</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between">
                            <span class="fw-bold">Nama:</span>
                            <span>{{ $profil['nama'] }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span class="fw-bold">NIM:</span>
                            <span>{{ $profil['nim'] }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span class="fw-bold">Fakultas:</span>
                            <span>{{ $profil['fakultas'] }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span class="fw-bold">Universitas:</span>
                            <span>{{ $profil['universitas'] }}</span>
                        </li>
                    </ul>

                    @if(isset($username))
                    <div class="mt-3 text-end text-muted small">
                        Login sebagai: {{ $username }}
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
