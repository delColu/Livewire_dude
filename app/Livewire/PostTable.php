<?php

namespace App\Livewire;
use App\Models\PostModel;

use Livewire\Component;

class PostTable extends Component
{

    public $posts;  // Declare the property here

    public function mount()
    {
        $this->posts = PostModel::take(20)->get();
    }

    public function render()
    {
        // Pass $posts to the view explicitly or access it directly in the view
        return view('livewire.post-table', [
            'posts' => $this->posts,
        ]);
    }

}

