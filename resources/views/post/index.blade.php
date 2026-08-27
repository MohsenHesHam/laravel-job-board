<x-layout title="Blog page">
    <h1 style="color: red ">Blog Page </h1>
    @foreach ($posts as $post )
    <h1 style="color: red " >{{ $post->id }}{{ $post->title }}</h1>
    <h2 style="color: green"> _____________________________________</h2>
    @endforeach
    {{ $posts->links() }}
</x-layout>