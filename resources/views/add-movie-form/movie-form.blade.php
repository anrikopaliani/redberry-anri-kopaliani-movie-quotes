<x-layout>
    <h1 class="text-center text-7xl mb-3">{{ __('Add a Movie') }}</h1>
    <form action="{{ route('movie.post') }}" method="POST" class="mx-auto mb-28">
        @csrf
        {{-- <x-input name="title[en]" label="{{ __('title[en]') }}" /> --}}
        <div class="flex flex-col space-y-2 w-96 mb-4">
            <label for="title[en]">{{ ucwords(__('title[en]')) }}</label>
            <input class="border rounded-md h-10 text-black" value="{{ old('title.en') }}" type="text" id="title[en]"
                name="title[en]">
            @error('title.en')
                <p class=" text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div class="flex flex-col space-y-2 w-96 mb-4">
            <label for="title[ka]">{{ ucwords(__('title[ka]')) }}</label>
            <input class="border rounded-md h-10 text-black" value="{{ old('title.ka') }}" type="text" id="title[ka]"
                name="title[ka]">
            @error('title.ka')
                <p class=" text-red-600">{{ $message }}</p>
            @enderror
        </div>
        {{-- <x-input name="title[ka]" label="{{ __('title[ka]') }}" /> --}}
        <x-submit-button>{{ __('Submit') }}</x-submit-button>
    </form>
</x-layout>
