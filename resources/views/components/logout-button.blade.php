<form {{ $attributes->merge(['class' => 'text-red']) }} action="/logout" method="POST">
    @csrf
    <button type="submit">LOG OUT</button>
</form>
