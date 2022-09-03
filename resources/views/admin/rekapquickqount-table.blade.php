@extends('admin.layout')
    
@section('admin-konten')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">
        REKAP Hitung Cepat
    </h1>
    <a href="{{route('rekap.supporter.excel',"$candidates->id")}}" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Export Excel</a>
</div>

<!-- Content Row -->
<div class="row">
    
    <div class="col-xl-12 col-md-12 mb-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-success">Rekap Hitung Cepat {{ $candidates->name}}</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>TPS</th>
                                <th>DESA</th>
                                <th>NAMA</th>
                                <th>SUARA</th>
                                <th>ALAMAT</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no=1;
                            @endphp
                            @foreach ($quickqounts as $supporter)
                            <tr>
                                <td>{{ $no++}}</td>
                                <td>{{ $supporter->votingplace->code }}</td>
                                <td>{{ $supporter->votingplace->village->name }}</td>
                                <td>{{ $supporter->candidate->name}}</td>
                                <td>{{ $supporter->suara}}</td>
                                <td>
                                </td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"
></script>
@endsection

