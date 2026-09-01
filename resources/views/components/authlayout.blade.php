<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-900">
    <head>
        <title>Job Board- {{ $title ?? "onboarding top talent" }}</title>
        <meta charset="utf-8">
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body class="min-h-screen flex flex-col bg-gray-900 text-white selection:bg-indigo-500 selection:text-white">
      <div class="relative flex-1 bg-gray-900 isolate overflow-hidden">
        <!-- Header -->
        <header class="absolute inset-x-0 top-0 z-50">
          <nav aria-label="Global" class="flex items-center justify-between p-6 lg:px-8">
            <div class="flex lg:flex-1">
              <a href="/" class="-m-1.5 p-1.5 flex items-center gap-2">
                <span class="sr-only">Job Board</span>
                <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Logo" class="h-8 w-auto" />
                <span class="font-bold text-lg tracking-wide text-white">Job<span class="text-indigo-400">Board</span></span>
              </a>
            </div>
            
            <div class="flex flex-1 justify-end">
              <a href="/login" class="text-sm font-semibold text-white hover:text-indigo-400 transition">Log in <span aria-hidden="true"></span></a>
            </div>
             <div class="flex flex-1 justify-end">
              <a href="/signin" class="text-sm font-semibold text-white hover:text-indigo-400 transition">Sign in <span aria-hidden="true"></span></a>
            </div>
          </nav>
        </header>

        <!-- الخلفية العلوية المتوهجة -->
        <div aria-hidden="true" class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80 pointer-events-none">
          <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)" class="relative left-[calc(50%-11rem)] aspect-1155/678 w-144.5 -translate-x-1/2 rotate-30 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-288.75"></div>
        </div>

        <!-- المحتوى الرئيسي -->
        <main class="relative isolate px-6 pt-32 pb-20 lg:px-8 flex min-h-[calc(100vh-140px)] items-center justify-center">
          <div class="mx-auto max-w-2xl py-12 text-center">
            {{ $slot ?? '' }}
          </div>
        </main>

        <!-- الخلفية السفلية المتوهجة -->
        <div aria-hidden="true" class="absolute inset-x-0 bottom-0 -z-10 transform-gpu overflow-hidden blur-3xl pointer-events-none">
          <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)" class="relative left-[calc(50%+3rem)] aspect-1155/678 w-144.5 -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-288.75"></div>
        </div>
      </div>

      <!-- Footer -->
      <footer class="border-t border-white/10 bg-gray-900/80 backdrop-blur-md">
        <div class="mx-auto max-w-7xl px-6 py-8 flex items-center justify-between lg:px-8">
          <div class="flex items-center gap-2">
            <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Logo" class="h-5 w-auto" />
            <span class="text-sm font-semibold text-gray-300">Job<span class="text-indigo-400">Board</span></span>
          </div>
          <div>
            <p class="text-xs text-gray-500">
              &copy; {{ date('Y') }} JobBoard, Inc. All rights reserved.
            </p>
          </div>
        </div>
      </footer>
    </body>
</html>