@props([
  "video"
])
<div class="">
  <form action="{{route("videos.destroy", $video->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this video?')">
    @csrf
    @method("DELETE")
  <button class="bg-red-500 text-white p-3 rounded-lg" type='submit'>Supprimer</button>
  </form>
</div>
