<div>
@foreach ($posts as $key => $post)
    <div class="post-container mt-4 px-3 pt-4">

        
            <div class="butn d-inline">
                <button class="rounded-pill "><span class="px-1">hello</span> </button>
            </div>
            <div class="text-right d-inline user-info">
                <span class="text-muted">@admin</span>
                <h6 class="d-inline">{{$post->user->name}}</h6>
                <span class="d-block text-right text-muted">hello</span>
            </div>
            <img src="{{ asset('assets/img/front/profile_thumbnail1.png') }}" class="user-img " alt="">
            <hr class="mt-3">

        


        <div class="post-title text-right pt-2">
            <h4>{{ $post->post_title }} </h4>
            <p class="text-muted pt-2">{{ $post->post_body }}
            </p>
        </div>

        <div class="post-img">
            <img src="{{ asset($post->featured_image) }}" alt="{{ $post->post_title }}">
        </div>
        <div class="row f-post pt-2">
            <div class="col-5 col-xs-5 col-sm-5 col-md-6 col-lg-6 col-xl-6">
                <p class="whatsapp mr-2">1005345423 <img src="{{ asset('assets/img/front/whatsapp_ic.png') }}" alt="">
                </p>
            </div>
            <div class="col-7 col-xs-7 col-sm-7 col-md-6 col-lg-6 col-xl-6">
                <div class="row d-flex">
                    <div class="col-6 text-right">
                        <p class="message">100 <img src="{{ asset('assets/img/front/comment_ic.png') }}" alt=""></p>
                    </div>
                    <div class="col-6 text-center">
                        <p class=" heart ">100 <img src="{{ asset('assets/img/front/heart_line.png') }}" alt=""></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endforeach
</div>
