<div class="container-fluid">
    <div class="row py-2 d-flex text-center">
        <div class=" col-3 col-xs-3 col-sm-3 col-md-4 col-lg-4 col-xl-4 ">
            <nav class="px-1 navbar navbar-expand-lg navbar-light  w-100">
                <div class="container-fluid">

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
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
    </div>
    <div class="col-3 col-xs-3 col-sm-3 col-md-4 col-lg-4 col-xl-4 text-center logo">
        <a class="px-4 navbar-brand text-light" href="#"><img src="{{ asset('assets/img/front/midad_ul_maktaba_logo_header.png') }}" alt=""></a>
    </div>
    <div class=" col-5 col-xs-5 col-sm-5 col-md-4 col-lg-4 col-xl-4 text-left btn1-div">
        <button class="d-flex   nav-btn nav-btnn rounded-pill pull-right  mt-3 text-light"><span
                class="pt-1 px-3 ">Hello</span> <i class="py-2 pull-right  fa fa-plus" aria-hidden="true"></i></button>
    </div>
</div>



