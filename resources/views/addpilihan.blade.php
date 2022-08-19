
<!doctype html>
<html lang="en">
    <head>
        <title>Dependant Dropdown Laravolt/Indonesia</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body style="background-color: #f1f3f4">
        <form action="{{ route('add-supporter') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container pt-4 mt-4 ">
            <div class="card mx-auto p-2 col-md-8" >
                <h2 class="text-center">Masukan Data Diri</h2>
                <div class="card-body">
                <div class="row mb-3">
                <label class="col-md-3 col-form-label" for="provinsi">NIK</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" name="nik">
                    @if($errors->has('nik'))
                        <div class="error text-danger">{{ $errors->first('nik') }}</div>
                    @endif
                </div>
                </div>
            <div class="row mb-3">
                <label class="col-md-3 col-form-label" for="provinsi">Nama</label>
                <div class="col-md-9">
                    <input type="hidden" class="form-control" value="{{ $candidate->id }}" name="candidate_id" >
                    <input type="text" class="form-control" name="name">
                    @if($errors->has('name'))
                        <div class="error text-danger">{{ $errors->first('name') }}</div>
                    @endif
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-md-3 col-form-label" for="provinsi">Provinsi</label>
                <div class="col-md-9">
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
                    @if($errors->has('provinsi'))
                        <div class="error text-danger">{{ $errors->first('provinsi') }}</div>
                    @endif
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-md-3 col-form-label" for="kota">Kabupaten / Kota</label>
                <div class="col-md-9">
                    <select class="form-control" name="kota" id="kota" required>
                        <option>==Pilih Salah Satu==</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-md-3 col-form-label" for="kecamatan">Kecamatan</label>
                <div class="col-md-9">
                    <select class="form-control" name="kecamatan" id="kecamatan" required>
                        <option>==Pilih Salah Satu==</option>
                    </select>
                    @if($errors->has('kecamatan'))
                        <div class="error text-danger">{{ $errors->first('kecamatan') }}</div>
                    @endif
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-md-3 col-form-label" for="desa">Desa</label>
                <div class="col-md-9">
                    <select class="form-control" name="desa" id="desa" required>
                        <option>==Pilih Salah Satu==</option>
                    </select>
                    @if($errors->has('desa'))
                        <div class="error text-danger">{{ $errors->first('desa') }}</div>
                    @endif
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-md-3 col-form-label" for="provinsi">Kampung</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" name="domisili">
                    @if($errors->has('domisili'))
                        <div class="error text-danger">{{ $errors->first('domisili') }}</div>
                    @endif
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        </form>
    </div>
    <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>

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
                  onChangeSelect('{{ route("cities") }}', $(this).val(), 'kota');
              });
              $('#kota').on('change', function () {
                  onChangeSelect('{{ route("districts") }}', $(this).val(), 'kecamatan');
              })
              $('#kecamatan').on('change', function () {
                  onChangeSelect('{{ route("villages") }}', $(this).val(), 'desa');
              })
          });
      </script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->

      
  </body>
  </html>