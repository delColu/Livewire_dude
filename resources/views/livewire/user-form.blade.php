<div>
    @if (session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif


    <form wire:submit.prevent="save">
        <div class="card p-4 shadow-sm" style="max-width: 500px; margin: auto;">
    <h4 class="mb-4 text-blue-500 text-4xl">Create User</h4>

    <div class="border px-4 py-2">
        <label class="form-label">Name</label>
        <input type="text" wire:model="name" class="form-control"><br>
        
    </div>@error('name') <span class="text-danger small">{{ $message }}<br></span> @enderror<br>

    <div class="border px-4 py-2">
        <label class="form-label">Email</label>
        <input type="email" wire:model="email" class="form-control"><br>
        
    </div>@error('email') <span class="text-danger small">{{ $message }}<br></span> @enderror<br>

    <div class="border px-4 py-2">
        <label class="form-label">Password</label>
        <input type="password" wire:model="password" class="form-control"><br>
    </div>@error('password') <span class="text-danger small">{{ $message }}<br></span> @enderror<br>

        <div class="d-flex gap-2">
            <button class="btn btn-secondary border px-4 py-2 flex-fill text-red-500" onclick="window.location.href='users#'">
                Cancel
            </button>

            <button type="submit" class="btn btn-primary border px-4 py-2 flex-fill" wire:loading.attr="disabled">
                <span wire:loading.remove>Save User</span>
                <span wire:loading>Saving...</span>
            </button>
        </div>

    </div>

    </form>
</div>
