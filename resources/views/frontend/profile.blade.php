@extends('layouts.frontend')
@section('content')
@if(Auth::check())
@include('frontend.common.header_register')
@else
@include('frontend.common.header')
@endif
<div class="container-fluid main">
    <div class="row w-100">
        <div class="col-xs-1 col-sm-2   col-md-3 col-lg-3"></div>
        <div class="col-xs-10 col-sm-8 col-md-6 col-lg-6 main-div">
            <!-- search input -->
            <!-- <form>
                <div class="text-center rounded-pill px-1 py-1">
                    <i class="fa fa-search  rounded-pill " aria-hidden="true"></i>
                    <input class="px-2 rounded-pill text-right" type="text">
                </div>
            </form> -->

            <div class="profile w-100 text-center">
                <div class="profile-info">
                <img class="profile-img  " src="https://www.postplanner.com/hs-fs/hub/513577/file-2886416984-png/blog-files/facebook-profile-pic-vs-cover-photo-sq.png?width=250&height=250&name=facebook-profile-pic-vs-cover-photo-sq.png" alt="{{ url('storage/' . $user->profile_photo) }}">
                <div class="mt-4">
                <p class="d-inline pr-3"><span>@</span>{{$user->username}}<span>.</span></p>
                <h6 class="d-inline-block">{{$user->name}}</h6>
                <br>
                <p class="whatsapp d-inline text-secondary pr-3">{{$user->show_phone_number ? $user->phone_number : str_repeat("*", strlen($user->phone_number))}}
                  <img  class=" ml-" src="{{asset('assets/img/front/whatsapp_ic.png ') }}" alt=""></p>
                <p class="d-inline text-secondary pl-3">{{$user->city->name}}
                   <i class="fal fa-map-marker-alt"></i></p>

                    <div class="rating-wrap">
                        <ul class="rating-stars"  data-toggle="modal" data-target="#RatingModal">
                            <li style="width:{{ ($user->ratings->sum('rating')/($user->ratings->count() == 0 ? 1 : $user->ratings->count()))*20 }}%" class="stars-active">
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

                   <br>
                   <div class="social-links ">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <a class="good-reads ref__link d-flex align-items-center justify-content-center" 
                                target="_blank" href="{{$user->twitter_link}}">
                                <img src="{{asset('assets/img/front/good_reads_logo.png ') }}" alt="">
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <a class="twitter ref__link d-flex align-items-center justify-content-center" target="_blank" href="{{$user->goread_link}}">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-4 ref__link__btn">
                            @livewire('chat.profile-chat-button', ['user_id' => $user->id])
                        </div>
                    </div>
                   {{-- <button class="btn counting">30 <span>counting</span></button> --}}
                  </div>
              </div>
                </div>
                
              </div>

            <!-- Post -->

            @foreach ($posts as $key => $post)
                @livewire('item', ['post' => $post], key($post->id))
            @endforeach
        </div>
        <div class="col-xs-1  col-sm-2 col-md-3 col-lg-3"></div>
    </div>

</div>

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
            <div class="mt-3 mb-4 px-3 rating-feedback-area" data-direction="rtl">
                @livewire('user-rating-form',['user_id' => $user->id])
            </div>
            <div class="modal-header no-radius text-center py-2">
                <h5 class="modal-title mx-auto">الطائف</h5>
            </div>
            @livewire('user-rating-list',['user_id' => $user->id])
        </div>
        <div class="modal-footer mt-5 border-0">
            
        </div>
    </div>
  </div>
</div>

@endsection

@push('scripts')
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {
            Livewire.on('triggerCommentDelete', array => {
                var r = confirm("Are you sure you want to delete comment?");
                if (r == true) {
                    Livewire.emit('deletePostComment'+array.post_id, array.comment_id, array.post_id);
                }
            });
        })
    </script>
@endpush



