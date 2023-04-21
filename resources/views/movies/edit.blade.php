<x-layout>
    <h1 class="text-center text-3xl mb-6">{{ __('messages.Edit A Movie') }}</h1>

    <form method="POST" action="{{ route('movie.update', ['movie' => $movie->id]) }}">
        @csrf
        @method('PATCH')

        <div class="flex flex-col space-y-2 w-96 mb-4">
            <label for="title[en]">{{ __('messages.Title[en]') }}</label>
            <input class="border rounded-md h-10 text-black" value="{{ $movie->getTranslation('title', 'en') }}"
                type="text" id="title[en]" name="title[en]">
            @error('title.en')
                <p class=" text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div class="flex flex-col space-y-2 w-96 mb-4">
            <label for="title[ka]">{{ __('messages.Title[ka]') }}</label>
            <input class="border rounded-md h-10 text-black" value="{{ $movie->getTranslation('title', 'ka') }}"
                type="text" id="title[ka]" name="title[ka]">
            @error('title.ka')
                <p class=" text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <x-submit-button>{{ __('Submit') }}</x-submit-button>
    </form>
</x-layout>
