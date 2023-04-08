<x-layout>
    <h1 class="absolute top-7 text-5xl">{{ $title }}</h1>
    @foreach ($quotes as $item)
        <div class="flex flex-col">
            <img width="700" height="415"
                src="{{ URL::to('/') . '/storage/' . str_replace('images/', '', $item->image) }}">
            <div class="bg-white w-full text-black">
                {{-- quote --}}
            </div>
        </div>
    @endforeach
</x-layout>
