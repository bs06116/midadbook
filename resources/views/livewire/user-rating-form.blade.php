<div>
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
    @endif
</div>