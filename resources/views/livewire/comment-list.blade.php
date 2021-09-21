<div>
    <div class="text-center">
        @if( $comments->hasPages() )
            <button wire:click="loadMoreItems" class="bg-transparent border-0 load-previous-comments-btn" type="button">
                <small>Load Previous Comments</small>   
            </button>
        @endif
    </div>
    @foreach($comments->reverse() as $comment)
        <div class="row mb-3">
            <div class="col-2 pl-1 img ">
                <img src="{{ url('storage/' . $comment->user->profile_photo) }}"
                alt="{{ $comment->user->name }}">
            </div>
            <div class="col-8 comment_box">
                @if($edit_comment_id == $comment->id)
                    <input type="text" class="form-control" wire:model="edit_comment_value">
                    @error('comment') <span class="text-danger error">{{ $message }}</span>@enderror
                @else
                    {{ $comment->comment }}
                @endif
            </div>
            <div class="col-2 comment_btn">
                @if(Auth::check())
                    @if($comment->user_id == Auth::user()->id)
                        @if($edit_comment_id == $comment->id)
                            <div class="py-2">
                                <a class="mr-2" wire:click.prevent="updateComment({{ $comment->id }})"><i class="far fa-check" style="color: #5d001d; font-size: 18px !important;" ></i></a>
                                <a class="text-danger" wire:click.prevent="cancelCommentEdit"><i class="fa fa-times" style="font-size: 18px !important;" aria-hidden="true"></i></a>
                            </div>
                        @else
                            <a class="mr-2" wire:click.prevent="editComment({{ $comment->id }})"><i class="fa fa-edit" aria-hidden="true"  style="color: #5d001d; font-size: 18px !important;"></i></a>
                            <a class="text-danger" wire:click.prevent="$emit('triggerCommentDelete',{'comment_id' : {{ $comment->id }}, 'post_id' : {{ $comment->post_id }}})"><i class="fa fa-trash"  style="font-size: 18px !important;" aria-hidden="true"></i></a>
                        @endif
                    @endif
                @endif
            </div>
        </div>
    @endforeach
    
</div>