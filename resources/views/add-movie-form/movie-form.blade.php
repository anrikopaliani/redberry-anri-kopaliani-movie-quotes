<x-layout>
    <h1 class="text-center text-8xl">Add a Movie</h1>
    <form action="/movie-form" method="POST" class="mx-auto mb-28">
        @csrf
        <x-input name="title" />
        <x-submit-button>Submit</x-submit-button>
    </form>
</x-layout>
