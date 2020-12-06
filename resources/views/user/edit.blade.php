@extends('layouts.master')
@section('title','Tambah User')
@section('sub-section','Data User',)
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header bg-dark" style="text-align: center">
            <h5>Form Edit Data User</h5>
        </div>
        <div class="card-body">
            <form action="{{route('user.update',[$get_usr->id])}}" method="POST">
                @csrf

                <input type="hidden" name="_method" value="PUT">

                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" value="{{ $get_usr->username }}" placeholder="Enter Username">
                    <span style="color: red">@error('username'){{ $massage}}@enderror</span>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" class="form-control" name="password" value="" placeholder="Enter Password">
                    <span style="color: red">@error('password'){{ $massage}}@enderror</span>
                </div>
                <div class="form-group">
                    <label for="magang_id">Data Magang</label>
                    <select class="form-control" name="magang_id">
                        <option>Pilih</option>
                        @foreach ($set_magang as $mgn)
                        <option value="{{ $mgn->id }}" {{ $get_usr->magang_id == $mgn->id ? "selected" : null }} > {{ $mgn->nama }} </option>
                        @endforeach
                    </select>
                    <span style="color: red">@error('id'){{ $massage}}@enderror</span>
                </div>
                <div class="form-group">
                    <label for="level">Level</label>
                    <select class="form-control" name="level" value="{{ $get_usr->level }}">
                        <option>Pilih</option>
                        <option value="Admin" {{ $get_usr->level == "Admin" ? "selected" : null }} >Admin</option>
                        <option value="User" {{ $get_usr->level == "User" ? "selected" : null }} >User</option>
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
