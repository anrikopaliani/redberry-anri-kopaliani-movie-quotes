@props(['quote'])

<div class="flex flex-col">
    <img width="600" height="386px" class="mb-6 mx-auto"
        src="{{ URL::to('/') . '/storage/' . str_replace('images/', '', $quote->image) }}" alt="">
    <p class="text-center text-3xl mb-12">{{ $quote->getTranslation('quote', app()->getLocale()) }}</p>

    <a href="{{ route('movie.show', ['movie' => $quote->movie_id]) }}"
        class="text-center underline text-5xl">{{ $quote->movie->getTranslation('title', app()->getLocale()) }}</a>
</div>
