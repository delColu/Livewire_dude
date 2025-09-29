<div><h1 class="text-blue-500 text-4xl">Users table</h1>
<div class="w-full p-8">
    {{-- It's time to mine and craft. Minecraft steve --}}
    <table class="table-auto w-full">
        <thead>
            <tr>
                {{-- <th class="border px-4 py-2">ID</th>
                <th class="border px-4 py-2">Name</th>
                <th class="border px-4 py-2">Email</th>
                <th class="border px-4 py-2">Created at</th>
                <th class="border px-4 py-2">Is Archived</th>
                <th class="border px-4 py-2">Archive Options</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
            <livewire:tablerow :user="$user"/>
        @endforeach
        </tbody> --}}

        <thead>
            <tr>
                <th class="border px-4 py-2">ID</th>
                <th class="border px-4 py-2">Name</th>
                <th class="border px-4 py-2">Email</th>
                <th class="border px-4 py-2">Created at</th>
                <th class="border px-4 py-2">Is Archived</th>
                <th class="border px-4 py-2">Archive Options</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
            <livewire:tablerow :user="$user"/>
        @endforeach
        </tbody>
    </table>
</div>
</div>