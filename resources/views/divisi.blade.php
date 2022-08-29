@extends('master')

@section('title', 'Selamat Datang')
    
@section('content')
<div class="jumbotron">
    <div class="container">
        <div class="row">
        <div class="card col-md-4 text-center shadow-sm">
            @foreach ($dapil as $dapils)
            <div class="card-header mb-2 mt-2 bg-success text-light">
                <h5>Bandung Barat - DAPIL {{ $dapils->code}}</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    @foreach ($divisi as $divisis)
                        @if ($divisis == "dprdk")
                        <div class="col-xl-12 mb-3">
                            <a href="{{route('post.show',['id'=>$dapils->id,'divisi'=>$divisis])}}" >
                            <div class="card border-left-success shadow-sm h-100">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                        <div class="text-md font-weight-bold text-success text-uppercase mb-1">
                                            DPRD KABUPATEN
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                        @elseif($divisis == "dprdp")
                        <div class="col-xl-12 mb-3">
                            <a href="{{route('post.show',['id'=>$dapils->id,'divisi'=>$divisis])}}" >
                            <div class="card border-left-primary shadow-sm h-100">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                        <div class="text-md font-weight-bold text-primary text-uppercase mb-1">
                                            DPRD PROVINSI
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                        @else
                        <div class="col-xl-12 mb-3">
                            <a href="{{route('post.show',['id'=>$dapils->id,'divisi'=>$divisis])}}" >
                            <div class="card border-left-warning shadow-sm h-100">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                        <div class="text-md font-weight-bold text-warning text-uppercase mb-1">
                                            DPR RI
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                        @endif
                    @endforeach
                    </div>
            </div>
            @endforeach
        </div>
        <div class="col-md-8">
            <img src="media/a.png" width="100%">
        </div>
        </div>
    </div>
</div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
@endsection