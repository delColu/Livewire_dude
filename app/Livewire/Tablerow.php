<?php

namespace App\Livewire;

use Livewire\Component;

class Tablerow extends Component
{
    public $user;

    public function archive(){
        $this->user->update(['is_archived' => true]);
    }
    public function unarchive(){
        $this->user->update(['is_archived' => false]);
    }
    public function render()
    {
        return view('livewire.tablerow');
    }
}
