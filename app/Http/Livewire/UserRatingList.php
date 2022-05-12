<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\UserRating;

class UserRatingList extends Component
{
    public $user_id = null;

    public function render()
    {
        $data['user_ratings'] = UserRating::with('ratingBy')->where('user_id', $this->user_id)->get();
        return view('livewire.user-rating-list', $data);
    }
}
