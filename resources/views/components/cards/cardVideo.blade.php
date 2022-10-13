@props([
    'url_img',
    'title',
    'description'
])
<div class="">
    <img src="" alt="">
    <div class="">
        <p>{{ $title }}</p>
        <p>{{ Str::substr($description, 0, 120) }}</p>
    </div>
</div>
