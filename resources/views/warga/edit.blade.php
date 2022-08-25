@extends('layouts.master')
@section('content')    
    <div class="container">
        <h1>Create Data Warga</h1>
        <form action="/warga/store" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nama Warga</label>
                <input type="text" class="form-control" name="nama" placeholder="Nama Warga" value="{{$warga->nama}}">
            </div>
            <div class="mb-3">
                <label class="form-label">NIK</label>
                <input type="text" class="form-control" name="nik" placeholder="NIK" value="{{$warga->nik}}">
            </div>
            <div class="mb-3">
                <label class="form-label">No. KK</label>
                <input type="text" class="form-control" name="no_kk" placeholder="Nomor KK" value="{{$warga->no_kk}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Jenis Kelamin</label>
                <select class="form-select" name="jenis_kelamin">
                    <option selected>Pilih Jenis Kelamin</option>
                    <option value="L" @if($warga->jenis_kelamin == "L") selected @endif>Laki-Laki</option>
                    <option value="P" @if($warga->jenis_kelamin == "P") selected @endif>Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <textarea class="form-control" name="alamat" rows="10" placeholder="Alamat">{{$warga->alamat}}</textarea>
            </div>
            <input class="btn btn-primary" type="submit" name="submit" value="Save">
        </form>
    </div>    
@endsection