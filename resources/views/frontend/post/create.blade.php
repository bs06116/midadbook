@extends('layouts.frontend')
@section('content')
@if(Auth::check())

@include('frontend.common.header_register')

@else
@include('frontend.common.header')

@endif
  @livewire('posts')



@endsection
