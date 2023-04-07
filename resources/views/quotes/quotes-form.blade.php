<x-layout>
    <h1 class="text-center text-6xl mb-6">Add A Quote</h1>

    <form action="{{ route('add-quote') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="flex flex-col space-y-2 mb-4">
            <label for="movie_id">Select a movie</label>
            <select class="text-black h-10 rounded-md pl-2 bg-white" name="movie_id" id="movie_id">
                @foreach ($movies as $movie)
                    <option value="{{ $movie->id }}">{{ $movie->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="flex flex-col space-y-2 w-96 mb-4">
            <label for="quote[en]">Quote[en]</label>
            <input class="border rounded-md h-10 text-black" type="text" id="quote[en]" name="quote[en]">
        </div>
        <div class="flex flex-col space-y-2 w-96 mb-4">
            <label for="quote[ka]">Quote[ka]</label>
            <input type="text" class="border rounded-md h-10 text-black" id="quote[ka]" name="quote[ka]">
        </div>

        <div class="flex flex-col space-y-2 mb-4">
            <label for="image">image</label>
            <input type="file" accept="image/*" name="image" id="image">
        </div>
        <x-submit-button>Submit</x-submit-button>
    </form>
</x-layout>
