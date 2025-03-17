
<x-layout>
  <x-slot:title>
    {{ $post->content }}
  </x-slot:title>

  <h1>{{ $post->content }}</h1>
  <p>Kategorija: {{ $post->category->category_name }}</p>

  
<a href="/posts/{{ $post->id }}/edit">Rediģē</a>


<form method="POST" action="/posts/{{ $post->id }}">
@csrf
@method("delete")
<button type="submit">dzēst</button>



<form action="/comments/create" method="POST">
    <input type="hidden" name="post_id" value="4">
    <label>Autors:</label> 
    <input type="text" name="author" required>
    
    <label>Komentārs:</label>
    <textarea name="content" required></textarea>
    
    <button type="submit">Komentēt</button>
</form>

<h2>Komentāri</h2>
<div id="comments">
    @foreach ($post->comments as $comment)
        <div>
            <strong>{{ $comment->author }}</strong>: {{ $comment->content }}
        </div>
    @endforeach
</div>

</form>
</x-layout>