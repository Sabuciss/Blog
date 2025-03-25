<x-layout>
    
<h1>Komentāra rediģēšana</h1>
    <form action="/comments/{{ $comment->id }}" method="POST">
        @csrf
        @method('PUT')

        <label for="author">Autors:</label>
        <input type="text" id="author" name="author" value="{{ old('author', $comment->author) }}" required>

        <br><br>

        <label for="comment">Komentārs:</label>
        <textarea id="comment" name="comment" required>{{ old('comment', $comment->comment) }}</textarea>

        <br><br>

        <button type="submit">Saglabāt izmaiņas</button>
    </form>

    <a href="/posts/{{ $comment->post_id }}">Atpakaļ</a>
</x-layout>
