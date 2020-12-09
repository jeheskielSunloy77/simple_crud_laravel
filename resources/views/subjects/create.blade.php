<!-- Extends template page -->
@extends('layout.app')

<!-- Specify content -->
@section('content')

<h3>Tambahkan Data</h3>

<div class="row">

    <div class="col-md-12 col-sm-12 col-xs-12">

        <!-- Alert message (start) -->
        @if(Session::has('message'))
        <div class="alert {{ Session::get('alert-class') }}">
            {{ Session::get('message') }}
        </div>
        @endif
        <!-- Alert message (end) -->

        <div class="actionbutton">

            <a class='btn btn-info float-right' href="{{route('subjects')}}">Daftar Mahasiswa</a>

        </div>

            <form action="{{route('subjects.store')}}" method="post" id="subjectForm">
                {{csrf_field()}}

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="name" class="form-control col-md-12 col-xs-12" name="name" placeholder="Masukan Nama Lengkap" required="required" type="text">

                        @if ($errors->has('name'))
                          <span class="errormsg">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nim">NIM
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="nim" class="form-control col-md-12 col-xs-12" name="nim" placeholder="Masukan NIM" required="required" type="number">

                        @if ($errors->has('nim'))
                          <span class="errormsg">{{ $errors->first('nim') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kota_asal">Kota Asal
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="kota_asal" class="form-control col-md-12 col-xs-12" name="kota_asal" placeholder="Masukan Kota Asal" required="required" type="text">

                        @if ($errors->has('kota_asal'))
                          <span class="errormsg">{{ $errors->first('kota_asal') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tgl_lahir">Tanggal Lahir
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="tgl_lahir" class="form-control col-md-12 col-xs-12" name="tgl_lahir" placeholder="Masukan Tanggal Lahir" required="required" type="date">

                        @if ($errors->has('tgl_lahir'))
                          <span class="errormsg">{{ $errors->first('tgl_lahir') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nortu">Nama Orang Tua
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="nortu" class="form-control col-md-12 col-xs-12" name="nortu" placeholder="Masukan Nama Orang Tua" required="required" type="text">

                        @if ($errors->has('nortu'))
                          <span class="errormsg">{{ $errors->first('nortu') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="aortu">Alamat Orang Tua
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="aortu" class="form-control col-md-12 col-xs-12" name="aortu" placeholder="Masukan Alamat Orang Tua" required="required" type="text">

                        @if ($errors->has('aortu'))
                          <span class="errormsg">{{ $errors->first('aortu') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="postal">Kode Pos
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="postal" class="form-control col-md-12 col-xs-12" name="postal" placeholder="Masukan Kode Pos" required="required" type="number">

                        @if ($errors->has('postal'))
                          <span class="errormsg">{{ $errors->first('postal') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nohp">Nomor Telepon
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="nohp" class="form-control col-md-12 col-xs-12" name="nohp" placeholder="Masukan Nomor Telepon" required="required" type="number">

                        @if ($errors->has('nohp'))
                          <span class="errormsg">{{ $errors->first('nohp') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="stat">Status
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <select id="stat" class="form-control col-md-12 col-xs-12" name="stat" required="required">
                          <option value=""> --Pilih-- </option>
                          <option value="TAMA"> TAMA </option>
                          <option value="WEREDA"> WREDA </option>
                        </select>
                        @if ($errors->has('stat'))
                          <span class="errormsg">{{ $errors->first('stat') }}</span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6">

                        <input type="submit" name="submit" value='Submit' class='btn btn-success'>
                    </div>
                </div>

            </form>

    </div>
</div>

@stop
