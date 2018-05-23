@extends ('master')

@section ('header')
	<h2>coba container</h2>
@stop

@section ('slide')
	<div class="col-md-12 col-sm-12">
		<h1>Cara Membuat tombol dengan Bootstrap</h1>
	<button type="button" class="btn btn-primary btn-lg">Large</button>
  	<button type="button" class="btn btn-primary btn-md">Medium</button>    
  	<button type="button" class="btn btn-primary btn-sm">Small</button>
  	<button type="button" class="btn btn-primary btn-xs">XSmall</button>
	</div>
@stop

@section ('sidebar-up')
	<div class="col-md-12 col-sm-12">
		<h1>Cara Membuat tombol dengan Bootstrap</h1>
	<button type="button" class="btn btn-primary btn-lg">Large</button>
  	<button type="button" class="btn btn-primary btn-md">Medium</button>    
  	<button type="button" class="btn btn-primary btn-sm">Small</button>
  	<button type="button" class="btn btn-primary btn-xs">XSmall</button>
	</div>
@stop

@section ('sidebar-left')
	<div class="form-group">
		<label>masukkan nama anda : </label>
		<input type="text" class="form-control">
	</div>
	<div class="form-group">
		<label>masukkan alamat anda : </label>
		<input type="text" class="form-control">
	</div>
	<button type="submit" class="btn btn-sm btn-warning">Submit</button>
@stop

@section ('sidebar-right')
	<img src="assets/img/map.jpg" class="img img-circle" alt="peta" width="304" height="236">
@stop