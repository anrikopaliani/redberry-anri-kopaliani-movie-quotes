<x-layout>
    <form action="/login" method="POST">
        @csrf
        <x-input label="{{ __('username') }}" name="username" />
        <x-input label="{{ __('password') }}" name="password" type="password" />
        <x-submit-button>{{ __('LOG IN') }}</x-submit-button>

    </form>
</x-layout>
