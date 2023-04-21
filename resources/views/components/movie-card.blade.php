@props(['quote'])

<div class="flex flex-col h-screen items-center" style="width: 1000px">
    <img width="600" height="386px" class="mt-28 mb-6 mx-auto"
        src="{{ URL::to('/') . '/storage/' . str_replace('images/', '', $quote->image) }}" alt="">
    <p class="text-center text-3xl mb-12 break-words">
        {{ $quote->getTranslation('quote', app()->getLocale()) }}</p>

    <a href="/movies/{{ $quote->movie_id }}" class="text-center underline text-5xl">{{ $quote->movie->title }}</a>
</div>
