<?php

namespace App\Livewire;
use Livewire\Component;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserForm extends Component
{
    public $email = '';
    public $name = '';
    public $password = '';


    protected $rules = [
        'email' => 'required|email|unique:users,email',
        'name' => 'required|min:3|unique:users,name',
        'password' => 'required|min:8',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }



    public function save()
    {
        // ✅ Validate input
        $validated = $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        // ✅ Create user in the database
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        // ✅ Optional: Clear the form
        $this->reset(['name', 'email', 'password']);

        // ✅ Feedback
        session()->flash('message', 'User created successfully!');

    }

    public function render()
    {
        return view('livewire.user-form');
    }
}
