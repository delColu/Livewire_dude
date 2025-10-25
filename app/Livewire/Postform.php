<?php

namespace App\Livewire;

use App\Models\PostModel;
use Livewire\Component;

class Postform extends Component
{
    public $title = '';
    public $content = '';


    protected $rules = [
        'title' => 'required|min:5|max:255',
        'content' => 'required|min:2|max:750',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }



    public function savepost()
    {
        // Validate input
        $validated = $this->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string|max:750',
        ]);

        // Create user in the database
        PostModel::create([
            'title' => $this->title,
            'content' => $this->content,
            'user_id' => auth()->id(),
        ]);

        //Clear the form
        $this->reset(['title', 'content']);

        // Feedback
        session()->flash('message', 'Post created successfully!');

    }

    public function render()
    {
        return view('livewire.posts.postform');
    }
}
