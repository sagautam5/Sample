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
		<div class="col-md-12">
			<div class="col-md-6">
				<h1 class="paragraph-header">About Us</h1>
				<hr/>
				<!-- <div class="col-md-3 logo-box">
					<img class="logo" src="{{asset('image/sagar.jpeg')}}">
				</div> -->
				<p class="text">The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most common words. Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words. If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing European languages. It will be as simple as Occidental; in fact, it will be Occidental. To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is.The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most common words. Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators.</p>
			</div>			
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
