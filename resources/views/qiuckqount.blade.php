@extends('master')

@section('title', 'Selamat Datang')
<style>
    body {
      font-family: 'Varela Round', sans-serif;
    }
    .modal-confirm {		
      color: #636363;
      width: 325px;
      font-size: 14px;
    }
    .modal-confirm .modal-content {
      padding: 20px;
      border-radius: 5px;
      border: none;
    }
    .modal-confirm .modal-header {
      border-bottom: none;   
      position: relative;
    }
    .modal-confirm h4 {
      text-align: center;
      font-size: 26px;
      margin: 30px 0 -15px;
    }
    .modal-confirm .form-control, .modal-confirm .btn {
      min-height: 40px;
      border-radius: 3px; 
    }
    .modal-confirm .close {
      position: absolute;
      top: -5px;
      right: -5px;
    }	
    .modal-confirm .modal-footer {
      border: none;
      text-align: center;
      border-radius: 5px;
      font-size: 13px;
    }	
    .modal-confirm .icon-box {
      color: #fff;		
      position: absolute;
      margin: 0 auto;
      left: 0;
      right: 0;
      top: -70px;
      width: 95px;
      height: 95px;
      border-radius: 50%;
      z-index: 9;
      background: #006811;
      padding: 15px;
      text-align: center;
      box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
    }
    .modal-confirm .icon-box i {
      font-size: 58px;
      position: relative;
      top: 3px;
    }
    .modal-confirm.modal-dialog {
      margin-top: 80px;
    }
    .modal-confirm .btn {
      color: #fff;
      border-radius: 4px;
      background: #006811;
      text-decoration: none;
      transition: all 0.4s;
      line-height: normal;
      border: none;
    }
    .modal-confirm .btn:hover, .modal-confirm .btn:focus {
      background: #00440c;
      outline: none;
    }
    .trigger-btn {
      display: inline-block;
      margin: 100px auto;
    }
    </style>
@section('content')
<div class="jumbotron">
    <div class="container">
        <div class="row">
            <div class="card col-md-4 shadow-sm">
                <div class="card-body">
                    <h3 class="card-title my-4">LOKASI TPS</h3>
                    <form method="post" action="{{ route('quickqount.form') }}">
                    {{ csrf_field() }}

                    <div class="row mb-12 my-3">
                        <label class="col-md-12 col-form-label" for="kota">Provinsi</label>
                        <div class="col-md-12">
                            @php
                                $provinces = new App\Http\Controllers\DependentDropdownController;
                                $provinces= $provinces->provinces();
                            @endphp
                            <select class="form-control" name="provinsi" id="provinsi" required>
                                <option>==Pilih Salah Satu==</option>
                                @foreach ($provinces as $item)
                                    <option value="{{ $item->id}}">{{ $item->name ?? '' }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('provinsi')
                            <label class="text-danger">{{ $message }}</label>
                        @enderror
                    </div>

                    <div class="row mb-12 my-3">
                        <label class="col-md-12 col-form-label" for="kota">Kabupaten</label>
                        <div class="col-md-12">
                            <select class="form-control" name="kota" id="kota" required>
                                <option>==Pilih Salah Satu==</option>
                            </select>
                        </div>
                        @error('kota')
                            <label class="text-danger">{{ $message }}</label>
                        @enderror
                    </div>

                    <div class="row mb-12 my-3">
                        <label class="col-md-12 col-form-label" for="kota">Dapil</label>
                        <div class="col-md-12">
                            <select class="form-control" name="dapils" id="dapils" required>
                                <option>==Pilih Salah Satu==</option>
                            </select>
                        </div>
                        @error('dapil')
                            <label class="text-danger">{{ $message }}</label>
                        @enderror
                    </div>

                    <div class="row mb-12 my-3">
                        <label class="col-md-12 col-form-label" for="kota">Kecamatan</label>
                        <div class="col-md-12">
                            <select class="form-control" name="kecamatan" id="kecamatan" required>
                                <option>==Pilih Salah Satu==</option>
                            </select>
                        </div>
                        @error('kecamatan')
                            <label class="text-danger">{{ $message }}</label>
                        @enderror
                    </div>

                    <div class="row mb-12 my-3">
                        <label class="col-md-12 col-form-label" for="kota">Desa</label>
                        <div class="col-md-12">
                            <select class="form-control" name="desa" id="desa" required>
                                <option>==Pilih Salah Satu==</option>
                            </select>
                        </div>
                        @error('desa')
                            <label class="text-danger">{{ $message }}</label>
                        @enderror
                    </div>

                    <div class="row mb-12 my-3">
                        <label class="col-md-12 col-form-label" for="kota">TPS</label>
                        <div class="col-md-12">
                            <select class="form-control" name="tps" id="tps" required>
                                <option>==Pilih Salah Satu==</option>
                            </select>
                        </div>
                        @error('desa')
                            <label class="text-danger">{{ $message }}</label>
                        @enderror
                    </div>

                    <div class="row mb-12 my-3">
                        <label class="col-md-12 col-form-label" for="kota">Pemilihan Caleg</label>
                        <div class="col-md-12">
                            <select class="form-control" name="caleg" id="caleg" required>
                                <option>==Pilih Salah Satu==</option>
                                <option value="dprdk">DPRD Kabupaten</option>
                                <option value="dprdp">DPRD Provinsi</option>
                                <option value="dprri">DPR RI</option>
                            </select>
                        </div>
                        @error('desa')
                            <label class="text-danger">{{ $message }}</label>
                        @enderror
                    </div>

                    <div class="row mb-12 my-3">
                        <button class="btn btn-success mx-3" type="submit">Kirim</button>
                    </div>
                    </form>
                </div>
            </div>
            <div class="col-md-8">
                <img src="media/a.png" width="100%">
            </div>
        </div>
    </div>
</div>

<script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"
></script>

@if(Session::has('error_code'))
<script>
    $(function() {
        $('#gagalnodal').modal('show');
    });
</script>
@endif


@if (Session::has('success_code'))
<script>
    $(function() {
        $('#suksesmodal').modal('show');
    });
</script>
@endif

<script>
    function onChangeSelect(url, id, name) {
        console.log(url);
        // send ajax request to get the cities of the selected province and append to the select tag
        $.ajax({
            url: url,
            type: 'GET',
            data: {
                id: id
            },
            success: function (data) {
                $('#' + name).empty();
                $('#' + name).append('<option>==Pilih Salah Satu==</option>');

                $.each(data, function (key, value) {
                    $('#' + name).append('<option value="' + key + '">' + value + '</option>');
                });
            }
        });
    }

    $(function () {
        $('#provinsi').on('change', function () {
            onChangeSelect('{{ route("regencys") }}', $(this).val(), 'kota');
        });

        $('#kota').on('change', function () {
            onChangeSelect('{{ route("districts") }}', $(this).val(), 'kecamatan');
        });
        $('#kota').on('change', function () {
            onChangeSelect('{{ route("dapils") }}', $(this).val(), 'dapils');
        });

        $('#kecamatan').on('change', function () {
            onChangeSelect('{{ route("villages") }}', $(this).val(), 'desa');
        });

        $('#desa').on('change', function () {
            onChangeSelect('{{ route("tps") }}', $(this).val(), 'tps');
        })
    });
</script>
@endsection