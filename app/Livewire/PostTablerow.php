<?php

namespace App\Livewire;

use Livewire\Component;

class PostTablerow extends Component
{
    public $post;

    public function archive(){
        $this->post->update(['is_archived' => true]);
    }
    public function unarchive(){
        $this->post->update(['is_archived' => false]);
    }
    public function render()
    {
        return view('livewire.post-tablerow');
    }
}
