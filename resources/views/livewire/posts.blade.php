<div>
    <div class="row w-100">
        <div class="col-xs-2 col-sm-2   col-md-3 col-lg-3"></div>
        <div class="col-xs-8 col-sm-8 col-md-6 col-lg-6 main-div">

            <form method="POST" enctype="multipart/form-data">
          <!-- Post -->
          <div class="post-container mt-4 px-3 pt-4 pb-4">
            <div class="row add-head" >
              <div class="col-12">
                <p class="text-center">{{ __('translation.add_book') }} <i class="rounded-pill pull-right  fa fa-plus plus-icon nav1-btn" style="padding: 0px 10px; font-size:10px; color:white" aria-hidden="true"></i></p>
              </div>
            </div>


            <div class="row d-flex  gx-5  add-img ">

              <div class="col-6   d-flex text-center dropzone ">
                                <div class=" profile-images-card">
                  <div class="profile-image">
                    <img src="http://localhost/midadbook/public/assets/img/front/upload_img.png" class="upload-icon" id="upload-img">
                  </div>
                  <div class="custom-file">
                    <label for="fileupload"><i class="rounded-pill pull-right  fas fa-camera plus-icon uimg-icon1 " aria-hidden="true"></i></label>
                    <input type="file" id="fileupload">
                  </div>
                </div>

              </div>

              <div class="col-6   d-flex text-center dropzone ">
                                <div class=" profile-images-card">
                  <div class="profile-image">
                    <img src="http://localhost/midadbook/public/assets/img/front/upload_img.png" class="upload-icon" id="upload-img">
                  </div>
                  <div class="custom-file">
                    <label for="fileupload"><i class="rounded-pill pull-right  fas fa-camera plus-icon uimg-icon1 " aria-hidden="true"></i></label>
                    <input type="file" id="fileupload">
                  </div>
                </div>

              </div>

            </div>


            <div class="row form-row" >
              <div class="col-12 form-col" >
                <input type="text" wire:model="title" class="form-control form-bor text-right" placeholder="{{ __('translation.add_title') }}" aria-label="{{ __('translation.add_title') }}">
              </div>
              @error('title') <span class="text-danger error">{{ $message }}</span>@enderror

              <div class="col-12 mt-4 form-col" >
                <select  wire:model="type_add" class="form-select" class="form-bor"  aria-label="Default select example">
                  <option selected> {{ __('translation.add_type') }}</option>
                  <option value="1"> {{ __('translation.required') }}</option>
                  <option value="2"> {{ __('translation.borrow_book') }}</option>
                  <option value="3"> {{ __('translation.sell') }}</option>
                  <option value="4"> {{ __('translation.exchange') }}</option>

                </select>
            </div>
            @error('type_add') <span class="text-danger error">{{ $message }}</span>@enderror



            </div>
            <div class="col-12 mt-4 mb-4 form-col" >
              <textarea type="text"  wire:model="description"  placeholder="{{ __('translation.description') }}" class="form-control form-bor text-right"  aria-label="{{ __('translation.description') }}">
                {{ __('translation.description') }}
            </textarea>

            </div>
            @error('description') <span class="text-danger error">{{ $message }}</span>@enderror

            <div class="col-auto text-center">
             <button type="submit"  wire:click.prevent="postStore" class="btn submit-btn ">
                <span wire:target="postStore"
                wire:loading.class="spinner-border spinner-border-sm"></span>
                {{ __('translation.submit') }}</button>
              </div>
            </div>
        <div class="col-xs-2  col-sm-2 col-md-3 col-lg-3"></div>
            </form>
      </div>
  </div>
