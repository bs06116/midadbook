
<div class="container-fluid ">
    <div class="row py-2 d-flex ">
        <div class="col-4   ">
            <div class="row d-flex">
                <div class="col-6 login-nav d-flex">
                    <nav class="navbar navbar-expand-lg navbar-light users-img py-2">
                        <div class="user-profile-img ">
                            <img src="{{ asset('assets/img/front/profile_thumbnail1.png') }}" alt="">
                        </div>
                        <div class="user-name login-user1 text-light ">
                            <span class="d-block font-weight-bold">{{Auth::user()->name}}</span>
                            <span>{{Auth::user()->city->name}}</span>
                        </div>
                    </nav>
                </div>

                <div class="col-6 px-4 pt-3 text-center  login-nav login-nav1">
                    <div class="notifaction-icon d-flex login-nav2">
                        <div class="noti"><img src="{{ asset('assets/img/front/bell_ic.png') }}" alt=""></div>
                        <div class="noti"><img src="{{ asset('assets/img/front/bell_ic.png') }}" alt="">
                            <i class="badge1">9</i>
                        </div>
                        <div class=""><img src="{{ asset('assets/img/front/send_ic.png') }}" alt="">
                            <i class="badge1">9</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-3 col-xs-3 col-sm-3 col-md-4 col-lg-4 col-xl-4 text-center logo   ">
            <a class=" px-4 navbar-brand text-light" href="#"><img
                    src="{{ asset('assets/img/front/midad_ul_maktaba_logo_header.png') }}" alt=""></a>
        </div>

        <div class=" col-5 col-xs-5 col-sm-5 col-md-4 col-lg-4 col-xl-4 text-left btn1-div  ">
            <a href="{{route('post/create')}}">
                <button class="d-flex   nav-btn nav-btnn rounded-pill pull-right  mt-3 text-light "><span
                        class="pt-1 px-3 "> {{ __('translation.add_book') }}</span> <i class="py-2 pull-right  fa fa-plus"
                        aria-hidden="true"></i></button>
                    </a>
        </div>


    </div>
</div>
