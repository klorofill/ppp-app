@extends('admin.layout')
    
@section('admin-konten')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">
        REKAP HITUNG CEPAT
    </h1>
</div>

<!-- Content Row -->
<div class="row">
    
    <div class="col-xl-8 col-md-8 mb-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-success">Form Hitung Cepat</h6>
            </div>
            <div class="card-body">
                <form method="POST"
                action="{{ route('rekap.quick') }}">
                {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Provinsi</label>
                        <select class="form-control" name="provinsi" id="provinsi" required>
                            @php
                                $provinces = new App\Http\Controllers\DependentDropdownController;
                                $provinces= $provinces->provinces();
                            @endphp
                            <option>==Pilih Salah Satu==</option>
                            @foreach ($provinces as $item)
                                <option value="{{ $item->id}}">{{ $item->name ?? '' }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Kabupaten / Kota</label>
                        <select class="form-control" name="kota" id="kota" required>
                            <option>==Pilih Salah Satu==</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Dapil</label>
                        <select class="form-control" name="dapil" id="dapil" required>
                            <option>==Pilih Salah Satu==</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nama Calon</label>
                        <select class="form-control" name="candidate" id="candidate" required>
                            <option>==Pilih Salah Satu==</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">Rekap data</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-4 mb-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Cara Mencari Rekap Dukungan</h6>
            </div>
            <div class="card-body">
                <ol>
                    <li>The styling for this basic card example is created by using default Bootstrap</li>
                    <li>utility classes. By using utility classes, the style of the card component can be</li>
                    <li>easily modified with no need for any custom CSS!</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"
></script>
        
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
            onChangeSelect('{{ route("dapils") }}', $(this).val(), 'dapil');
        })
        $('#dapil').on('change', function () {
            onChangeSelect('{{ route("candidates") }}', $(this).val(), 'candidate');
        })
    });
</script>
@endsection

