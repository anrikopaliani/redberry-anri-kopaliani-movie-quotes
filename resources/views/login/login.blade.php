<x-layout>
    <form action="#">
        @csrf
        <x-input name="username" />
        <x-input name="password" />
        <x-submit-button>Submit</x-submit-button>
    </form>
</x-layout>