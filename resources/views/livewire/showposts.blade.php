<div>
    @foreach ($posts as $key => $post)
        <div class="post-container mt-4 px-3 pt-4">

            @if ($post->book_type === 1)
                <div class="butn d-inline">
                    <button class='rounded-pill'><span class='px-1'>{{ __('translation.required') }}</span>
                    </div>
             @elseif($post->book_type === 2)
                <div class="butnborrow d-inline">
                    <button class='rounded-pill'><span class='px-1'>{{ __('translation.borrow_book') }}</span>
                </div>
            @elseif($post->book_type === 3)
                <div class="butnsell d-inline">
                    <button class='rounded-pill'><span class='px-1'>{{ __('translation.sell') }}</span>
                </div>
            @else
                <div class="butnexchange d-inline">
                    <button class='rounded-pill'><span class='px-1'>{{ __('translation.exchange') }}</span>
                </div>

            @endif

            <div class="text-right d-inline user-info">
                <span class="text-muted"><span>@</span>{{ $post->user->username }}</span>
                <h6 class="d-inline"><a href="{{ $post->user->username }}">{{ $post->user->name }}</a></h6>
                <span class="d-block text-right text-muted">{{ $post->user->city->name }}</span>
            </div>
            <img src="{{ url('storage/' . $post->user->profile_photo) }}" class="user-img "
                alt="{{ $post->user->name }}">
            <hr class="mt-3">
            <div class="post-title text-right pt-2">
                <h4>{{ $post->post_title }} </h4>
                <p class="text-muted pt-2">{{ $post->post_body }}
                </p>
            </div>

            <div class="post-img">
                <img src="{{ url('storage/' . $post->featured_image) }}" alt="{{ $post->post_title }}">
            </div>
            <div class="row f-post pt-2">
                <div class="col-5 col-xs-5 col-sm-5 col-md-6 col-lg-6 col-xl-6">
                    <p class="whatsapp mr-2">{{ $post->user->phone_number }} <img
                            src="{{ asset('assets/img/front/whatsapp_ic.png') }}" alt="">
                    </p>
                </div>
                <div class="col-7 col-xs-7 col-sm-7 col-md-6 col-lg-6 col-xl-6">
                    <div class="row d-flex">
                        <div class="col-6 text-right">
                            <p class="message">100 <img src="{{ asset('assets/img/front/comment_ic.png') }}" alt="">
                            </p>
                        </div>
                        <div class="col-6 text-center">
                            <p class=" heart "  x-data>

                                {{-- <span x-text="$wire.totalLike"></span> --}}

                                <img  wire:model="like.{{ $post->id }}" wire:click="like({{ $post->id }})" src="{{ asset('assets/img/front/heart_line.png') }}" alt="">
                                {{-- <img  wire:key="dislike-{{$pot->id}}" wire:click="dislike({{ $post->id }})" src="{{ asset('assets/img/front/heart_filled.png') }}" alt=""> --}}


                            </p>
                            {{-- <p class=" heart ">
                                {{$this->totalLike}}


                                @if($like==false)
                                <img wire:key="like-{{$post->id}}" wire:click="$emitSelf('like',{{ $post->id }})" src="{{ asset('assets/img/front/heart_line.png') }}" alt="">
                                @else
                                <img wire:key="dislike-{{$post->id}}" wire:click="dislike({{ $post->id }})" src="{{ asset('assets/img/front/heart_filled.png') }}" alt="">
                                @endif


                            </p> --}}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endforeach
</div>
