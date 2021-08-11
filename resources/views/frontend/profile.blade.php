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
            <!-- <form>
                <div class="text-center rounded-pill px-1 py-1">
                    <i class="fa fa-search  rounded-pill " aria-hidden="true"></i>
                    <input class="px-2 rounded-pill text-right" type="text">
                </div>
            </form> -->

            <div class="profile w-100 text-center">
                <div class="profile-info">
                <img class="profile-img  " src="{{ url('storage/' . $user->profile_photo) }}" alt="">
                <div class="">
                <p class="d-inline pr-3"><span>@</span>{{$user->username}}</p>
                <h6 class="d-inline-block ml-3 pl-3">{{$user->name}}</h6>
                <br>
                <p class="whatsapp d-inline text-secondary pr-3">{{$user->phone_number}}
                  <img  class=" ml-" src="{{asset('assets/img/front/whatsapp_ic.png ') }}" alt=""></p>
                <p class="d-inline text-secondary pl-3">{{$user->city->name}}
                   <i class="fal fa-map-marker-alt"></i></p>
                   <br>
                   <div class="social-links ">
                   <a class=" good-reads" href=""><img src="{{asset('assets/img/front/good_reads_logo.png ') }}" alt=""></a>
                   <a class=" twitter " href=""><i class="fab fa-twitter"></i></a>
                   <button class="btn counting">30 <span>counting</span></button>
                  </div>
              </div>
                </div>
              </div>

            <!-- Post -->

            @foreach ($posts as $key => $post)
            <div class="post-container mt-4 px-3 pt-4">

                @if ($post->book_type === 1)
                    
                 @elseif($post->book_type === 2)
                    <div class="butnborrow d-inline">
                        <button class='rounded-pill'><span class='px-1'>{{ __('translation.borrow_book') }}</span>
                    </div>
                @elseif($post->book_type === 3)
                    <div class="butnsell d-inline">
                        <button class='rounded-pill'><span class='px-1'>{{ __('translation.sell') }}</span>
                    </div>
                @else
                    <div class="butnexchange d-inline">
                        <button class='rounded-pill'><span class='px-1'>{{ __('translation.exchange') }}</span>
                    </div>

                @endif



                
                <div class="post-title text-right pt-2">
                    <h4>{{ $post->post_title }} </h4>
                    <p class="text-muted pt-2">{{ $post->post_body }}
                    </p>
                </div>

                <div class="post-img">
                    <img src="{{ url('storage/' . $post->featured_image) }}" alt="{{ $post->post_title }}">
                </div>
                <div class="row f-post pt-2">
                    <div class="col-5 col-xs-5 col-sm-5 col-md-6 col-lg-6 col-xl-6">
                        <!-- <p class="whatsapp mr-2">{{ $post->user->phone_number }} <img
                                src="{{ asset('assets/img/front/whatsapp_ic.png') }}" alt="">
                        </p> -->
                        <div class="butn d-inline">
                        <button class='rounded-pill'><span class='px-1'>{{ __('translation.required') }}</span>
                        </div>
                    </div>
                    <div class="col-7 col-xs-7 col-sm-7 col-md-6 col-lg-6 col-xl-6">
                        <div class="row d-flex">
                            <div class="col-6 text-right">
                                <p class="message">100 <img src="{{ asset('assets/img/front/comment_ic.png') }}" alt="">
                                </p>
                            </div>
                            <div class="col-6 text-center">
                                <p class=" heart ">100 <img src="{{ asset('assets/img/front/heart_line.png') }}" alt="">
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
                <hr>
        
        <div class="row pb-3 d-flex comment_div">
            <div class="col-2 pl-1 img">
                <img src="{{ url('storage/' . $post->user->profile_photo) }}" 
                alt="{{ $post->user->name }}">
            </div>
                <div class="col-8 comment_box">
                
                <input type="text" class="form-control" id="validationCustom01"  >
                </div>
                <div class="col-2 comment_btn">
                    <button class="btn mt-1 " type="submit"><i class="far fa-paper-plane"></i></button>
                </div>
        </div>
            </div>
        @endforeach
        </div>
        <div class="col-xs-1  col-sm-2 col-md-3 col-lg-3"></div>
    </div>

</div>


@endsection



