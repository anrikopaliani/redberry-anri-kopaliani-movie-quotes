<x-layout>
    <h1 class="text-center text-7xl mb-3">{{ __('messages.Add a Movie') }}</h1>
    <form action="{{ route('movie.post') }}" method="POST" class="mx-auto mb-28">
        @csrf
        <div class="flex flex-col space-y-2 w-96 mb-8 relative">
            <label for="title[en]">{{ __('messages.Title[en]') }}</label>
            <input class="border rounded-md h-10 text-black" value="{{ old('title.en') }}" type="text" id="title[en]"
                name="title[en]">
            @error('title.en')
                <p class="absolute top-full text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div class="flex flex-col space-y-2 w-96 mb-8 relative">
            <label for="title[ka]">{{ __('messages.Title[ka]') }}</label>
            <input class="border rounded-md h-10 text-black" value="{{ old('title.ka') }}" type="text" id="title[ka]"
                name="title[ka]">
            @error('title.ka')
                <p class="absolute top-full text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <x-submit-button>{{ __('messages.Submit') }}</x-submit-button>
    </form>
</x-layout>
