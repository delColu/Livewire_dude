   
<tr class="{{ $post->is_archived ? 'bg-red-200' : ''}}">
   {{-- It's time to mine and craft. Minecraft steve --}}
        <td class="border px-4 py-2">{{$post->id}}</td>
        <td class="border px-4 py-2" style="height:65px">
            {{ $post->user->name }}
        </td>
        <td class="border px-4 py-2">{{$post->title}}</td>
        <td class="border px-4 py-2">{{$post->content}}</td>
        <td class="border px-4 py-2">{{$post->created_at->format('y-m-d')}}</td>
        {{-- <td class="border px-4 py-2" style="color: {{ $post->is_archived ? 'grey' : 'lightblue' }}">{{ $post->is_archived ? 'True' : 'False' }}</td> --}}
        <td class="border px-4 py-2 text-center" style="height:">
            <a href="#" wire:click="archive"
            wire:confirm="Are you sure you want to archive this post" 
            class="text-blue-600 hover:underline border px-4 py-2 bg-blue-100 hover:bg-blue-400">Archive</a>
            <a href="#" wire:click="unarchive" class="text-blue-600 hover:underline border px-4 py-2 bg-blue-100 hover:bg-blue-400">Unarchive</a>
        </td>
        <td class="border px-4 py-2 text-center">
        <a href="#"  wire:click="delete"
        wire:confirm="Are you sure you want to delete this post"
        class="text-blue-600 hover:underline border px-4 py-2 bg-blue-100 hover:bg-blue-400">
        Delete
        </a>
        </td>
</tr>

