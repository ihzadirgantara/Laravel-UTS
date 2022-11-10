@extends('layouts.master')
@section('konten')
@extends('layouts.pesan')
<br>
<div class="d-flex justify-content-center">
  <div class="col-md-4 col-md-offset-6">
  <form action="{{ route('kebutuhan.store') }}" method='post' enctype="multipart/form-data">
  @csrf
<form >
  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama" >
  </div>
<form >
  <div class="form-group">
    <label for="whatsapp">Nomer whatsapp</label>
    <input type="text" class="form-control" id="whatsapp" name="whatsapp" >
  </div>
<form >
  <div class="form-group">
    <label for="bagian">bagian</label>
    <input type="text" class="form-control" id="bagian" name="bagian" >
  </div>
<form >
  <div class="form-group">
    <label for="jenis_kebutuhan">jenis kebutuhan</label>
    <input type="text" class="form-control" id="jenis_kebutuhan" name="jenis_kebutuhan" >
  </div>
<form >
  <div class="form-group">
    <label for="kebutuhan">kebutuhan</label>
    <input type="text" class="form-control" id="kebutuhan" name="kebutuhan" >
  </div>
<form >
  <div class="form-group">
    <label for="deskripsi">deskripsi</label>
    <input type="text" class="form-control" id="deskripsi" name="deskripsi" >
  </div>
<form >
  <div class="form-group">
    <label for="foto"> masukan foto</label>
    <input type="file" class="form-control" id="foto" name="foto" >
  </div>
  <form >
  <div class="form-group">
    <label for="urgensi">urgensi</label>
    <input type="text" class="form-control" id="urgensi" name="urgensi" >
  </div>
  <div class="form-group">
    <label for="kategori">kategori</label>
    <input type="text" class="form-control" id="kategori" name="kategori" >
  </div>
  <div class="form-group">
    <label for="progres">progres</label>
    <input type="text" class="form-control" id="progres" name="progres" >
  </div>
  <div class="form-group">
    <label for="pic">pic</label>
    <input type="text" class="form-control" id="pic" name="pic" >
  </div>
  @error('jenis_kebutuhan','kebutuhan','urgensi','foto','nama','whatsapp','bagian','kategori','progres','pic')
<strong>{{ $message }}</strong>
@enderror
<br>
<a href="{{ route('kebutuhan.index') }}" type="submit"><button class="btn btn-warning">kembali</button></a>
<button class="btn btn-primary" type="submit">Save</button>
</form>
</div>
</div>   
@endsection