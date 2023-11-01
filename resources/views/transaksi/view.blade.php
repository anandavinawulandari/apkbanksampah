@extends('layouts.master')
@section('title','Bank Sampah Site')
@section('content')
<br>
<div class="container ">
    @if(Session::has('sucess'))
    <div class="alert alert-sucess " role="alert">
        {{Session::get('sucess')}}</div>
        @endif
    <div class="d-flex flex-column pt-3 mb-3 arsip-header" style="margin-left: 50px">
        <h1 class="h2">Data Transaksi Sampah >> Detail </h1>
<br>

<table class="table table-borderless">
<thead>
    <tr>
      <th scope="col">##</th>
      <th scope="col">Keterangan</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Kode Transaksi</td>
      <td>{{ $data->id}}</td>
    </tr>
    <tr>
      <td>Nama Pengguna</td>
      <td>{{ $data->nama}}</td>
    </tr>
    <tr>
      <td>Nama Sampah</td>
      <td>{{ $data->nama}}</td>
    </tr>
    <tr>
      <td>Jenis Sampah</td>
      <td>{{ $data->jenis}}</td>
    </tr>
    <tr>
      <td>Harga (Kg)</td>
      <td>{{ $data->harga}}</td>
    </tr>
    <tr>
      <td>Total Harga</td>
      <td>{{ $data->jumlah}} -> {{ $data->harga}}</td>
    </tr>
      <td>Deskripsi</td>
      <td>{{ $data->no_hp}}</td>
    </tr>
    <tr>
      <td>Gambar Sampah</td>
      <td>{{ $data->file}}</td>
    </tr>
    
  </tbody>
</table>


        <img src="{{asset('storage/' . $data->file)}}" width="50%" alt="{{$data->file}}" >
        <!-- <iframe src="{{asset('storage')}}/{{$data->file}}" type="application/pdf" width="100%" height="500px" ></iframe> -->
        </div>

        <a href="{{route('transaksi.index')}}">
    <button type="button" class="btn btn-primary mx-1 btn-sm">
     Kembali
    </button>
    <br>
  </a>
  </a>
</div>
    </div>

<div class="mb-4">
 </div>
<br><br>
@endsection