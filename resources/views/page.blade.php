<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $page->title }}</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-slate-900 mx-5">
        <x-header />
        <h2 class="text-4xl font-extrabold text-sky-200 my-3">{{ $page->title }}</h2>

        <div class="text-slate-300">
            {!! $page->content !!}
        </div>
    </body>
</html>