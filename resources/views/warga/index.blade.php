@extends('layouts.master')
@section('content')
    <div class="container">
        <a class="btn btn-primary" href="/warga/create">Add Data Warga</a>
        <table class="table table-hover">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NIK</th>
                <th>No. KK</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
            @foreach($warga as $w)
                <tr>
                    <td>{{$w->id}}</td>
                    <td>{{$w->nama}}</td>
                    <td>{{$w->nik}}</td>
                    <td>{{$w->no_kk}}</td>
                    <td>{{$w->jenis_kelamin}}</td>
                    <td>{{$w->alamat}}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <a class="btn btn-warning" href="/warga/{{$w->id}}/edit">Edit</a>
                            <form action="/warga/{{$w->id}}" method="POST">
                                @csrf
                                @method('delete')
                                <input class="btn btn-danger" type="submit" value="Delete">
                            </form>
                        </div>                        
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection