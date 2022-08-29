@extends('master')

@section('title', 'Provinsi')
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
{{-- MODAL SUCCESS --}}
<div id="myModal" class="modal fade">
	<div class="modal-dialog modal-confirm">
  
		<div class="modal-content">
			<div class="modal-header">
				<div class="icon-box">
					<i class="fas fa-fw fa-check"></i>
				</div>				
				<h4 class="modal-title w-100">Terimakasih {{ $store[1] }}</h4>	
			</div>
			<div class="modal-body">
				<p class="text-center">Your booking has been confirmed. Check your email for detials.</p>
			</div>
			<div class="modal-footer">
				<a href="{{ url('/') }}" class="btn btn-success col-md-6">
          Kembali Ke Home
        </a>
        <a href="{{ url('/user/cetak/'.$store[2].'/'.$store[0]) }}" class="btn btn-success col-md-6">
          Cetak Bukti
        </a>
			</div>
		</div>

	</div>
</div>
{{-- MODAL SUCCESS --}}

<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"
>
</script>

<script>
  $(function() {
    $('#myModal').modal('show');
  });
</script>
@endsection
