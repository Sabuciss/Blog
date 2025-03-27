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
    <button type="submit">Dzēst</button>
  </form>

  <br><br>

  <form action="/comments" method="POST">
    @csrf
    <input type="hidden" name="post_id" value="{{ $post->id }}">

    <label>
        Autors:
        <input type="text" name="author" required>
    </label>

    <br><br>

    <label>
        Komentārs:
        <textarea name="comment" required></textarea>
    </label>

    <button type="submit">Komentēt</button>
  </form>

  @error('author')
      <p>{{ $message }}</p>
  @enderror

  @error('comment')
      <p>{{ $message }}</p>
  @enderror

  <h2>Komentāri</h2>
  @foreach ($post->comments as $comment)
    <div>
      <p><strong>{{ $comment->author }}</strong></p>
      <p>{{ $comment->comment }}</p>
      <a href="/comments/{{ $comment->id }}/edit">Rediģē</a>

      <form method="POST" action="/comments/{{ $comment->id }}" style="display: inline;">
        @csrf
        @method("delete")
        <button type="submit">Dzēst</button>
      </form>
    </div>
  @endforeach

</x-layout>
