<div class="flex justify-end text-slate-300">
    <div class="border rounded">
        <a class="hover:underline hover:bg-sky-200/25 p-3 inline-block transition ease-in-out" href="/">Home</a>
        @foreach($menus as $menu)
        <a class="hover:underline hover:bg-sky-200/25 p-3 inline-block transition ease-in-out" href="/{{ $menu->url }}">
            {{ $menu->label }}
        </a>
        @endforeach
        <a class="hover:underline hover:bg-sky-200/25 p-3 inline-block transition ease-in-out" href="https://github.com/dorian305/ZipTaskCMS">GitHub Repo</a>
    </div>
    <a class="hover:underline hover:bg-sky-200/25 p-3 mx-2 inline-block transition ease-in-out" href="/admin">Admin</a>
</div>