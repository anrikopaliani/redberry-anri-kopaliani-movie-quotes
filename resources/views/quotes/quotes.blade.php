<x-layout>

    <h1 class=" text-5xl">{{ $title }}</h1>
    <div class="flex flex-col h-96 mt-20 mx-auto" style="width: 700px">
        @foreach ($quotes as $item)
            <section class="flex flex-col  mt-5 pb-20 w-full">
                <img class="object-cover" width="700"
                    src="{{ URL::to('/') . '/storage/' . str_replace('images/', '', $item->image) }}">
                <div class="bg-white w-full text-black break-words">
                    <p>"{{ $item->getTranslation('quote', app()->getLocale()) }}"</p>
                </div>
                @auth
                    <div class="flex justify-end">
                        <a href="{{ route('quote.edit', ['quote' => $item->id]) }}"
                            class="pr-2">{{ __('messages.Update') }}</a>
                        <form action="{{ route('quote.delete', ['quote' => $item->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button>{{ __('messages.Delete') }}</button>
                        </form>
                    </div>
                @endauth
            </section>
        @endforeach
    </div>
</x-layout>
