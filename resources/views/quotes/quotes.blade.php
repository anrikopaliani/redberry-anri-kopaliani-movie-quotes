<x-layout>

    <h1 class="absolute text-5xl top-16  left-1/4">{{ $title }}</h1>
    <div class="flex flex-col h-96">
        @foreach ($quotes as $item)
            <section class="flex flex-col mt-5 pb-20">
                <img class="object-cover" width="700"
                    src="{{ URL::to('/') . '/storage/' . str_replace('images/', '', $item->image) }}">
                <div class="bg-white w-full text-black h-11">
                    <p>"{{ $item->getTranslation('quote', app()->getLocale()) }}"</p>
                </div>
                @auth
                    <div class="flex justify-end">
                        <a href="{{ route('quote.edit', ['quote' => $item->id]) }}" class="pr-2">Update</a>
                        <form action="{{ route('quote.delete', ['quote' => $item->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button>Delete</button>
                        </form>
                    </div>
                @endauth
            </section>
        @endforeach
    </div>
</x-layout>
