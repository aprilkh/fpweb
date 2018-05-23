@extends('master')

@section('slide')
	
		@foreach($users as $user)
			<div class="col-md-4 col-sm-12">{{$user->name}} <br> {{$user->email}}</div>
		@endforeach
	
@endsection