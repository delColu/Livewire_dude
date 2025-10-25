<div>
    @if (session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif


    <form wire:submit.prevent="savepost">
        <div class="card p-4 shadow-sm" style="max-width: 100%; margin: auto;">
    <h4 class="mb-4 text-blue-500 text-4xl">Create Post</h4>


        <label class="form-label">Title: </label>
    <div class="border px-4 py-2">
        
        <input type="text" wire:model.live.debounce.500ms="title" class="form-control" style="width: 100%" ><br>
        
    </div>@error('title') <span class="text-danger small">{{ $message }}<br></span> @enderror<br>

        <label class="form-label">Content: </label>
    <div class="border px-4 py-2">
        <textarea wire:model.live.debounce.500ms="content" class="form-control" style="width: 100%"></textarea><br>
    </div>@error('content') <span class="text-danger small">{{ $message }}<br></span> @enderror<br>

        <div class="d-flex gap-2">
            <button class="btn btn-secondary border px-4 py-2 flex-fill text-blue-500" onclick="window.location.href='posts#'">
                Back
            </button>
            <button type="reset" class="btn btn-secondary border px-4 py-2 flex-fill text-red-500">
                Cancel
            </button>

            <button 
                type="submit" 
                class="btn btn-primary border px-4 py-2 flex-fill"
                wire:loading.attr="disabled"
                wire:target="savepost"
                onclick="window.location.href='posts#'"8
            >
                <span wire:loading.remove wire:target="savepost">Post</span>
                <span wire:loading wire:target="savepost">Saving...</span>
            </button>
        </div>

    </div>

    </form>
</div>
