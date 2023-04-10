<x-layout>
    <h1 class="text-center text-5xl mb-6">{{ __('Add A Quote') }}</h1>

    <form action="{{ route('add-quote') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="flex flex-col space-y-2 mb-4">
            <label for="movie_id">{{ __('Select a Movie') }}</label>
            <select class="text-black h-10 rounded-md pl-2 bg-white" name="movie_id" id="movie_id">
                @foreach ($movies as $movie)
                    <option value="{{ $movie->id }}">{{ $movie->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="flex flex-col space-y-2 w-96 mb-4">
            <label for="quote[en]">{{ __('Quote[en]') }}</label>
            <input class="border rounded-md h-10 text-black" type="text" id="quote[en]" name="quote[en]">
            @error('quote[en]')
                <p class=" text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div class="flex flex-col space-y-2 w-96 mb-4">
            <label for="quote[ka]">{{ __('Quote[ka]') }}</label>
            <input type="text" class="border rounded-md h-10 text-black" id="quote[ka]" name="quote[ka]">
            @error('quote[ka]')
                <p class=" text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex flex-col space-y-2 mb-4">
            <label for="image">{{ __('image') }}</label>
            <input type="file" accept="image/*" name="image" id="image">
            @error('image')
                <p class=" text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <x-submit-button>{{ __('Submit') }}</x-submit-button>
    </form>
</x-layout>
