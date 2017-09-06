@extends('layout.master')
@section('title', 'Sagar Gautam')
@section('assets')
@parent

@endsection

@section('header')
	@include('layout.header')
@endsection

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 ">
		<h1>Hello!</h1>		
		<h2>It's Sagar Speaking</h2>
		</div>
	</div>
</div>
@endsection
@section('footer')
	@include('layout.footer')
@endsection
@section('imports')
@parent
@endsection
