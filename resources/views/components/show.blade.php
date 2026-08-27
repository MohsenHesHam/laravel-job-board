
<x-layout>

<div :title="$pagetitle">
    <h1>blog board {{ $post->auther }}</h1>

    <div>{{ $post->title  }}</div>
     <div>{{ $post->body  }}</div>
    <div>{{ $post->publised  }}</div>
    <div>{{ $post->auther  }}</div>
  

</div>
</x-layout>