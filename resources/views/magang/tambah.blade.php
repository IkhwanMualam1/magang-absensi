@extends('layouts.master')
@section('title','Data Magang')
@section('sub-section','Data Magang')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header bg-dark" style="text-align: center">
           <h5>Form Tambah Data Magang</h5>
        </div>
        <div class="card-body">
        <form  action="{{route('magang.store')}}" method="POST" >
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" value="{{old('nama')}}" placeholder="Enter Nama">
                    <span style="color: red">@error('nama'){{ $massage}}@enderror</span>
                </div>
                <div class="form-group">
                    <label for="jk">Jenis Kelamin</label>
                    <select class="form-control" name="jk" value="{{old('jk')}}" placeholder="Enter Jenis Kelamin">
                        <option>Pilih</option>
                        <option value="L">Laki laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                    <span style="color: red">@error('jk'){{ $massage}}@enderror</span>
                  </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" name="alamat" value="{{old('alamat')}}" placeholder="Enter Alamat">
                    <span style="color: red">@error('alamat'){{ $massage}}@enderror</span>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="Enter Email">
                    <span style="color: red">@error('email'){{ $massage}}@enderror</span>
                </div>
                <div class="form-group">
                    <label for="no_tlp">No Telp</label>
                    <input type="text" class="form-control" name="no_tlp" value="{{old('no_tlp')}}" placeholder="Enter No Telp">
                    <span style="color: red">@error('no_tlp'){{ $massage}}@enderror</span>
                </div>
                <div class="form-group">
                    <label for="asal_sklh">Sekolah</label>
                    <input type="text" class="form-control" name="asal_sklh" value="{{old('asal_sklh')}}" placeholder="Enter Asal Sekolah">
                    <span style="color: red">@error('asal_sklh'){{ $massage}}@enderror</span>
                </div>
                <div class="form-group">
                    <label for="foto">Foto</label>
                    <input  class="form-control-file" type="file" name="foto" value="{{old('foto')}}" placeholder="Pilih Foto">
                    <span style="color: red">@error('file'){{ $massage}}@enderror</span>
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                <a href="{{route('magang.index')}}"><button type="button" class="btn btn-danger btn-sm">Kembali</button></a>
            </form>
        </div>
    </div>
</div>

@endsection

@push('js')
<!-- daterangepicker -->


@endpush
