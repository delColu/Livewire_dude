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

    public function delete()
    {
        // If your User model uses SoftDeletes, this will soft-delete.
        // Otherwise, it will permanently delete the record.
        $this->user->delete();


        // Optionally, emit an event or redirect
        // $this->dispatch('userDeleted', $this->user->id);

        // Or, if you want to redirect after deleting:
        // return redirect()->route('users.index');
    }



    public function render()
    {
        return view('livewire.tablerow');
    }
}
