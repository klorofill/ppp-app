@extends('master')

@section('title', 'Provinsi')

@section('content')
<div class="jumbotron">
    <div class="container">
        <div class="row">
            <div class="card col-md-5 my-4 shadow-sm">
                <form method="GET" action="{{ route('suportter') }}">
                {{ csrf_field() }}
                <h3 class="card-title my-4 text-center">Pilih Lokasi Daerah</h3>
                <div class="row mb-12 my-3">
                    <label class="col-md-12 col-form-label" for="provinsi">Provinsi</label>
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
                </div>
                <div class="row mb-12 my-3">
                    <label class="col-md-12 col-form-label" for="kota">Kabupaten / Kota</label>
                    <div class="col-md-12">
                        <select class="form-control" name="kota" id="kota" required>
                            <option>==Pilih Salah Satu==</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-12 mt-4 mb-4">
                    <div class="col-md-12">
                        <button class="btn btn-success col-12" type="submit">Cari Sekarang</button>
                    </div>
                </div>
                </form>
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
            onChangeSelect('{{ route("districts") }}', $(this).val(), 'kecamatan');
        })
        $('#kecamatan').on('change', function () {
            onChangeSelect('{{ route("villages") }}', $(this).val(), 'desa');
        })
    });
</script>
@endsection