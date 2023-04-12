<x-layout>
    <h1 class="text-center text-7xl mb-3">{{ __('Add a Movie') }}</h1>
    <form action="{{ route('movie.post') }}" method="POST" class="mx-auto mb-28">
        @csrf
        <x-input name="title" label="{{ __('title') }}" />
        <x-submit-button>{{ __('Submit') }}</x-submit-button>
    </form>
</x-layout>
