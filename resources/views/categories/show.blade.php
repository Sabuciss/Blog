<x-layout>
  <x-slot:title>
    {{ $category->category_name }}
  </x-slot:title>

  <h1>{{ $category->category_name }}</h1> 

  
<a href="/categories/{{ $category->id }}/edit">Rediģē</a>


<form method="POST" action="/categories/{{ $category->id }}">
@csrf
@method("delete")
<button type="submit">dzēst</button>
</form>
</x-layout>