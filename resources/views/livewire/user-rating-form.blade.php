<div>
    @if(!$already_rated && auth()->check())
        @if(Auth::user()->id != $user_id)
            <div class="mt-3">
                <form wire:submit.prevent="store">
                    <div class="rating-wrap px-3 mt-4 d-flex justify-content-center" data-direction="ltl">
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
                    <div class="form-group">
                        <label for="comment">Comment</label>
                        <textarea wire:model="comment" placeholder=" منذ شهر" rows="4" class="w-100 border"></textarea>
                        {{-- <textarea wire:model="comment" class="form-control shadow-none rounded-0 text-right" id="comment" cols="30" rows="3"></textarea> --}}
                        @error('comment')
                            <small id="helpId" class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group text-center">
                        <button class="mt-3 btn-success border-0 text-white px-5" type="submit">شهر</button>
                    </div>
                </form>
            </div>
        @endif
    @else
        <div class="rating-wrap px-3 my-4 d-flex justify-content-center">
            
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
            <span class="mr-2">{{$user->ratings->sum('rating')}}</span>
        </div>
        <div class="form-group">
            <textarea placeholder=" منذ شهر" rows="4" class="w-100 border" disabled>{{ $comment }}</textarea>
            @error('comment')
                <small id="helpId" class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    @endif
</div>