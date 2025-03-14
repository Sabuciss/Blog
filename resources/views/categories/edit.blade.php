<x-layout>
<x-slot:title>Rediģe</x-slot:title>

<h1>Rediģē : "{{$category->category_name}}"</h1>

<form action="/categories/{{ $category->id }}" method="POST">
    @csrf
    @method('PUT')

    <label for="category_name">Posts:</label>
    <input type="text" name="category_name" value="{{  $category->category_name }}" required>
 
    @error('category_name')
        <p>{{ $message }}</p>
    @enderror

    

    <button type="submit">Saglabā</button>
</form>

</x-layout>
