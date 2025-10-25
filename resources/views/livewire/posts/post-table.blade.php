<div><h1 class="text-blue-500 text-4xl">Posts table</h1>
<br><nav>
<a href="/postform" class="btn btn-primary w-100 border px-4 py-2 text-blue-500">Create post</a>
</nav>
    <div class="w-full p-8">
        {{-- It's time to mine and craft. Minecraft steve --}}
        <table class="table table-striped table-auto w-full">
            <thead>
                <tr>

            <thead>
                <tr>
                    <th class="border px-4 py-2">ID</th>
                    <th class="border px-4 py-2" style="width: 25px;">Author</th>
                    <th class="border px-4 py-2" style="width: 20px;">Title</th>
                    <th class="border px-4 py-2" style="width: 400px;">Content</th>
                    <th class="border px-4 py-2">Created at</th>
                    {{-- <th class="border px-4 py-2">Is Archived</th> --}}
                    <th class="border px-4 py-2" >Archive Options</th>
                    <th class="border px-4 py-2">Delete</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($posts as $post)
                <livewire:PostTablerow :post="$post"/>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
