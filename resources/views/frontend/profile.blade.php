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
                <img class="profile-img  " src="{{ url('storage/' . $user->profile_photo) }}" alt="">
                <div class="">
                <p class="d-inline pr-3"><span>@</span>{{$user->username}}</p>
                <h6 class="d-inline-block ml-3 pl-3">{{$user->name}}</h6>
                <br>
                {{-- <p class="whatsapp d-inline text-secondary pr-3">{{$user->show_phone_number ? $user->phone_number : str_repeat("*", strlen($user->phone_number))}}
                  <img  class=" ml-" src="{{asset('assets/img/front/whatsapp_ic.png ') }}" alt=""></p> --}}
                <p class="d-inline text-secondary pl-3">{{$user->city->name}}
                   <i class="fal fa-map-marker-alt"></i></p>

                    <div class="rating-wrap">
                        <ul class="rating-stars">
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
                   <a class="good-reads" target="_blank" href="{{$user->twitter_link}}"><img src="{{asset('assets/img/front/good_reads_logo.png ') }}" alt=""></a>
                   <a class="twitter" target="_blank" href="{{$user->goread_link}}"><i class="fab fa-twitter"></i></a>
                   {{-- <button class="btn counting">30 <span>counting</span></button> --}}
                   <div style="position: absolute; margin: 0 0;float: right;right: 33%;top: 468px">
                    @livewire('chat.profile-chat-button', ['user_id' => $user->id])

                   </div>
                  </div>
              </div>
                </div>
                @auth
                    @livewire('user-rating-form',['user_id' => $user->id])
                @endauth
              </div>

            <!-- Post -->

            @foreach ($posts as $key => $post)
                @livewire('item', ['post' => $post], key($post->id))
            @endforeach
        </div>
        <div class="col-xs-1  col-sm-2 col-md-3 col-lg-3"></div>
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



