<x-layout>
   @foreach($posts as $post);
    <p>{{ $post->title  }}</p>
    <p>{{ $post->slug  }}</p>
    <p>{{ $post->text  }}</p>
    <br>
    @endforeach;
</x-layout>
