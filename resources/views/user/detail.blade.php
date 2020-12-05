@extends('layouts.master')
@section('title','Tambah Detail User')
@section('sub-section','Data User',)
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header bg-dark" style="text-align: center">
            <h5>Detail Data User</h5>
        </div>
        <div class="card-body">
            <form action="{{route('user.show',[$get_usr->id_user])}}" method="POST">
                @csrf

                <input type="hidden" name="_method" value="PUT">

                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" value="{{ $get_usr->username }}" readonly>
                    <span style="color: red">@error('username'){{ $massage}}@enderror</span>
                </div>
                <div class="form-group">
                    <label for="id">Data Magang</label>
                    <select class="form-control" name="id" readonly>
                        @foreach ($set_magang as $mgn)
                        <option value="{{ $mgn->id }}"> {{ $mgn->nama }} </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="level">Level</label>
                    <select class="form-control" name="level" value="<?=($get_usr->level)?>" readonly>
                        <option>Pilih</option>
                        <option value="Admin" <?=($get_usr->level=="Admin") ? "SELECTED" : "" ?>>Admin</option>
                        <option value="User" <?=($get_usr->level=="User") ? "SELECTED" : "" ?>>User</option>
                    </select>
                    <span style="color: red">@error('level'){{ $massage}}@enderror</span>
                </div>
                <a href="{{route('user.index')}}"><button type="button" class="btn btn-danger btn-sm">Kembali</button></a>
            </form>
        </div>
    </div>
</div>



@endsection

@push('js')
<!-- daterangepicker -->


@endpush
