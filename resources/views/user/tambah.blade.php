@extends('layouts.master')
@section('title','Tambah User')
@section('sub-section','Data User',)
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header bg-dark" style="text-align: center">
           <h5>Form Tambah Data User</h5>
        </div>
        <div class="card-body">
            <form  action="{{route('user.store')}}" method="POST" >
                @csrf
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" value="{{old('username')}}" placeholder="Enter Username">
                    <span style="color: red">@error('username'){{ $massage}}@enderror</span>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" class="form-control" name="password" value="{{old('password')}}" placeholder="Enter Password">
                    <span style="color: red">@error('password'){{ $massage}}@enderror</span>
                </div>
                <div class="form-group">
                    <label for="id">Data Magang</label>
                    <select class="form-control" name="id" value="{{old('id')}}">
                        <option>Pilih</option>
                        @foreach ($set_magang as $mgn)
                        <option value="{{ $mgn->id }}"> {{ $mgn->nama }} </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="level">Level</label>
                    <select class="form-control" name="level" value="{{old('level')}}" pleaceholder="Enter Level">
                        <option>Pilih</option>
                        <option value="Admin">Admin</option>
                        <option value="User">User</option>
                        <span style="color: red">@error('level'){{ $massage}}@enderror</span>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                <a href="{{route('user.index')}}"><button type="button" class="btn btn-danger btn-sm">Kembali</button></a>
            </form>
        </div>
    </div>
</div>

@endsection

@push('js')
<!-- daterangepicker -->


@endpush
