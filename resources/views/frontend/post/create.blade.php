@extends('layouts.frontend')
@section('content')
@if(Auth::check())

@include('frontend.common.header_register')

@else
@include('frontend.common.header')

@endif
<div class="container-fluid main">
  @livewire('posts');

  </div>


@endsection

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
	$(function(){
		$("#fileupload").change(function(event) {
			var x = URL.createObjectURL(event.target.files[0]);
			$("#upload-img").attr("src",x);
			console.log(event);
		});
	})
</script> --}}
