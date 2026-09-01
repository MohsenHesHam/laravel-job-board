<x-layout title="Blog page">
  <div class="flex items-center justify-between mb-8">
    <h1 class="text-2xl font-bold text-white">All Posts</h1>
    <a href="/post/create" class="rounded-lg bg-indigo-600 px-6 py-2.5 text-sm font-semibold text-white shadow-md hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-900 transition cursor-pointer">
        Create Post
    </a>
</div>

    @if(session('success'))
    <div class="bg-green">{{ session('stccess') }}</div>
    @endif
   
    <h1 style="color: red ">Blog Page </h1>
    @foreach ($posts as $post )
    <h1 style="color: red " >{{ $post->title }}</h1>
    <p style="color: red " >{{ $post->body }}</p>
    <div>
        <a href="/post/{{ $post->id }}/edit">Edit</a>
        <a href="#">Delete</a>
    </div>
    <h2 style="color: green"> _____________________________________</h2>
    @endforeach
    {{ $posts->links() }} 
</x-layout>