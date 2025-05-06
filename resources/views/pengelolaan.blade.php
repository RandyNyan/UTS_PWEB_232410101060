@extends('layout.app')

@section('content')
<h1>Pengelolaan Data</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jumlah</th>
        </tr>
    </thead>
    <tbody>
        @foreach($items as $item)
        <tr>
            <td>{{ $item['no'] }}</td>
            <td>{{ $item['nama'] }}</td>
            <td>{{ $item['jumlah'] }} pcs</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
