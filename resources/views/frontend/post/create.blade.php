@extends('layouts.frontend')
@section('content')
@include('frontend.common.header')

<div class="container-fluid main">
    <div class="row w-100">
      <div class="col-xs-2 col-sm-2   col-md-3 col-lg-3"></div>
      <div class="col-xs-8 col-sm-8 col-md-6 col-lg-6 main-div">


        <!-- Post -->
        <div class="post-container mt-4 px-3 pt-4 pb-4">
          <div class="row add-head" >
            <div class="col-12">
              <p class="text-center">Lorem ipsum <i class="rounded-pill pull-right  fa fa-plus plus-icon nav1-btn" style="padding: 0px 10px; font-size:10px; color:white" aria-hidden="true"></i></p>
            </div>
          </div>


          <div class="row gx-5 u-img" >
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


          <div class="row form-row" >
            <div class="col-12 form-col" >
              <input type="text"  class="form-control form-bor text-right" placeholder="First name" aria-label="First name">
            </div>
            <div class="col-12 mt-4 form-col" >
              <select class="form-select" class="form-bor"  aria-label="Default select example">
                <option selected> select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
          </div>
          <div class="col-12 mt-4 form-col"  >
            <select class="form-select form-bor"   aria-label="Default select example">
              <option  selected> select menu</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
        </div>
        <div class="col-12 mt-4 form-col" >
          <div class="input-group flex-nowrap">
          <input type="number" style="width:65% !important"  placeholder="Number" class="form-control form-bor text-right"  aria-label="Number">
            <select class="form-select" class="form-bor"  aria-label="Default select example">
              <option selected> select</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
           
          </div>
        </div>
          </div>
          <div class="col-12 mt-4 mb-4 form-col" >
            <input type="text"  placeholder="Description" class="form-control form-bor text-right"  aria-label="Description">

          </div>
          <div class="col-auto text-center">
           <button type="submit" class="btn submit-btn ">Submit</button>
            </div>
          </div>







      <div class="col-xs-2  col-sm-2 col-md-3 col-lg-3"></div>

    </div>


  </div>


@endsection



