<div>

    <!-- Comment Modal -->
<div class="modal fade custom-edit-modal" id="commentModal{{$post_id}}" tabindex="-1" aria-labelledby="commentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
          <div class="modal-header text-center py-2">
              <h5 class="modal-title mx-auto" id="commentModalLabel">الطائف</h5>
              <button type="button" class="close position-absolute" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body p-0">
            @if( $comments->hasPages() )
            <button wire:click="loadMoreItems" class="bg-transparent border-0 load-previous-comments-btn" type="button">
                <small>Load Previous Comments</small>
            </button>
             @endif
            @foreach($comments->reverse() as $comment)

              <div class="body-added-data p-3 border-bottom" data-direction="rtl">
                  <div class="d-flex">
                      <div class="added-user-avatar ml-3">
                          <img src="{{ url('storage/' . $comment->user->profile_photo) }}" width="40px" height="40px" alt="username" />
                      </div>
                      <div class="added-data-name">
                          <h5 class="mb-0 d-flex flex-wrap">
                            {{ Carbon\Carbon::parse($comment->updated_at)->diffForHumans() }}
                              <div class="added-data-tag" data-direction="ltr">
                                  <p class="mb-0">@ {{ $comment->user->name }}<span class="d-inline-block dot-tag mx-3"> . </span></p>
                              </div>
                          </h5>
                          <p class="mb-0 mt-1">{{ Carbon\Carbon::parse($comment->updated_at)->diffForHumans() }}</p>
                      </div>
                  </div>
                  <div class="added-comment text-right">
                      <p class="mb-0 mt-2"> {{ $comment->comment }}
                        @if(Auth::check())
                        @if($comment->user_id == Auth::user()->id)
                            @if($edit_comment_id == $comment->id)
                                <div class="py-2">
                                    <a class="mr-2" style="cursor: pointer;" wire:click.prevent="updateComment({{ $comment->id }})"><i class="far fa-check" style="color: #5d001d; font-size: 18px !important;" ></i></a>
                                    <a class="text-danger" style="cursor: pointer;" wire:click.prevent="cancelCommentEdit"><i class="fa fa-times" style="font-size: 18px !important;" aria-hidden="true"></i></a>
                                </div>
                            @else
                                <a class="mr-2" style="cursor: pointer;" wire:click.prevent="editComment({{ $comment->id }})"><i class="fa fa-edit" aria-hidden="true"  style="color: #5d001d; font-size: 18px !important;"></i></a>
                                <a class="text-danger" style="cursor: pointer;" wire:click.prevent="$emit('triggerCommentDelete',{'comment_id' : {{ $comment->id }}, 'post_id' : {{ $comment->post_id }}})"><i class="fa fa-trash"  style="font-size: 18px !important;" aria-hidden="true"></i></a>
                            @endif
                        @endif
                    @endif
                    </p>
                  </div>
              </div>
              @endforeach


          </div>
          @if(Auth::check())

          <div class="modal-footer mt-5">
              <div data-direction="rtl" class="w-100">
                  <ul class="list-unstyled d-flex w-100 mb-0 align-items-center">
                      <li class="ml-2">
                          <img src="{{ url('storage/' . Auth::user()->profile_photo) }}" width="35px" height="35px" alt="username" />
                      </li>
                      <li class="flex-1">
                          <div class="comment-post-field position-relative">
                              <input type="text"  wire:model="comment" name="post_comment" placeholder="الكاتب ت-هارف" class="w-100 border" />
                              @error('comment') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                      </li>
                      <!-- <li class="mr-3">
                          <label class="comment-post-field cursor-pointer position-relative mb-0">
                              <i class="fa fa-camera"></i>
                              <input type="file" class="d-none" name="post_photo"/>
                          </label>
                      </li> -->
                      <li class="mr-3">
                          <button type="button" wire:click.prevent="commentStore({{ $post_id }})" class="border-0 comment-post-field p-0 bg-transparent text-success">
                              <i class="fa fa-paper-plane"></i>
                          </button>
                      </li>
                  </ul>
              </div>
          </div>
          @endif

      </div>
    </div>
  </div>

    {{-- <div class="text-center">
        @if( $comments->hasPages() )
            <button wire:click="loadMoreItems" class="bg-transparent border-0 load-previous-comments-btn" type="button">
                <small>Load Previous Comments</small>
            </button>
        @endif
    </div>

    @foreach($comments->reverse() as $comment)
        <div class="row single_comment mb-3 bg-light m-2 rounded border">
            <div class="col-2 comment_btn icons_container h-100 d-flex align-items-center justify-content-center ">
                @if(Auth::check())
                    @if($comment->user_id == Auth::user()->id)
                        @if($edit_comment_id == $comment->id)
                            <div class="py-2">
                                <a class="mr-2" style="cursor: pointer;" wire:click.prevent="updateComment({{ $comment->id }})"><i class="far fa-check" style="color: #5d001d; font-size: 18px !important;" ></i></a>
                                <a class="text-danger" style="cursor: pointer;" wire:click.prevent="cancelCommentEdit"><i class="fa fa-times" style="font-size: 18px !important;" aria-hidden="true"></i></a>
                            </div>
                        @else
                            <a class="mr-2" style="cursor: pointer;" wire:click.prevent="editComment({{ $comment->id }})"><i class="fa fa-edit" aria-hidden="true"  style="color: #5d001d; font-size: 18px !important;"></i></a>
                            <a class="text-danger" style="cursor: pointer;" wire:click.prevent="$emit('triggerCommentDelete',{'comment_id' : {{ $comment->id }}, 'post_id' : {{ $comment->post_id }}})"><i class="fa fa-trash"  style="font-size: 18px !important;" aria-hidden="true"></i></a>
                        @endif
                    @endif
                @endif
            </div>
            <div class="col-10 comment_box pb-2">
                <a href="{{ route('user_profile',$comment->user->name) }}"> {{ $comment->user->name }}</a><br>
                @if($edit_comment_id == $comment->id)
                    <input type="text" class="form-control" wire:model="edit_comment_value">
                    @error('comment') <span class="text-danger error">{{ $message }}</span>@enderror
                @else
                    {{ $comment->comment }}<br>
                @endif
                <small class="text-muted">{{ Carbon\Carbon::parse($comment->updated_at)->diffForHumans() }}</small>
            </div>
            <div class="col-2 pl-1 img d-flex align-items-center justify-content-center">
                <img src="{{ url('storage/' . $comment->user->profile_photo) }}"
                alt="{{ $comment->user->name }}">
            </div>
        </div>
    @endforeach --}}

</div>