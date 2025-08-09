<div>
   <!-- It's time to mine and craft - Minecraft Steve -->
   <input type="text" class="p-2 rounded-ed bg-gray-800 text-teak-200" placeholder="Add a new todo: " wire:model="todo">
   <button class="p-2 bg-teal-600 rounded-ed text-white" wire:click="addTodo">Add Todo</button>
   <!-- <input type="number" class="p-2 rounded-ed bg-gray-800 text-teak-200" placeholder="Remove a todo: " wire:model="todo">
   <button class="p-2 bg-teal-600 rounded-ed text-white" wire:click="removeTodo">Remove Todo</button> -->
   <ol class="flex flex-col gap-2">
    @foreach($todos as $todo)
        <li class="p-2 text-teal-200 font-medium">{{$todo}}</li>
    @endforeach
   </ol>
</div>
