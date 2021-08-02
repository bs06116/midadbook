<div class="container-fluid main">
    <div class="row w-100">
      <div class="col-xs-2 col-sm-2   col-md-3 col-lg-3"></div>
      <div class="col-xs-8 col-sm-8 col-md-6 col-lg-6 main-div">


        <!-- Register -->
        <div class="post-container mt-4 px-3 pt-4 pb-4">
          <div class="row add-head" >
            <div class="col-12">
              <p class="text-center">Lorem ipsum <i class="rounded-pill pull-right  fas fa-pencil-alt plus-icon nav1-btn" style="padding: 0px 9px; font-size:10px; color:white" aria-hidden="true"></i></p>
            </div>
          </div>


          <div class="row gx-5 u-img px-4" >
            <div class="col-2 text-center dropzone ">
             <!-- <img src="{{asset('assets/img/front/upload_img.png') }}" class="upload-icon" />
                 <input type="file" class="upload-input" /> -->
                </div>

            <div class="col-8 text-center   ">
             <img src="{{asset('assets/img/front/profile_thumbnail_large.png') }}" class="mt-4" />
                 <input type="file" class="upload-input" />

            </div>

            <div class="col-2 text-center dropzone ">
             <!-- <img src="{{asset('assets/img/front/upload_img.png') }}" class="upload-icon" />
                 <input type="file" class="upload-input" /> -->
            </div>

            <!-- <div class="col-4 text-left  ">
              <img src="{{asset('assets/img/front/upload_img.png') }}" class=" upload-img" alt="">
            </div>
            <div class="col-4 text-left ">
              <img src="{{asset('assets/img/front/upload_img.png') }}" class=" upload-img" alt="">
            </div> -->
          </div>


          <div class="row form-row" >
            <div class="col-12 form-col" >
              <input type="text"  class="form-control form-bor text-right" placeholder="Full Name" aria-label="First name">
            </div>
            <div class="col-12 mt-4 form-col" >
              <input type="text"  class="form-control form-bor text-right" placeholder="username" aria-label="First name">
            </div>
            <div class="col-12 mt-4 form-col" >
              <input type="password"  class="form-control form-bor text-right" placeholder="Password" aria-label="Password">
            </div>
            <div class="col-12 py-2 mt-4 form-col" >
            <i class="fal fa-map-marker-alt"></i>
              <select class="form-select " class="form-bor"  aria-label="Default select example">
                <option selected> City</option>
                <option value="1">One <img src="{{asset('assets/img/front/upload_img.png') }}"  /></option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
          </div>


        <div class="col-12 mt-4 form-col" >
          <div class="input-group flex-nowrap">
          <input type="number" style="width:65% !important"  class="form-control form-bor text-right"  aria-label="Number">
          <input type="text"   placeholder="+966" class="mt-1 form-control code text-right disabled"  aria-label="Number">

          </div>
        </div>
        <div class="col-12 mt-4 form-col form-link" >
          <div class="input-group flex-nowrap ">
          <input type="text" style="width:65% !important"   class=" form-control form-bor text-right"  aria-label="Number">
          <i class="fab fa-twitter px-2 py-2 twi"></i>

          </div>
        </div>
        <div class="col-12 mt-4 form-col form-link" >
          <div class="input-group flex-nowrap">
          <input type="text" style="width:65% !important"   class="form-control form-bor text-right"  aria-label="Number">
          <i class="fab fa-goodreads-g px-2 py-2 good"></i>

          </div>
        </div>
          </div>

          <div class="col-12 text-center">
              <div class="row d-flex pt-4 ">
                  <div class="col-6 text-right">
                  <button type="submit" class="px-4 btn submit-btn " style="background-color:#f3f8f4 !important; color:#6A686C !important">Submit</button>
                  </div>
                  <div class="col-6 text-left">
                  <button type="submit" class="px-4 btn submit-btn ">Submit</button>
                  </div>
              </div>


            </div>

          </div>







      <div class="col-xs-2  col-sm-2 col-md-3 col-lg-3"></div>

    </div>


  </div>

{{-- <div>
    <div class="row">
        <div class="col-md-12">
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
    @if($registerForm)
        <form>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Name :</label>
                        <input type="text" wire:model="name" class="form-control">
                        @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Email :</label>
                        <input type="text" wire:model="email" class="form-control">
                        @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Password :</label>
                        <input type="password" wire:model="password" class="form-control">
                        @error('password') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <button class="btn text-white btn-success" wire:click.prevent="registerStore">Register</button>
                </div>
                <div class="col-md-12">
                    <a class="text-primary" wire:click.prevent="register"><strong>Login</strong></a>
                </div>
            </div>
        </form>
    @else
        <form>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Email :</label>
                        <input type="text" wire:model="email" class="form-control">
                        @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Password :</label>
                        <input type="password" wire:model="password" class="form-control">
                        @error('password') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <button class="btn text-white btn-success" wire:click.prevent="login">Login</button>
                </div>
                <div class="col-md-12">
                    Don't have account? <a class="btn btn-primary text-white" wire:click.prevent="register"><strong>Register Here</strong></a>
                </div>
            </div>
        </form>
    @endif
</div> --}}