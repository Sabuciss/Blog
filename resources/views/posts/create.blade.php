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
 <label for="category_id">Kategorija:</label>
    <select name="category_id" required>
        <option value="">Izvēlies kategoriju</option>
        @foreach ($options as $category)
            <option value="{{ $category->id }}"
                @if (old('category_id') == $category->id) 
                    selected="selected"
                @endif
            >
                {{ $category->name }}
            </option>
        @endforeach
    </select>
    @error('category_id')
    <p>{{ $message }}</p>
    @enderror
    
 <button >Saglabāt</button>
</form>
        
</x-layout>
