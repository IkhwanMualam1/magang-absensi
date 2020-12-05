@extends('layouts.master')
@section('title','Data Magang')
@section('sub-section','Data Magang',)
@section('content')
<div class="container">

    <div class="card">
        <div class="card-header">
            <div class="card-tools">
            <a href="{{route('magang.create')}}" class="btn btn-primary">Tambah Data Magang</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Sekolah</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                    $i=1;

                    ?>
                    @foreach ($magang as $mgn)
                    <tr>
                        <td><?=$i;?></td>
                        <td>{{ $mgn->nama}}</td>
                        <td>{{ $mgn->alamat}}</td>
                        <td>{{ $mgn->asal_sklh}}</td>
                        <td>
                            <a href="{{ route('magang.edit',[$mgn->id ]) }}" class="btn btn-info btn-sm" title="Edit">Edit</a>
                            <a href="{{ route('magang.show',[$mgn->id]) }}" class="btn btn-secondary btn-sm">Detail</a>
                            <form onsubmit="return confirm('Apakah anda yakin ingin menghapus data ini?')" class="d-inline" action="{{route('magang.destroy', [$mgn->id])}}" method="POST">

                                @csrf

                                <input type="hidden" name="_method" value="DELETE">

                                <button type="submit" class="btn btn-danger btn-sm" data-toggle="tooltip" data-custom-class="tooltip-danger" data-placement="top" title="Hapus Data">
                                  Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    <?php
                    $i++;
                    ?>

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



