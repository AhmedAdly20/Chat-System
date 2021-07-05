<?php

namespace App\Http\Livewire\Conversations;

use App\Models\Conversation;
use Livewire\Component;
use Livewire\WithFileUploads;

class ConversationReply extends Component
{
    use WithFileUploads;

    public $body = '';
    public $attachment = '';
    public $attachment_name = '';
    public $conversation;

    public function mount(Conversation $conversation){
        $this->conversation = $conversation;
    }
    public function render()
    {
        return view('livewire.conversations.conversation-reply');
    }

    public function reply(){

    }
}
