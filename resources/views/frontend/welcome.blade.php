@extends('layouts.frontend')
@section('content')
@include('frontend.common.header')

<div class="container-fluid main">
    <div class="row w-100">
        <div class="col-xs-1 col-sm-2   col-md-3 col-lg-3"></div>
        <div class="col-xs-10 col-sm-8 col-md-6 col-lg-6 main-div">
            <!-- search input -->
            <form>
                <div class="text-center rounded-pill py-1">
                    <i class="fa fa-search  rounded-pill " aria-hidden="true"></i>
                    <input class="px-4 rounded-pill" type="text">
                </div>
            </form>

            <!-- Post -->
            <div class="post-container mt-4 px-2 pt-4">

                <div class=" ">
                    <div class="butn d-inline">
                        <button class="rounded-pill px-4">hello</button>
                    </div>
                    <div class="text-right d-inline user-info">
                        <span class="text-muted">@admin</span>
                        <h6 class="d-inline">name</h6>
                        <span class="d-block text-right text-muted">hello</span>
                    </div>
                    <img src="{{asset('assets/img/front/profile_thumbnail1.png') }}" class="user-img " alt="">
                    <hr>

                </div>


                <div class="post-title text-right pt-2">
                    <h4>Lorem ipsum dolor sit amet </h4>
                    <p class="text-muted pt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure officiis,
                    </p>
                </div>

                <div class="post-img">
                    <img src="{{asset('assets/img/front/book_cover_img1.jpg') }}" alt="">
                </div>
                    <div class="row f-post pt-2">
                    <div class="col-6">
                    <p class="whatsapp mr-2">1005345423 <img src="{{asset('assets/img/front/whatsapp_ic.png') }}" alt=""></p>
                    </div>
                    <div class="col-6">
                        <div class="row d-flex">
                        <div class="col-6 "><p class="message  ">100 <img src="{{asset('assets/img/front/comment_ic.png') }}" alt=""></p></div>
                    <div class="col-6"><p class=" heart  ">100 <img src="{{asset('assets/img/front/heart_line.png') }}" alt=""></p></div>
                        </div>
                    </div>
                    
                    </div>
            </div>

            <div class="post-container mt-4 px-2 pt-4">

                <div class=" ">
                    <div class="butn d-inline">
                        <button class="rounded-pill px-4">hello</button>
                    </div>
                    <div class="text-right d-inline user-info">
                        <span class="text-muted">@admin</span>
                        <h6 class="d-inline">name</h6>
                        <span class="d-block text-right text-muted">hello</span>
                    </div>
                    <img src="{{asset('assets/img/front/profile_thumbnail2.png') }}" class="user-img " alt="">
                    <hr >

                </div>


                <div class="post-title text-right pt-2">
                    <h4>Lorem ipsum dolor sit amet </h4>
                    <p class="text-muted pt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure officiis,
                    </p>
                </div>

                <div class="post-img">
                    <img src="{{asset('assets/img/front/book_cover_img2.jpg') }}" alt="">
                </div>
                <div class="row f-post pt-2">
                    <div class="col-6">
                    <p class="whatsapp mr-2">1005345423 <img src="{{asset('assets/img/front/whatsapp_ic.png') }}" alt=""></p>
                    </div>
                    <div class="col-6">
                        <div class="row d-flex">
                        <div class="col-6 "><p class="message  ">100 <img src="{{asset('assets/img/front/comment_ic.png') }}" alt=""></p></div>
                    <div class="col-6"><p class=" heart  ">100 <img src="{{asset('assets/img/front/heart_line.png') }}" alt=""></p></div>
                        </div>
                    </div>
                    
                    </div>
                
            </div>


        </div>
        <div class="col-xs-1  col-sm-2 col-md-3 col-lg-3"></div>
    </div>

</div>
@endsection



