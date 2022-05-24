<div class="container-fluid">
    <div class="row py-md-2 d-flex text-center">
        <div class=" col-3 col-xs-3 col-sm-3 col-md-4 col-lg-4 col-xl-4 ">
            <nav class="px-1 navbar navbar-expand-lg navbar-light  w-100">
                <div class="container-fluid">

                    <button class="nav-toggle-menu text-white">
                        <i id="menu" class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item px-4 border rounded-pill mr-2 ">
                                <a class="nav-link active text-light" aria-current="page"
                                    href="{{ route('user/login') }}"> {{ __('translation.login') }}
                                </a>
                            </li>
                            <li class="nav-item px-4 border rounded-pill">
                                <a class="nav-link text-light" href="{{ route('user/signup') }}">
                                    {{ __('translation.signup') }}
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </nav>
        </div>
        <div class="menu toggle text-right" id="toggle">
        <h4><a class="nav-link active text-light" aria-current="page"
            href="{{ route('user/login') }}"> {{ __('translation.login') }}
        </a></h4>
        </div>
    <div class="col-4 col-xs-3 col-sm-3 col-md-4 col-lg-4 col-xl-4 text-center logo">
        <a class="px-4 navbar-brand text-light"  href="{{url('/')}}"><img src="{{ asset('assets/img/front/midad_ul_maktaba_logo_header.png') }}" alt=""></a>
    </div>
    <div class=" col-5 col-xs-5 col-sm-5 col-md-4 col-lg-4 col-xl-4 text-left btn1-div">
        <a href="{{route('post/create')}}">
        <button class="d-flex align-items-center  nav-btn nav-btnn rounded-pill pull-right  mt-3 text-light"><span
                class=" px-2 ">{{ __('translation.add_book') }}</span> <i class="py-2 pull-right  fa fa-plus" aria-hidden="true"></i></button></a>
    </div>
  </div>

</div>
</div>


<script>
 var menu = document.getElementById("menu");

var toggle = document.getElementById("toggle");

menu.addEventListener("click", dropdown4);

function dropdown4() {

    if (!toggle.classList.value.includes('active')) {
        toggle.classList.add('active');
    } else {
        toggle.classList.remove('active');
    }

}

</script>