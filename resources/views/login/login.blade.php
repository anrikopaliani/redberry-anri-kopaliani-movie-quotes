<x-layout>
    <form action="/login" method="POST">
        @csrf
        <x-input name="username" />
        <x-input name="password" type="password" />
        <x-submit-button>Submit</x-submit-button>
    </form>
</x-layout>
