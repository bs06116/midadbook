<div class="container-fluid main pt-md-5 pt-3">
    <div class="row login_page w-100">
        <div class="col-xs-2 col-sm-2   col-md-3 col-lg-3"></div>
        <div class="col-xs-8 col-sm-8 col-md-6 col-lg-6 main-div">

            <!-- Register -->
            <div class="post-container mt-4 px-3 pt-4 pb-4">
                <div class="row add-head">
                    <div class="col-12">
                        <p class="text-center">{{__('translation.login')}} </p>
                    </div>
                </div>

                <form>

                    <div class="row">
                        <div class="col-md-12 text-right">
                            @if (session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session('message') }}
                                </div>
                            @endif
                            @if (session()->has('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="row form-row mx-0">

                        <div class="col-12 mt-4 form-col text-right">
                            <div class="position-relative form-ele-with-icon" style="height:50px;overflow:hidden;">
                                <input type="text" class="form-control h-100 form-bor text-right" placeholder="{{__('translation.email')}}"
                                wire:model="email" aria-label="Email">
                                <i class="fa fa-user position-absolute"></i>
                            </div>
                        </div>
                        <div class="col-12 text-right">
                        @error('email') <span class="text-danger error text-right">{{ $message }}</span>@enderror
                        </div>
                      

                        <div class="col-12 mt-4 form-col">
                            <div class="position-relative form-ele-with-icon" style="height:50px;overflow:hidden;">
                                <input type="password" class="form-control h-100 form-bor text-right" placeholder="{{__('translation.password')}}"
                                wire:model="password" aria-label="Password">
                                <i class="fa fa-lock position-absolute"></i>
                            </div>
                        </div>
                        <div class="col-12 text-right">
                        @error('password') <span class="text-danger error text-right">{{ $message }}</span>@enderror
                        </div>
                        

                    </div>

                    <div class="col-12 text-center mt-4">
                        <div class="text-center d-flex flex-wrap align-items-center justify-content-center">
                            <button type="submit" class="text-center btn mr-sm-3 login_btn"

                            wire:click.prevent="login">    <span wire:target="login" wire:loading.class="spinner-border spinner-border-sm"></span>
                            {{__('translation.login')}}
                            <i class="fa fa-arrow-right ml-2 pt-0 mr-0"></i>
                            </button>
                        <a href="{{ route('user/signup') }}" class="text-center text-decoration-none btn mt-sm-0 mt-3 login_btn" style="background:#5d001d !important;"> 
                            {{__('translation.signup')}}
                            <i class="fa fa-user ml-2 mr-0 pt-0"></i>
                        </a>
                        </div>
                    </div>
            </div>
            </form>

            <div class="col-xs-2  col-sm-2 col-md-3 col-lg-3"></div>

        </div>


    </div>
