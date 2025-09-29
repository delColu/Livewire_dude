<div><h1 class="text-blue-500 text-4xl">Posts table</h1>
<div class="w-full p-8">
    {{-- It's time to mine and craft. Minecraft steve --}}
    <table class="table-auto w-full">
        <thead>
            <tr>

        <thead>
            <tr>
                <th class="border px-4 py-2">ID</th>
                <th class="border px-4 py-2">Title</th>
                <th class="border px-4 py-2">Content</th>
                <th class="border px-4 py-2">Created at</th>
                <th class="border px-4 py-2">Is Archived</th>
                <th class="border px-4 py-2">Archive Options</th>
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