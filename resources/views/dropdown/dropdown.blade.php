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
				<label>Category</label>
				<select class="form-control" name = "category">
					<option value="0">Please Select Category</option>
					@foreach($categories as $category)
						<option value="{{$category->id}}">{{$category->name}}</option>
					@endforeach
				</select>
			</div>
			<div class="col-md-6">
				<label>Products</label>
				<select class="form-control" name = "product">
					<option value="0">Please Select Product</option>
					@foreach($products as $product)
						<option value="{{$product->id}}">{{$product->name}}</option>
					@endforeach

				</select>
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
<script>
    jQuery(document).ready(function ($) {
        $('select[name=category]').on('change', function () {
        	var selected = $(this).find(":selected").attr('value');
        	$.ajax({
                        url: base_url + '/category/'+selected+'/products/',
                        type: 'GET',
                        dataType: 'json',

                }).done(function (data) {

                	var select = $('select[name=product]');
                	select.empty();
                	select.append('<option value="0" >Please Select Product</option>');
                    $.each(data,function(key, value) {
                		select.append('<option value=' + key.id + '>' + value.name + '</option>');
            		});
                    console.log("success");
            })
        });
    });
</script>
@endsection
