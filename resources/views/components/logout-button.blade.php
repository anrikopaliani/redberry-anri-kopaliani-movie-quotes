<form {{ $attributes->merge(['class' => 'text-red']) }} action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit">{{ __('messages.LOG OUT') }}</button>
</form>
