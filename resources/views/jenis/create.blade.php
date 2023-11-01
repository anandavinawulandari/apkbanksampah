@extends('layouts.master2')
@section('title', 'Bank Sampah Site')
@section('content')
<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
                    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>           
</head>
<br>
<div class="container overflow-hidden shadow sm:rounded-lg">
<div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card overflow-hidden shadow sm:rounded-lg">
    <div class="row"></div>
        <div class="col-md-12">
        <ul class="nav justify-content-center nav nav-tabs p-1 mb-5 bg-dark text-white">
            <center><b><h2>Data Sampah</h2></b></center>
            <br>
            </ul>
            <form action="{{route('jenis.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Kode Sampah <span class="text-danger">*</span></label>
                    <input class="form-control" type="options" name="id_sampah" id="id_sampah" />   
                <div class="form-group">
                    <label>Nama Sampah <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="nama" id="nama" />
                </div>
                <div class="form-group">
                    <label>Jenis Sampah <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="jenis" id="jenis" />
                </div>
                <div class="form-group">
                    <label>Harga Sampah (Kg) <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="harga" id="harga" />
                </div>
                <div class="form-group">
                    <label>Deskripsi <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="deskripsi" id="deskripsi" />
                </div>
                <div class="form-group">
                    <label>Gambar <span class="text-danger">*</span></label>
                    <input class="form-control" type="file" name="file" id="exampleFormControlFile1" required/>
                    @error('file') 
                        <div class="invalid-feedback" role="alert">
                        {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <br>
                <div><button type="submit" class="btn btn-success">Simpan</button>
                <a href="{{ url('/jenis') }}" class="btn btn-danger">Kembali</a></div>
            </form>
        </div></div></div>
        </div>
            </div>
        </div>
@endsection