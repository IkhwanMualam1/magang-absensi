@extends('layouts.master')
@section('title','User')
@section('sub-section','Data User')
@section('content')
    <div class="container">

        <div class="card">
            <div class="card-header">
                <div class="card-tools">
                    <a href="{{route('user.create')}}" class="btn btn-primary">Tambah Data User</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>User Name</th>
                        <th>Level</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php $i=1;?>
                    @foreach ($user as $usr)
                    <tr>
                        <td><?=$i;?></td>
                        <td>{{ $usr->username}}</td>
                        <td>{{ $usr->level}}</td>
                        <td>
                            <a href="{{ route('user.edit',[$usr->id_user ]) }}" class="btn btn-info btn-sm">Edit</a>
                            <a href="{{ route('user.show',[$usr->id_user]) }}" class="btn btn-secondary btn-sm">Detail</a>
                            <form onsubmit="return confirm('Apakah anda yakin ingin menghapus data ini?')" class="d-inline" action="{{route('user.destroy', [$usr->id_user])}}" method="POST">

                                @csrf

                                <input type="hidden" name="_method" value="delete">

                                <button type="submit" class="btn btn-danger btn-sm" data-toggle="tooltip" data-custom-class="tooltip-danger" data-placement="top" title="Hapus Data">
                                  Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    <?php
                    $i++;?>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>


    </div>
@endsection

@push('js')
<!-- daterangepicker -->


@endpush



