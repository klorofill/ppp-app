<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PPP - App</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">
    <div class="container pt-4 mt-4 ">
        <div class="card mx-auto p-2 col-md-9 col-xl-9">
            
            <div class="card-header mb-4 bg-success text-light">
                <h2>
                    {{ $kabupaten->name}}
                    </h2>
            </div>
            <div class="row">
            @foreach ($dapil as $dapi)
                <div class="col-xl-3 col-md-6 mb-4">
                    <a href="{{ url('user/dapil/'.$dapi->id) }}" >
                    <div class="card border-left-success shadow-sm h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-md font-weight-bold text-success text-uppercase mb-1">
                                        DAPIL {{$dapi->code}}
                                    </div>
                                    <div class="text-xs mb-0 font-weight-bold text-gray-800">
                                        
                                        @foreach(json_decode($dapi->kecamatan) as $value)
                                            {{ $value}}, 
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            @endforeach
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

</body>

</html>