<x-layouts.main-layout title='Dashboard'>

  <div class="px-20 py-12">
    <h1 class="text-xl">Hi, {{ Auth::user()->name }}
    </h1>
    <div class="py-8">
      <a href="{{ route('videos.create') }}" class="">Ajouter un Film</a>
      {{-- <a href="{{ route('videos.edit') }}" class="">Modifier un Film</a> --}}
    </div>
  </div>
</x-layouts.main-layout>
