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
            <center><b><h2>Data Transaksi Sampah</h2></b></center>
            <br>
            </ul>
            <form action="{{route('transaksi.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Nama Pengguna <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="nama_p" id="nama_p" required>
                </div>
                <div class="form-group">
                    <label>Kode Sampah <span class="text-danger">*Perhatian! Kode 1 = Kertas, 2 = Plastik, 3 = Logam, 4 = Kaca</span></label>
                    <div class="input-group date" id="div_id_sampah">
                        <input class="form-control" type="text" name="id_sampah" id="id_sampah">
                        <div class="input-group-append" data-target="#div_id_sampah">
                            <div class="input-group-text"><i class="fas fa-search" onclick="getdetail()"></i></div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Jenis Sampah <span class="text-danger">*</span></label>
                    <select name="jenis_1" id="jenis_1" class="form-control">
                    <option value="">Pilih</option>
                    @foreach ($ref_jenis as $a)
                        <option value="{{$a->id_sampah}}"> {{$a->jenis}}</option>
                    @endforeach
                    </select>
                </div>          
                <div class="form-group">
                    <label>Jumlah Sampah (Kg) <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="jumlah" id="jumlah" />
                </div>
                <div class="form-group">
                    <label>Harga Sampah (Kg) <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="harga" id="harga" />
                </div>
                
                <br>
                <div><button type="submit" class="btn btn-success">Simpan</button>
                <a href="{{ url('/transaksi') }}" class="btn btn-danger">Kembali</a></div>
            </form>
        </div></div></div>
        </div>
            </div>
        </div>

        <script type="text/javascript">
    function getdetail()
    {
        var id_sampah = $('#id_sampah').val();
        if(id_sampah.replace(/^\s+|\s+$/gm,'') == ''){
            alert('Kode Sampah Wajib diisi');
            return false;
        }
    
        $.ajax({
            type: "GET",
            url: "{{ route('transaksi.getdetail') }}",
            data: "id_sampah="+id_sampah,
            cache: false,
            success: function(msg){
                var obj = $.parseJSON(msg);
                var status = obj['status'];
                if(status=='0'){
                    alert("Kode sampah yang dimasukkan tidak terdeteksi !");
                    
                return false;
                }
                var detail = obj['detail'];
                console.log(detail[0]['harga']);
                var ref_jenis = obj['ref_jenis'];
                console.log(ref_jenis);


                $('#harga').val(detail[0]['harga']);
            }
        });    
    }
    
</script>


@endsection