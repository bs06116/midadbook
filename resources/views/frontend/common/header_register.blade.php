<div class="container-fluid ">
    <div class="row py-2 d-flex ">
        <div class="col-4  d-flex nav2">

            <nav class="navbar navbar-expand-lg align-items-center navbar-light users-img py-2">
                <div class="user-profile-img ">
                    <!-- <img id="user-icon" src="{{ url('storage/' . Auth::user()->profile_photo) }}" alt=""> -->
                    <img id="user-icon" src="https://www.postplanner.com/hs-fs/hub/513577/file-2886416984-png/blog-files/facebook-profile-pic-vs-cover-photo-sq.png?width=250&height=250&name=facebook-profile-pic-vs-cover-photo-sq.png" alt="">
                </div>
                <div class="user-name login-user1 text-light ">
                    <span class="d-block font-weight-bold">{{ Auth::user()->name }}</span>
                    <p class="mb-0">السعودیۃ، جدہ</p>
                </div>
            </nav>



            <div class="notifaction-icon align-self-center login-nav2">
                <div>
                    <a href="{{ route('myprofile.edit') }}"><i class="fa fa-cog text-white"></i></a>
                </div>
                {{-- <div class="noti mt-4" id="bell-icon"><img src="{{ asset('assets/img/front/bell_ic.png') }}" alt="">
                    <i class="badge1">9</i>
                </div> --}}

                <div>
                    @livewire('chat.chat-header-notification')
                </div>
            </div>

        </div>
        <div class="user-menu toggle text-right" id="toggle">
            {{-- <h4><a href="#"></a> Login</h4> --}}
            <h4><a href="{{route('user_profile',Auth::user()->username)}}">{{ __('translation.profile') }}</a></h4>

            <h4><a href="{{route('user/logout')}}"> {{ __('translation.logout') }}</a></h4>
        </div>
        <div class="notification_dd toggel" id="toggel">
            <ul class="notification_ul">
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
                <hr>
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
                <hr>
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
                <hr>
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
                <hr>
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
                <hr>
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
                <hr>
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
        </div>
        <div class="col-3 col-xs-3 col-sm-3 col-md-4 col-lg-4 col-xl-4 text-center logo   ">
            <a class=" px-4 navbar-brand text-light" href="{{ url('/') }}"><img
                    src="{{ asset('assets/img/front/midad_ul_maktaba_logo_header.png') }}" alt=""></a>
        </div>

        <div class=" col-5 col-xs-5 col-sm-5 col-md-4 col-lg-4 col-xl-4 text-left btn1-div align-self-center">
            <a href="{{ route('post/create') }}">
                <button class="d-flex   nav-btn nav-btnn rounded-pill pull-right text-light "><span
                        class="pt-2 px-2 "> {{ __('translation.add_book') }}</span> <i
                        class="py-2 pull-right  fa fa-plus" aria-hidden="true"></i></button>
            </a>

        </div>


    </div>

</div>






<script>
    // var bell = document.getElementById("bell-icon");

    var toggel = document.getElementById("toggel");

    // bell.addEventListener("click", dropdown);

    function dropdown() {

        if (!toggel.classList.value.includes('active')) {
            toggel.classList.add('active');
        } else {
            toggel.classList.remove('active');
        }

    }


    var user = document.getElementById("user-icon");

    var toggle = document.getElementById("toggle");

    user.addEventListener("click", dropdown1);

    function dropdown1() {

        if (!toggle.classList.value.includes('active')) {
            toggle.classList.add('active');
        } else {
            toggle.classList.remove('active');
        }

    }
</script>
