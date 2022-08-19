@extends('index')

@section('title', 'Kandidat')

@section('konten')

<div class="row">

  @foreach ($candidates as $candidate)
  <div class="col-xl-3 col-md-6 mb-4">
  <div class="card border-left-success shadow h-100 py-2">
      <div class="card-body">
      <div class="row no-gutters align-items-center">
          <div class="col mr-2">
          <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
              {{ $candidate->name }}      
          </div>
          <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $candidate->name }}</div>
          </div>
          <div class="col-auto">
              {{ App\Models\Supporter::where('candidate_id', $candidate->id)->count() }}</i>
          </div>
      </div>
      </div>
  </div>
  </div>
  @endforeach

</div>

@endsection