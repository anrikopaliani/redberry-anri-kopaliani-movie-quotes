@props(['movie'])

<div class="flex flex-col">
    <img width="600" height="386px" class="mb-6 mx-auto"
        src="{{ URL::to('/') . '/storage/' . str_replace('images/', '', $movie->image) }}" alt="">
    <p class="text-center text-5xl mb-12">{{ $movie->getTranslation('quote', 'en') }}</p>

    <a href="/movies/{{ $movie->movie_id }}" class="text-center underline text-5xl">{{ $movie->movie->title }}</a>
</div>
