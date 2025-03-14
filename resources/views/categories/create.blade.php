<x-layout>

<x-slot:title>Izveido</x-slot:title>

<h1>Izveido kategoriju</h1>
<form action="/categories" method="POST">
    @csrf

  <label for="category_name">Kategorijas vārds:</label>
  <input type="text" name="category_name" required>
  @error("category_name")
  <p>{{ $message }}</p>
 @enderror

 <button >Saglabāt</button>
</form>
        
</x-layout>
