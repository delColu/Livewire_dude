<div><h1 class="text-blue-500 text-4xl">Users table</h1>
<div class="w-full p-8">
    {{-- It's time to mine and craft. Minecraft steve --}}
    <table class="table-auto w-full">
        <thead>
            <tr>
                <th class="border px-4 py-2">ID</th>
                <th class="border px-4 py-2">Name</th>
                <th class="border px-4 py-2">Email</th>
                <th class="border px-4 py-2">Created at</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
            <tr>
                <th class="border px-4 py-2">{{$user->id}}</th>
                <th class="border px-4 py-2">{{$user->name}}</th>
                <th class="border px-4 py-2">{{$user->email}}</th>
                <th class="border px-4 py-2">{{$user->created_at->format('y-m-d')}}</th>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</div>