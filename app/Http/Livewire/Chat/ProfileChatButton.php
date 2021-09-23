<?php

namespace App\Http\Livewire\Chat;

use Livewire\Component;

class ProfileChatButton extends Component
{
    public $user_id;
    public function render()
    {
        return view('livewire.chat.profile-chat-button');
    }

    public function mount($user_id)
    {
        $this->user_id = $user_id;
    }
}
