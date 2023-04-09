<x-layout>
    <h1 class="absolute text-5xl top-16  left-1/4">{{ $title }}</h1>
    <div class="flex flex-col h-96">
        @foreach ($quotes as $item)
            <section class="flex flex-col mt-5 pb-20">
                <img class="object-cover" width="700"
                    src="{{ URL::to('/') . '/storage/' . str_replace('images/', '', $item->image) }}">
                <div class="bg-white w-full text-black h-11">
                    <p>"{{ $item->getTranslation('quote', 'en') }}"</p>
                </div>
                <div class="flex justify-end">
                    <button class="pr-2">Update</button>
                    <form action="/quotes/{{ $item->id }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button>Delete</button>
                    </form>
                </div>
            </section>
        @endforeach
    </div>
</x-layout>
