@extends('layouts.frontend')
@section('content')
@include('frontend.common.header')

<div class="container-fluid main">
    <div class="row w-100">
        <div class="col-xs-1 col-sm-2   col-md-3 col-lg-3"></div>
        <div class="col-xs-10 col-sm-8 col-md-6 col-lg-6 main-div">
            
            <!-- search input -->
            <!-- <form>
                <div class="text-center rounded-pill px-1 py-1">
                    <i class="fa fa-search  rounded-pill " aria-hidden="true"></i>
                    <input class="px-2 rounded-pill text-right" type="text">
                </div>
            </form> -->

            <div class="profile w-100 text-center">
                <div class="profile-info">
                <img class="profile-img pb-4" src="{{asset('assets/img/front/profile_thumbnail_large.png ') }}" alt="">
                <div class="">
                <p class="d-inline pr-3">@admin</p>
                <h6 class="d-inline-block ml-3 pl-3">Name</h6>
                <br>
                <p class="whatsapp d-inline text-secondary pr-3">1234 1234567 
                  <img  class=" ml-" src="{{asset('assets/img/front/whatsapp_ic.png ') }}" alt=""></p>
                <p class="d-inline text-secondary pl-3">location
                   <i class="fal fa-map-marker-alt"></i></p>
                   <br>
                   <div class="social-links ">
                   <a class=" good-reads" href=""><img src="{{asset('assets/img/front/good_reads_logo.png ') }} " alt=""></a>
                   <a class=" twitter " href=""><i class="fab fa-twitter"></i></a>
                   <button class="btn counting">30 <span>counting</span></button>
                  </div>
              </div>
                </div>
              </div>
            
            <!-- Post -->
            @livewire('showposts')

        </div>
        <div class="col-xs-1  col-sm-2 col-md-3 col-lg-3"></div>
    </div>

</div>


@endsection



