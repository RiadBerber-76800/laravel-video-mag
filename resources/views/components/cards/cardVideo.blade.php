@props([
    'url_img',
    'title',
    'description'
])
<div class="shadow-lg">
    <img src="{{ asset('storage/' . $url_img) }}" alt="">
    <div class="p-4">
        <p class='font-black text-lg'>{{ $title }}</p>
        <p>{{ Str::substr($description, 0, 120) }}</p>
    </div>
</div>
