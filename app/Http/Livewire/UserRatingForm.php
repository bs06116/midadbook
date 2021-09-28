<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\UserRating;
use Illuminate\Support\Facades\Auth;

class UserRatingForm extends Component
{
    public $user_id;
    public $comment;
    public $rating;
    public $already_rated = false;

    public function render()
    {
        $user_rating = UserRating::where('user_id',$this->user_id)->where('rating_by_user',Auth::user()->id)->get();
        if($user_rating->count() > 0){
            $this->rating = $user_rating[0]->rating;
            $this->comment = $user_rating[0]->comment;
        }
        $this->already_rated =  $user_rating->count() > 0 ? true : false;
        return view('livewire.user-rating-form',['user_rating' => $user_rating]);
    }

    public function mount($user_id)
    {
        $this->user_id = $user_id;
        
    }

    function rules(){
        return [
            'comment' => 'required',
            'rating' => 'required'
        ];
    }

    public function store()
    {
        $this->validate();

        UserRating::create([
            'user_id' => $this->user_id,
            'rating_by_user' => Auth::user()->id,
            'rating' => $this->rating,
            'comment' => $this->comment,
        ]);

        $this->already_rated = true;
    }

    public function setRating($rating){
        $this->rating = $rating;
    }
}
