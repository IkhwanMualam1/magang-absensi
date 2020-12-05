@extends('layouts.master')
@section('title','Absensi')
@section('sub-section','Absensi')
@section('content')

<div class="card">
    <div class="card-header">
        <div class="card-tools">
            <button class="btn btn-primary">Tambah Data Absensi</button>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Masuk Magang</th>
                <th>Selesai Magang</th>
                <th>Keterangan</th>
              </tr>
            </thead>
            <tbody>
                <?php
                    $i=1;?>
                <tr>
                    @foreach ($absensi as $abs)
                    <td><?= $i?></td>
                    <td>{{ $abs->nama}}</td>
                    <td>{{ $abs->msk_magang}}</td>
                    <td>{{ $abs->slsai_magang}}</td>
                    <td>{{ $abs->ketrngn_absen}}</td>
                    <?php
                        $i++;
                        ?>
                    @endforeach
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection

@push('js')
<!-- daterangepicker -->

@endpush



