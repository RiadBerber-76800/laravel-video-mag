<<x-layouts.main-layout title='Bienvenue sur notre site'>
  <div class="px-20 py-20">
    <h1 class="text-xl font-black py-5">Titre : {{ $video->title }}</h1>
    <img src="{{ asset('storage/' .$video->url_img) }}" class="w-96">
    <div class="pt-5">
      <p class=>{{ $video->nationality }}</p>
      <p class=text-blue-500>Acteur : {{ $video->actors }}</p>
      <p class=text-blue-500>Date de création : {{ $video->year_created }}</p>
      <p class=>{!! nl2br(e($video->description)) !!}</p>
    @auth
    </div>
    <div class="flex space-x-5 pt-8">
      <a href="{{ route('videos.edit', $video->id) }}" class="bg-green-600 text-white p-2 rounded-lg">Modifier</a>
      <x-btn-delete :video='$video' />
    </div>
    @endauth
  </div>

</x-layouts.main-layout>
