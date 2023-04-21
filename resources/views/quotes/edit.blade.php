<x-layout>
    <h1 class="text-center text-3xl mb-6">{{ __('messages.Edit A Quote') }}</h1>

    <form method="POST" action="{{ route('quote.update', ['quote' => $quote->id]) }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="flex flex-col space-y-2 w-96 mb-4">
            <label for="quote[en]">{{ __('messages.Quote[en]') }}</label>
            <input class="border rounded-md h-10 text-black" value="{{ $quote->getTranslation('quote', 'en') }}"
                type="text" id="quote[en]" name="quote[en]">
        </div>
        <div class="flex flex-col space-y-2 w-96 mb-4">
            <label for="quote[ka]">{{ __('messages.Quote[ka]') }}</label>
            <input type="text" class="border rounded-md h-10 text-black"
                value="{{ $quote->getTranslation('quote', 'ka') }}" id="quote[ka]" name="quote[ka]">
        </div>

        <div class="flex flex-col space-y-2 mb-4">
            <label for="image">{{ __('messages.image') }}</label>
            <input type="file" accept="image/*" name="image" id="image"
                value="{{ old('image', $quote->image) }}">
            <img src="{{ URL::to('/') . '/storage/' . str_replace('images/', '', $quote->image) }}" width="100"
                height="100" alt="">
        </div>
        <x-submit-button>{{ __('messages.Submit') }}</x-submit-button>
    </form>
</x-layout>
