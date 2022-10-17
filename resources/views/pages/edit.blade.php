@php
  $style = "rounded w-full block mb-3"
@endphp
<x-layouts.main-layout title='Bienvenue sur notre site'>
  <div class="px-20 py-20">
    <h1 class="text-xl font-black py-5">Create a new video</h1>
    <div class="">
      <form action="{{ route('videos.update', $video->id) }}" method='post' enctype="multipart/form-data">

        @csrf
        @method('PUT')
        <div class="">
          <input type="text" name='title' value="{{ old('title', $video->title) }}" class=''>
          <x-error-msg name='title' />
        </div>
        <div class="div">
          <textarea name="description" id="" cols="30" rows="10" class="mt-5 block w-full rounded-lg border-gray-400" placeholder="Votre contenu....">{{ old('description', $video->description) }}</textarea>
          <x-error-msg name='description' />
        </div>
        <div class="">
          <input type="text" name='nationality' placeholder="Nationalité" value="{{ old('nationality', $video->nationality) }}">
          <x-error-msg name='nationality' />
        </div>
        <div class="">
          <input type="text" name='year_created' placeholder="Année du film" value="{{ old('year_created', $video->year_created) }}" class='{{ $style }}'>
          {{-- value='{{ old('year_created', $video->created_at->toDateString()) }} class=''{{ $style }}' --}}
          <x-error-msg name='year-created' />
        </div>
        <div class="">
          <input type="text" name='actors'placeholder="Acteur" value='{{ old('actors', $video->actors) }}'>
          <x-error-msg name='actors' />
        </div>
        <div class="">
          <label for="">Image vedette:</label>
          <input type="file" name="url_img" id="" class="block">
        </div>
        </x-error-msg name="url_img" />
        {{-- <div class="">
          <label for="">Others Image :</label>
          <input type="file" name="images[]" id="" multiple class="block">
        </div> --}}
        </x-error-msg name="images" />
      <button class="bg-blue-600  text-white mt-6 w-full py-6">Modifier</button>
      </form>
    </div>
  </div>

</x-layouts.main-layout>
