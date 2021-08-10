@extends('layouts.frontend')
@section('content')
@if(Auth::check())
@include('frontend.common.header_register')

@else
@include('frontend.common.header')

@endif

<div class="container-fluid main">
    <div class="row w-100">
        <div class="col-xs-1 col-sm-2  px-4 col-md-3 col-lg-3">

        </div>
        <div class="col-xs-10 col-sm-8 col-md-6 col-lg-6 main-div">
            <!-- search input -->
            <form>
                <div class="text-center rounded-pill mt-4 px-1 py-1">
                    <i class="fa fa-search  rounded-pill search" aria-hidden="true"></i>
                    <input class="px-4 rounded-pill text-right search-input" type="text">
                </div>
            </form>
            <!-- Post -->
            @livewire('showposts')

        </div>
        <div class="col-xs-1  col-sm-2 col-md-3 col-lg-3 chat-box">
            <!-- <div class="msg-box" id="msg-box" onclick="dropdown2()">
                <h4 id="chats"> Message</h4>
            </div> -->
            <!-- <div class="chat toggel" id="toggle1">
                <ul class="chat_ul">
                    <li class="starbucks success">
                        <div class="notify_icon">
                        <img src="{{ asset('assets/img/front/profile_thumbnail1.png') }}" alt="">
                        </div>
                        <div class="notify_data">
                            <div class="title">
                                Lorem, ipsum dolor.
                            </div>
                            <div class="sub_title">
                            Lorem ipsum dolor sit amet consectetur.
                        </div>
                        </div>
                        <div class="notify_status">
                            <p>Success</p>
                        </div>
                    </li>

                </ul>
            </div>  -->
            <div id="chat-bubble">
      <div class="chat-container">
        <div class="chat-header ">
          <div class="user-avatar" onclick="openChatBubble()">
            <div >
            <h5 >Message</h5>
            </div>
          </div>
        </div>


      </div>
      <div class="chat-body chat_contacts " >
            <ul class="notification_ul">
                <li class="chat_list">
                <div class="contacts">
                  <div class="date text-left">
                  <p>5:40 PM</p>
                  </div>
                  <div class="chat_title">
                    <div class="title text-right">

                       Lorem, ipsum dolor.
                        <i class="far fa-book"></i>
                    </div>

                    </div>
                    </div>
                    <div class="user_data">
                      <div class="user_name">
                        <p class="name"><span>@waleedKhalid.</span>asim </p>
                        <p class="desc"> Lorem ipsum dolor sit .</p>
                      </div>
                      <div class="user_profile_img">
                    <img src="{{ asset('assets/img/front/profile_thumbnail1.png') }}" alt="">
                    </div>
                    </div>

                </li>
                <br>
                <hr>
                <li class="chat_list">
                <div class="contacts">
                  <div class="date text-left">
                  <p>5:40 PM</p>
                  </div>
                  <div class="chat_title">
                    <div class="title text-right">

                       Lorem, ipsum dolor.
                        <i class="far fa-book"></i>
                    </div>

                    </div>
                    </div>
                    <div class="user_data">
                      <div class="user_name">
                        <p class="name"><span>@waleedKhalid.</span>asim </p>
                        <p class="desc"> Lorem ipsum dolor sit .</p>
                      </div>
                      <div class="user_profile_img">
                    <img src="{{ asset('assets/img/front/profile_thumbnail1.png') }}" alt="">
                    </div>
                    </div>

                </li>
                <br>
                <hr>
                <li class="chat_list">
                <div class="contacts">
                  <div class="date text-left">
                  <p>5:40 PM</p>
                  </div>
                  <div class="chat_title">
                    <div class="title text-right">

                       Lorem, ipsum dolor.
                        <i class="far fa-book"></i>
                    </div>

                    </div>
                    </div>
                    <div class="user_data">
                      <div class="user_name">
                        <p class="name"><span>@waleedKhalid.</span>asim </p>
                        <p class="desc"> Lorem ipsum dolor sit .</p>
                      </div>
                      <div class="user_profile_img">
                    <img src="{{ asset('assets/img/front/profile_thumbnail1.png') }}" alt="">
                    </div>
                    </div>

                </li>
                <br>
                <hr>
                <li class="chat_list">
                <div class="contacts">
                  <div class="date text-left">
                  <p>5:40 PM</p>
                  </div>
                  <div class="chat_title">
                    <div class="title text-right">

                       Lorem, ipsum dolor.
                        <i class="far fa-book"></i>
                    </div>

                    </div>
                    </div>
                    <div class="user_data">
                      <div class="user_name">
                        <p class="name"><span>@waleedKhalid.</span>asim </p>
                        <p class="desc"> Lorem ipsum dolor sit .</p>
                      </div>
                      <div class="user_profile_img">
                    <img src="{{ asset('assets/img/front/profile_thumbnail1.png') }}" alt="">
                    </div>
                    </div>

                </li>


            </ul>

        </div>
        

    </div>

         </div>
    </div>


</div>


@endsection

<script>
// var msg = document.getElementById("msg-box");

// var toggle1 = document.getElementById("toggle1");

// msg.addEventListener("click", dropdown2);

// function dropdown2(){

//     if(!toggle1.classList.value.includes('active')){
//         toggle1.classList.add('active');
//     }
//     else{
//         toggle1.classList.remove('active');
//     }

// }
function openChatBubble() {
        var element = document.getElementById("chat-bubble");
        element.classList.toggle("open")
      }
</script>