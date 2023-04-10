<x-layout>
    <h1 class="text-center text-3xl mb-6">{{ __('Edit A Quote') }}</h1>

    <form method="POST" action="/quotes/{{ $quote->id }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="flex flex-col space-y-2 w-96 mb-4">
            <label for="quote[en]">{{ __('Quote[en]') }}</label>
            <input class="border rounded-md h-10 text-black" value="{{ $quote->getTranslation('quote', 'en') }}"
                type="text" id="quote[en]" name="quote[en]">
        </div>
        <div class="flex flex-col space-y-2 w-96 mb-4">
            <label for="quote[ka]">{{ __('Quote[ka]') }}</label>
            <input type="text" class="border rounded-md h-10 text-black"
                value="{{ $quote->getTranslation('quote', 'ka') }}" id="quote[ka]" name="quote[ka]">
        </div>

        <div class="flex flex-col space-y-2 mb-4">
            <label for="image">{{ __('image') }}</label>
            <input type="file" accept="image/*" name="image" id="image"
                value="{{ old('image', $quote->image) }}">
            <img src="{{ URL::to('/') . '/storage/' . str_replace('images/', '', $quote->image) }}" width="100"
                height="100" alt="">
        </div>
        <x-submit-button>{{ __('Submit') }}</x-submit-button>
    </form>
</x-layout>
