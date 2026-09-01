<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-900">
    <head>
        <title>job Board- {{ $title ?? "onboarding top talent" }}</title>
        <meta charset="utf-8">
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body >
        <h1 class="text-5xl font-semibold tracking-tight text-white sm:text-7xl">
              There is a JOB waiting for You
            </h1>
            <br>
    <div class="relative rounded-full px-3 py-1 text-sm text-gray-400 ring-1 ring-white/10 hover:ring-white/20">
                Announcing our latest open positions. <a href="/post" class="font-semibold text-indigo-400"><span aria-hidden="true" class="absolute inset-0"></span>Explore <span aria-hidden="true">&rarr;</span></a>
              </div>
              <br>
    </body>
</html>