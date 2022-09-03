@extends('master')

@section('title', 'Kandidat')

@section('content')
<div class="jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-md-6 my-4 shadow-sm">
                <div class="card border-left-success shadow h-100 py-4">
                    <h3 class="card-title my-2 text-center">Hitung Cepat</h3>
                    <div class="card-body">
                        <div class="card-body">
                          <div class="row">
                            <form method="post" action="{{ route('quickqount.add') }}">
                            {{ csrf_field() }}
                            <div class="col-md-12">
                                <table class="table">
                                @php 
                                    $no = 1; 
                                @endphp
                                <tr>
                                    <th>No Urut</th>
                                    <th>Nama Calon</th>
                                    <th>Jumlah Suara</th>
                                </tr>
                                @foreach ($candidates as $candidate)
                                <tr>
                                    <td>{{ $no++ }}</a></td>
                                    <td>{{ $candidate->name }}</td>
                                    <td>
                                        <input type="text" class="form-control" name="suara[]">
                                        <input type="hidden" value="{{$votingplace->id}}" class="form-control" name="votingplace[]">
                                        <input type="hidden" value="{{$candidate->id}}" name="candidate[]" >
                                    </td>
                                </tr>
                                @endforeach
                                <tr>
                                  <td colspan="2"> <b>Suara Partai</b> </td>
                                  <td>
                                    <input type="text" class="form-control" name="suarapartai">
                                  </td>
                                </tr>
                                </table>
                            </div>
                            <div class="col-md-12">
                              <input type="submit" value="Kirim" class="form-control btn-success">
                            </div>
                            </form>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteCategory" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="deleteCategory" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-body">
                Anda Yakin Memilih <span id="modal-category_name"></span>?
                <input type="hidden" id="category" name="category_id">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-white" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-success" id="modal-confirm_change">Pilih</button></a>
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
    function loadDeleteModal(id, name) {
        $('#modal-category_name').html(name);
        $('#modal-confirm_change').attr('onclick', `confirmDelete(${id})`);
        $('#deleteCategory').modal('show');
    }

    function confirmDelete(id) {
        var url = "{{ url('user/candidate') }}" + "/" + id;
        console.log(url),
        $.ajax({
            url: url,
            success: function(){ 
                window.location = url;
            }, 
        });
        

    }
</script>
@endsection