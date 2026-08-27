<x-layout title="titlename">
    <h1>Blog Page </h1>
    @foreach ($comment as $comments )
    <h1>{{ $comments->auther }}</h1>
    <h2>{{ $comments->content }}</h2>
    <a href="/blog/{{$comments->post->id  }}">{{ $comments->post->title }}</a>
    
    @endforeach
</x-layout>