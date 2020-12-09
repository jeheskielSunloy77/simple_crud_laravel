<!-- Extends template page-->
@extends('layout.app')

<!-- Specify content -->
@section('content')

<h3>Data Mahasiswa</h3>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">

        <!-- Alert message (start) -->
        @if(Session::has('message'))
        <div class="alert {{ Session::get('alert-class') }}">
            {{ Session::get('message') }}
        </div>
        @endif
        <!-- Alert message (end) -->

        <div class='actionbutton'>

            <a class='btn btn-info float-right' href="{{route('subjects.create')}}">Tambah Data</a>

        </div>
        <table class="table" >
            <thead>
                <tr>
                    <th width='10%'>Name</th>
                    <th width='10%'>NIM</th>
                    <th width='10%'>Kota Asal</th>
                    <th width='10%'>Tanggal Lahir</th>
                    <th width='10%'>Nama Orang Tua</th>
                    <th width='10%'>Alamat Orang Tua</th>
                    <th width='10%'>Kode Pos</th>
                    <th width='10%'>Nomor Telepon</th>
                    <th width='10%'>Status</th>
                    <th width='10%'>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($subjects as $subject)
                <tr>
                    <td>{{ $subject->name }}</td>
                    <td>{{ $subject->nim }}</td>
                    <td>{{ $subject->kota_asal }}</td>
                    <td>{{ $subject->tgl_lahir }}</td>
                    <td>{{ $subject->nortu }}</td>
                    <td>{{ $subject->aortu }}</td>
                    <td>{{ $subject->postal }}</td>
                    <td>{{ $subject->nohp }}</td>
                    <td>{{ $subject->stat }}</td>
                    <td>
                        <!-- Edit -->
                        <a href="{{ route('subjects.edit',[$subject->id]) }}" class="btn btn-sm btn-info">Ubah</a>
                        <!-- Delete -->
                        <a href="{{ route('subjects.delete',$subject->id) }}" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
</div>
@stop
