<div class="post-container mt-4 px-3 pt-4">
    <div class="d-flex align-items-center">
    @if ($post->book_type == 1)
        <div class="butn d-inline">
            <button class='rounded-pill'><span class='px-1'>{{ __('translation.required') }}</span>
        </div>
    @elseif($post->book_type == 2)
        <div class="butnborrow d-inline">
            <button class='rounded-pill'><span class='px-1'>{{ __('translation.borrow_book') }}</span>
        </div>
    @elseif($post->book_type == 3)
        <div class="butnsell d-inline">
            <button class='rounded-pill'><span class='px-1'>{{ __('translation.sell') }}</span>
        </div>
    @else
        <div class="butnexchange d-inline">
            <button class='rounded-pill'><span class='px-1'>{{ __('translation.exchange') }}</span>
        </div>

    @endif

    <div class="text-right d-flex align-items-center user-info ml-auto" style="position:static;">
        <div >
            <span class="text-muted"><span>@</span>{{ $post->user->username }}</span>
            <h6 class="d-inline"><a href="{{ $post->user->username }}">{{ $post->user->name }}</a></h6>
            <span class="d-block text-right text-muted">{{ $post->user->city->name }}</span>
        </div>
    </div>
    <img src="{{ url('storage/' . $post->user->profile_photo) }}" class="user-img ml-3"
        alt="{{ $post->user->name }}" style="position:static;">
</div>
        <!-- <img src="{{ asset('assets/img/front/profile_thumbnail_large.png') }}" class="user-img "
        alt="{{ $post->user->name }}"> -->
    <hr class="mt-3">
    <div class="post-title text-right pt-2">
        <h4>{{ $post->post_title }} </h4>
        <p class="text-muted pt-2">{{ $post->post_body }}
        </p>
    </div>
    <div class="d-flex post_images ">
            <!-- <img class="w-50 mr-1" style="max-height: 200px;object-fit:cover"
            src="{{ asset('assets/img/front/profile_thumbnail_large.png') }}" alt="{{ $post->post_title }}"> -->
            <img class="w-50 mr-1" style="max-height: 200px;object-fit:cover"
            src="{{ url('storage/' . $post->featured_image) }}" alt="{{ $post->post_title }}">
            @if ($post->image_second != '')
            <img class="w-50" style="max-height: 200px;object-fit:cover"
            src="{{ url('storage/' . $post->image_second) }}" alt="">
        <!-- <img class="w-50" style="max-height: 200px;object-fit:cover"
            src="{{ asset('assets/img/front/profile_thumbnail_large.png') }}" alt=""> -->
            @endif


    </div>
    <div class="d-flex post_images mt-1">

        @if ($post->image_third != '')
            <img class="w-50 mr-1" style="max-height: 200px;object-fit:cover"
                src="{{ url('storage/' . $post->image_third) }}" alt="{{ $post->image_third }}">

        @endif
        @if ($post->image_fourth != '')

            <img class="w-50" style="max-height: 200px;object-fit:cover"
                src="{{ url('storage/' . $post->image_fourth) }}" alt="{{ $post->image_fourth }}">

            @endif

    </div>


    <div class="row f-post pt-2">
        <div class="col-5 col-xs-5 mt-3 col-sm-5 col-md-6 col-lg-6 col-xl-6">
            <p class="whatsapp mr-2 d-flex align-items-center">
                @if ($post->user->show_phone_number)
                    <a href=" https://wa.me/{{ $post->user->phone_number }}" class="mr-3">{{ $post->user->phone_number }}</a>
                    <img src="{{ asset('assets/img/front/whatsapp_ic.png') }}" alt="">
                @else
                    {{ $post->user->show_phone_number ? $post->user->phone_number : str_repeat('*', strlen($post->user->phone_number)) }}
                    <img src="{{ asset('assets/img/front/whatsapp_ic.png') }}" alt="">
                @endif
            </p>
        </div>
        <div class="col-7 col-xs-7 col-sm-7 col-md-6 col-lg-6 col-xl-6">

            <div class="row d-flex">
                <div class="col-6 mt-3 text-right">
                    <p class="message d-flex align-items-center justify-content-center" data-toggle="modal" data-target="#commentModal{{ $post->id }}">
                       <span class="counter_span mr-2">{{ $comment_count }}</span> <img src="{{ asset('assets/img/front/comment_ic.png') }}" alt="">
                    </p>
                </div>

                <div class="col-6 mt-3 text-center">
                    <p class="heart d-flex align-items-center justify-content-end">
                        {{-- {{ $post->like }} --}}
                        <span class="counter_span mr-2">{{ $post->like->count() }}</span>
                        @if (!Auth::check())
                            <img wire:key="like-{{ $post->id }}" wire:loading.attr="disabled"
                                src="{{ asset('assets/img/front/heart_line.png') }}" alt="">
                        @else
                            @isset($postId)
                                <img wire:key="dislike-{{ $post->id }}" wire:click="dislike({{ $post->id }})"
                                    wire:loading.attr="disabled" src="{{ asset('assets/img/front/heart_filled.png') }}"
                                    alt="">
                            @else
                                <img wire:key="like-{{ $post->id }}" wire:click="like({{ $post->id }})"
                                    wire:loading.attr="disabled" src="{{ asset('assets/img/front/heart_line.png') }}"
                                    alt="">
                            @endisset

                            <a href="#" class="pl-5 ml-3 text-danger"
                                wire:click.prevent="report({{ $post->id }})"><i
                                    class="fas fa-exclamation-triangle"></i></a>
                        @endif

                    </p>

                </div>
            </div>
        </div>

    </div>
    <div class="pb-3 comment_div">
        {{-- @if (Auth::check())
            <div class="row single_comment mb-3 py-2 m-2">
                <div class="col-2 icons_container comment_btn h-100 ">
                    <button class="btn mt-1 " wire:click.prevent="commentStore({{ $post->id }})"><i class="far fa-paper-plane"></i></button>
                </div>
                <div class="col-10 comment_box">
                    <input type="text" class="form-control" wire:model="comment">
                    @error('comment') <span class="text-danger error">{{ $message }}</span>@enderror
                </div>
                <div class="col-2 pl-1 img d-flex justify-content-center align-items-center">
                    <img src="{{ url('storage/' . Auth::user()->profile_photo) }}"
                    alt="{{ Auth::user()->name }}">
                </div>
            </div>
        @endif --}}
        @livewire('comment-list', ['post_id' => $post->id])
    </div>
</div>
