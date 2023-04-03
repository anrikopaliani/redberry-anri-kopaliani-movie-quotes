<x-layout>
    <h1 class="text-center text-6xl mb-6">Add A Quote</h1>

    <form action="{{ route('add-quote') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="flex flex-col space-y-2 mb-4">
            <label for="movies">Select movies</label>
            <select class="text-black h-10 rounded-md pl-2 " name="movies" id="movies">
                @foreach ($movies as $movie)
                    <option value="{{ $movie->id }}">{{ $movie->title }}</option>
                @endforeach
            </select>
        </div>
        <x-input name="quote" />
        <div class="flex flex-col space-y-2 mb-4">
            <label for="image">image</label>
            <input type="file" accept="image/*" name="image" id="image">
        </div>
        <x-submit-button>Submit</x-submit-button>
    </form>
</x-layout>
