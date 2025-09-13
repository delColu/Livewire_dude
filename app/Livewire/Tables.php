<?php

namespace App\Livewire;
use App\Models\User;

use Livewire\Component;

class Tables extends Component
{

    public $users;  // Declare the property here

    public function mount()
    {
        $this->users = User::take(20)->get();
    }

    public function render()
    {
        // Pass $users to the view explicitly or access it directly in the view
        return view('livewire.users.tables', [
            'users' => $this->users,
        ]);
    }

}
