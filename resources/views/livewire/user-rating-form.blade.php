<div>

<!-- Rating Modal -->
<div class="modal fade custom-edit-modal" id="RatingModal" tabindex="-1" aria-labelledby="RatingModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
          <div class="modal-header text-center py-2">
              <h5 class="modal-title mx-auto" id="RatingModalLabel">الطائف</h5>
              <button type="button" class="close position-absolute" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body p-0">
              <form>
              <div class="rating-wrap px-3 mt-4" data-direction="ltl">
                  <ul class="rating-stars d-flex w-100 position-static justify-content-center">
                      <li class="stars-active position-relative list-inline-item mr-3">
                          <span>4.0</span>
                      </li>
                      <li  class="stars-active position-relative list-inline-item">
                          <i class="fa fa-star"></i>
                      </li>
                      <li  class="stars-active position-relative list-inline-item">
                          <i class="fa fa-star"></i>
                      </li>
                      <li  class="stars-active position-relative list-inline-item">
                          <i class="fa fa-star"></i>
                      </li>
                      <li  class="stars-active position-relative list-inline-item">
                          <i class="fa fa-star"></i>
                      </li>
                      <li  class="position-relative list-inline-item">
                          <i class="fa fa-star"></i>
                      </li>
                  </ul>
              </div>
              <div class="mt-3 mb-4 px-3 rating-feedback-area" data-direction="rtl">
                  <textarea placeholder=" منذ شهر" rows="4" wire:model="comment" class="w-100 border"></textarea>
                  <button class="mt-3 btn-success border-0 text-white px-5" type="button"  wireTarget="store" type="submit">شهر</button>
              </div>
            </form>
              <div class="modal-header no-radius text-center py-2">
                  <h5 class="modal-title mx-auto">الطائف</h5>
              </div>
              <div class="body-added-data p-3 border-bottom" data-direction="rtl">
                  <div class="d-flex">
                      <div class="added-user-avatar ml-3">
                          <img src="{{asset('assets/img/front/profile_thumbnail1.png')}}" width="40px" height="40px" alt="username" />
                      </div>
                      <div class="added-data-name">
                          <h5 class="mb-0 d-flex flex-wrap">
                              منذ شهر
                              <div class="added-data-tag" data-direction="ltr">
                                  <p class="mb-0">@waleedKhalid<span class="d-inline-block dot-tag mx-3"> . </span></p>
                              </div>
                          </h5>
                          <p class="mb-0 mt-1">منذ أسبوعين</p>
                      </div>
                  </div>
                  <div class="added-comment text-right">
                      <p class="mb-0 mt-2">الكاتب ت-هارف ايكر من خط الفقر إلى المليارديرية في سنة ونصف ابحث عن هذا الكتاب ارجوا التواصل معي إذا كنت تمتلك هذا الكتاب شكرا</p>
                  </div>
              </div>

          </div>
          <div class="modal-footer mt-5 border-0">

          </div>
      </div>
    </div>
  </div>
{{--
    @if(!$already_rated)
        @if(Auth::user()->id != $user_id)
            <div class="mt-3">

                <form wire:submit.prevent="store">
                    <div class="form-group">
                        <label for="comment">Your rating</label>
                        <div class="rating-wrap">
                            <ul class="rating-stars">
                                <li style="width:{{ $rating*20 }}%" class="stars-active">
                                    @for ($i = 1; $i <= 5; $i++)
                                        <a href="#" wire:click.prevent="setRating('{{ $i }}')">
                                            <i class="fa fa-star"></i>
                                        </a>
                                    @endfor
                                </li>
                                <li>
                                    @for ($i = 1; $i <= 5; $i++)
                                        <a href="#" wire:click.prevent="setRating('{{ $i }}')">
                                            <i class="fa fa-star"></i>
                                        </a>
                                    @endfor
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="comment">Comment</label>
                        <textarea wire:model="comment" class="form-control shadow-none rounded-0 text-right" id="comment" cols="30" rows="3"></textarea>
                        @error('comment')
                            <small id="helpId" class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group text-center">
                        <button class="btn btn-primary" wireTarget="store" type="submit">
                            Save
                        </button>
                    </div>
                </form>
            </div>
        @endif
    @else
        <h3>Rate the User</h3>
        <div class="form-group">
            <label for="comment">Your rating</label>
            <div class="rating-wrap">
                <ul class="rating-stars">
                    <li style="width:{{ $rating*20 }}%" class="stars-active">
                        @for ($i = 1; $i <= 5; $i++)
                            <i class="fa fa-star"></i>
                        @endfor
                    </li>
                    <li>
                        @for ($i = 1; $i <= 5; $i++)
                            <i class="fa fa-star"></i>
                        @endfor
                    </li>
                </ul>
            </div>
        </div>
        <div class="form-group">
            <label for="comment">Comment</label>
            <textarea class="form-control shadow-none rounded-0 text-right" id="comment" cols="30" rows="3" disabled>{{ $comment }}</textarea>
            @error('comment')
                <small id="helpId" class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    @endif --}}
</div>