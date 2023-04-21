<x-layout>
    <form action="/login" method="POST">
        @csrf
        <x-input label="{{ __('messages.username') }}" name="username" />
        <x-input label="{{ __('messages.password') }}" name="password" type="password" />
        <x-submit-button>{{ __('LOG IN') }}</x-submit-button>
    </form>
</x-layout>
