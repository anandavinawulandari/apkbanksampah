@extends('layouts.master')
@section('title','Bank Sampah Site')
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bank Sampah Site</title>
        <style type="text/css">

            .inner   {
                background-color: #008B8B;
                color: #FFFFFF;
                
                        }
        </style>
    </head>
<div class="container">

          <h1 class="card-title"><b style="font-size:28px;"> Selamat Datang, <a href=""> </a> di Halaman Informasi Bank Sampah!</b></h1>
          <div class="card-tools">
          </div>
        </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                <div class="container-fluid col-md-10">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                <div class="col-lg-6 col-30">
                    <!-- small box -->
            <!-- small box -->
            <div class="small-box bg-primary">
                    <div class="inner">
                        <b><h4>HARGA REKAPITULASI <sup style="font-size: 15px"></sup></h4></b>

                        <p>Plastik ...</p>
                        <p>Kertas ... </p>

                    </div>
                    <div class="icon">
                        <i class="fas fa-user-alt">...</i>
                        <i class="fas fa-user-alt">... </i>

                    </div>
                    <a href="" class="small-box-footer bg-dark">
                        <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <br>
                <!-- ./col -->
      <div class="col-lg-6 col-30">



      
<!-- small box -->
<div class="small-box bg-primary">
   <div class="inner">
   <b><h4>TREND SAMPAH<p> 2022/2023<sup style="font-size: 15px"></sup></p></h4></b>

   <p>Trend ...</p>
   </div>
   <div class="icon">
     <i class="fas fa-user-alt"> </i>
   </div>
   <a href=" " class="small-box-footer bg-dark">
       <i class="fas fa-arrow-circle-right"></i></a>
 </div>
</div>
    
      <!-- ./col -->
      <div class="col-lg-3 col-6">

            </div>
                </div>
                 
            </div>

            <div class="card">


        </div>
        </div>
    </div>
</div>
@endsection
