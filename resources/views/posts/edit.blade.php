<x-layout>
<x-slot:title>Rediģe</x-slot:title>

<h1>Rediģe ierakstu: "{{$post->content}}"</h1>

<form action="/posts/{{ $post->id }}" method="POST">
    @csrf
    @method('PUT')

    <label for="content">Posts:</label>
    <input type="text" name="content" value="{{ old('content', $post->content) }}" required>
 
    @error('content')
        <p>{{ $message }}</p>
    @enderror

    <!-- <select name="category_id">
@foreach ($options as $key => $value)
    <option value="{{ $key }}" @if ($key == old('myselect', $model->option)) selected="selected"  @endif >{{ $value }}</option>
@endforeach
</select> -->

    @error('category_id')
        <p>{{ $message }}</p>
    @enderror

    <button type="submit">saglabā</button>
</form>

</x-layout>
