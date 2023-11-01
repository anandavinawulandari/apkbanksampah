@extends('layouts.master')
@section('title','SMPN 2 Kunjang Site')
@section('content')
<br>
<div class="container">
    <div class="row"></div>
        <div class="col-md-6">
            <h4>Perbarui Data Sampah</h4>
            <br>
            <form action="{{route('jenis.update', $data->id_sampah)}}" method="POST"> 
            @csrf
                <div class="form-group">
                    <label>Nama Sampah <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="nama" id="nama" value="{{$data->nama}}">
                </div>
                <div class="form-group">
                    <label>Jenis Sampah <span class="text-danger">*</span></label>
                    <select class="form-control" type="options" name="jenis" id="jenis" />
                    <option value="Kertas">Kertas</option>
                    <option value="Plastik">Plastik</option>              
                    <option value="Logam">Logam</option>
                    <option value="Kaca">Kaca</option> 
                </select>
                </div>
                <div class="form-group">
                    <label>Harga Sampah (Kg) <span class="text-danger">*</span></label>
                    <select class="form-control" type="options" name="harga" id="harga" />
                    <option value="3000">3000</option>
                    <option value="5000">5000</option>              
                    <option value="7000">7000</option>
                    <option value="9000">9000</option>   
                </select>
                </div>
                <div class="form-group">
                    <label>Deskripsi <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="deskripsi" id="deskripsi" value="{{$data->deskripsi}}">
                </div>
                <br>
                <div><button type="submit" class="btn btn-success">Update</button>
                <a href="{{route('jenis.index')}}" class="btn btn-danger">Kembali</a></div>
            </div>
                
            </form>
        </div></div></div>
        <br><br>
@endsection