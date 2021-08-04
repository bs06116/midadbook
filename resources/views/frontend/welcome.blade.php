@extends('layouts.frontend')
@section('content')
@if(Auth::check())
@include('frontend.common.header_register')

@else
@include('frontend.common.header')

@endif

<div class="container-fluid main">
    <div class="row w-100">
        <div class="col-xs-1 col-sm-2   col-md-3 col-lg-3"></div>
        <div class="col-xs-10 col-sm-8 col-md-6 col-lg-6 main-div">
            <!-- search input -->
            <form>
                <div class="text-center rounded-pill mt-4 px-1 py-1">
                    <i class="fa fa-search  rounded-pill " aria-hidden="true"></i>
                    <input class="px-4 rounded-pill text-right" type="text">
                </div>
            </form>
            <!-- Post -->
            @livewire('showposts')

        </div>
        <div class="col-xs-1  col-sm-2 col-md-3 col-lg-3"></div>
    </div>

</div>


@endsection



