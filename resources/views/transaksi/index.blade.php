@extends('layouts.master')
@section('title','Bank Sampah')
@section('content')
<br>
<div class="container ">
      <div class="row ">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading " >
                    <h4>Data Transaksi Sampah</h4>
                    <div class="row">
                        <div class="col-md-8">                        
                        <a href="{{route('transaksi.create')}}" class="btn btn-info pull-right"><i class='fas fa-plus-circle'></i> Submit Data</a>
            </div>

            </form>
</div>
                <div class="panel-body py-3">
                    <table class="table table-bordered table-striped" id="example2">
                        <thead>
                            <tr>
                            <center>
                                <th style="width:5%; text-align:center" rowspan="2">No</th>
                                <th style="width:12z%; text-align:center" rowspan="2">Kode Transaksi</th>
                                <th style="width:12z%; text-align:center" rowspan="2">Nama Pengguna</th>
                                <th style="width:12z%; text-align:center" rowspan="2">Kode Sampah</th>
                                <th style="width:12%; text-align:center" rowspan="2">Nama Sampah</th>
                                <th style="width:12%; text-align:center" rowspan="2">Jenis Sampah</th>
                                <th style="width:12%; text-align:center" rowspan="2">Jumlah (Kg)</th>
                                <th style="width:12%; text-align:center" rowspan="2">Harga</th>
                                <th style="width:12%; text-align:center" rowspan="5">Total Harga</th>

                                <!-- <th style="width:12%; text-align:center" rowspan="2">Aksi</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataTransaksi as $data)
                            <tr>
                                <td style="text-align: center"> {{ $loop->iteration }}</td>
                                <td style="text-align: center"> {{ $data->id }}</td>
                                <td style="text-align: center"> {{ $data->nama_p }}</td>
                                <td style="text-align: center"> {{ $data->id_sampah }}</td>
                                <td style="text-align: center"> {{ $data->nama }}</td>
                                <td style="text-align: center"> {{ $data->jenis }}</td>
                                <td style="text-align: center"> {{ $data->jumlah }}</td>
                                <td style="text-align: center"> {{ $data->harga }}</td>
                                <td style="text-align: center"> {{ $data->total}}</td>
                                <!-- <td style="text-align: center">                                
                                <a href="{{ url('/transaksi/'. $data->id .'/view') }}"> -->
                                <!-- <button type="button" class="badge btn btn-primary mx-1 border-0">Detail </button> -->
                                </td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
<!--  -->
                    <br><br>
                </div>
            </div>
        </div>

    </div>

</div>

@stop
@push('scripts')

@endpush