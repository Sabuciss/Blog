
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



<h3>Komentārs</h3>
<label for="author">Autors</label>
<input type="text" name="author" value="">

<label for="comment">Komentārs</label>
<input type="text" name="comment" value="">
</label>

</form>
</x-layout>