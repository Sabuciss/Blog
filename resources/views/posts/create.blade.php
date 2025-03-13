<x-layout>

<x-slot:title>Izveido</x-slot:title>

<h1>Izveido postu</h1>
<form action="/posts" method="POST">
    @csrf

  <label for="content">Posts:</label>
  <input type="text" name="content" required>
  @error("content")
  <p>{{ $message }}</p>
 @enderror

<label>Kategorija:
    <select name="category_id" required>
        <option value="0">Izvēlies kategoriju</option>
        @foreach ($categories as $category)
                <option value="{{ $category->id }}">
                    {{ $category->category_name }}
                </option>
                @endforeach

</select>
</label>
    
    @error('category_id')
    <p>{{ $message }}</p>
    @enderror

 <button >Saglabāt</button>
</form>
        
</x-layout>
