@php
  $style = "rounded w-full block mb-3"
@endphp
<x-layouts.main-layout title='Bienvenue sur notre site'>
  <div class="px-20 py-20">
    <h1 class="text-xl font-black py-5">Create a new video</h1>
    <div class="">
      <form action="{{ route('videos.store') }}" method='post' enctype="multipart/form-data">

        @csrf
        <div class="">
          <input type="text" name='title' value="{{ old('title')}}" class=''>
          <x-error-msg name='title' />
        </div>
        <div class="div">
          <textarea name="description" id="" cols="30" rows="10" class="mt-5 block w-full rounded-lg border-gray-400" placeholder="Votre contenu....">{{old('description')}}</textarea>
          <x-error-msg name='description' />
        </div>
        <div class="">
          <input type="text" name='nationality' placeholder="Nationalité" value="{{ old('nationality')}}">
          <x-error-msg name='nationality' />
        </div>
        <div class="">
          <input type="text" name='year_created' placeholder="Annéé du film">
          <x-error-msg name='year-created' />
        </div>
        <div class="">
          <input type="text" name='actors'placeholder="Acteur">
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
      <button class="bg-blue-600  text-white mt-6 w-full py-6">Envoyer</button>
      </form>
    </div>
  </div>

</x-layouts.main-layout>
