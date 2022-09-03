@extends('master')

@section('title', 'Selamat Datang')
    
@section('content')
    <div class="jumbotron">
        <div class="container">
          <div class="row">
          <div class="card col-md-4 text-center my-2 shadow-sm">
              <div class="card-body">
                <h3 class="card-title my-4">Pilihan</h3>
                <a href="{{ url('user/provinsi') }}" class="btn btn-success col-10 my-4">Beri Dukungan</a>
                <a href="" class="btn btn-success col-10 my-4">Saksi</a>
                <a href="{{ url('user/qiuckqount') }}" class="btn btn-success col-10 my-4">Hitung Cepat</a>
                <a href="#" class="btn btn-success col-10 my-4">Cetak Kalender</a>
                <a href="#" class="btn btn-success col-10 my-4">Kirim Masukan</a>
              </div>
          </div>
          <div class="col-md-8">
              <img src="media/a.png" width="100%">
          </div>
          </div>
      </div>
  </div>
@endsection
    
