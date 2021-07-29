@extends('layouts.frontend')
@section('content')
@include('frontend.common.header')

<div class="container-fluid main">
    <div class="row w-100">
      <div class="col-xs-2 col-sm-2   col-md-3 col-lg-3"></div>
      <div class="col-xs-8 col-sm-8 col-md-6 col-lg-6 main-div">


        <!-- Post -->
        <div class="post-container mt-4 px-3 pt-4 pb-4">
          <div class="row" style="border-start-start-radius: 20px;
          border-start-end-radius: 20px;
          background-color: #F1FBF3;
          margin-top: -24px;">
            <div class="col-12">
              <p class="text-center">Lorem ipsum <i class="rounded-pill pull-right  fa fa-plus plus-icon nav1-btn" style="padding: 0px 10px; font-size:10px; color:white" aria-hidden="true"></i></p>
            </div>
          </div>


          <div class="row gx-5 " style="padding-right: 13px;">
            <div class="col-4 text-left  ">
              <img src="{{asset('assets/img/front/upload_img.png') }}" class=" upload-img" alt="">
            </div>
            <div class="col-4 text-left  ">
              <img src="{{asset('assets/img/front/upload_img.png') }}" class=" upload-img" alt="">
            </div>
            <div class="col-4 text-left ">
              <img src="{{asset('assets/img/front/upload_img.png') }}" class=" upload-img" alt="">
            </div>
          </div>


          <div class="row" style="padding: 0px 15px !important;">
            <div class="col-12" style="border: 1px solid !important; border-radius: 50px !important;">
              <input type="text" style="border:none !important" class="form-control" placeholder="First name" aria-label="First name">
            </div>
            <div class="col-12 mt-4" style="border: 1px solid !important; border-radius: 50px !important;">
              <select class="form-select" style="border:none !important" aria-label="Default select example">
                <option selected> select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
          </div>
          <div class="col-12 mt-4" style="border: 1px solid !important; border-radius: 50px !important;" >
            <select class="form-select" style="border:none !important" aria-label="Default select example">
              <option selected> select menu</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
        </div>
        <div class="col-12 mt-4" style="border: 1px solid !important; border-radius: 50px !important;">
          <div class="input-group flex-nowrap">

            <select class="form-select" style="border:none !important" aria-label="Default select example">
              <option selected> select</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
            <input type="number" style="border:none !important" placeholder="Number" class="form-control"  aria-label="Number">
          </div>
        </div>
          </div>
          <div class="col-12 mt-4 mb-4" style="border: 1px solid !important; border-radius: 50px !important;">
            <input type="text" style="border:none !important" placeholder="Description" class="form-control"  aria-label="Description">

          </div>
          </div>







      <div class="col-xs-2  col-sm-2 col-md-3 col-lg-3"></div>

    </div>


  </div>


@endsection



