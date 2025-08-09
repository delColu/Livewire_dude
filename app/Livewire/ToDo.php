<?php

namespace App\Livewire;

use Livewire\Component;

class ToDo extends Component
{

    public $todos = [];

    public $todo = "";
    public function addTodo(){
        if($this->todo ==''){
            return;
        }
        $this->todos[] = $this->todo;
        $this->reset('todo');
    }

    public function removeTodo($index){
        unset($this->todos[$index]);
        $this->todos = array_values($this->todos);
    }


    public function render()
    {
        return view('livewire.to-do');
    }
}
