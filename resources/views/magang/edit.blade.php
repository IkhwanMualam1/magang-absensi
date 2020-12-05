@extends('layouts.master')
@section('title','Data Magang')
@section('sub-section','Data Magang',)
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header bg-dark" style="text-align: center">
            <h5>Form Edit Data Magang</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('magang.update',[$get_mgn->id]) }}" method="POST">
                @csrf

                <input type="hidden" name="_method" value="PUT">

                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" value="{{ $get_mgn->nama }}" placeholder="Enter nama">
                    <span style="color: red">@error('nama'){{ $massage}}@enderror</span>
                </div>
                <div class="form-group">
                    <label for="jk">Jenis Kelamin</label>
                    <select class="form-control" name="jk">
                        <option>Pilih</option>
                        <option value="L" <?=($get_mgn->jk=="L") ? "SELECTED" : "" ?>>Laki laki</option>
                        <option value="P" <?=($get_mgn->jk=="P") ? "SELECTED" : "" ?>>Perempuan</option>
                    </select>
                    <span style="color: red">@error('jk'){{ $massage}}@enderror</span>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" name="alamat" value="{{ $get_mgn->alamat }}" placeholder="Enter Alamat">
                    <span style="color: red">@error('alamat'){{ $massage}}@enderror</span>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" value="{{ $get_mgn->email }}" placeholder="Enter Email">
                    <span style="color: red">@error('email'){{ $massage}}@enderror</span>
                </div>
                <div class="form-group">
                    <label for="no_tlp">No telp</label>
                    <input type="number" class="form-control" name="no_tlp" value="{{ $get_mgn->no_tlp }}" placeholder="Enter No.Telp">
                    <span style="color: red">@error('no_tlp'){{ $massage}}@enderror</span>
                </div>
                <div class="form-group">
                    <label for="asal_sklh">Asal Sekolah</label>
                    <input type="text" class="form-control" name="asal_sklh" value="{{ $get_mgn->asal_sklh }}" placeholder="Enter Asal Sekolah">
                    <span style="color: red">@error('asal_sklh'){{ $massage}}@enderror</span>
                </div>
                <div class="form-group">
                    <label for="foto">Foto</label>
                    <input  class="form-control-file" type="file" name="foto" value="{{ $get_mgn->foto }}" placeholder="Pilih Foto">
                    <span style="color: red">@error('file'){{ $massage}}@enderror</span>
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                <a href="{{route('magang.index')}}"><button type="button" class="btn btn-danger btn-sm">Kembali</button></a>
            </form>
        </div>
    </div>

@endsection

@push('js')
<!-- daterangepicker -->


@endpush
