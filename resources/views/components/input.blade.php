@props(['name', 'type' => 'text'])

<div class="flex flex-col space-y-2 w-96 mb-4">
    <label for="{{ $name }}">{{ ucwords($name) }}</label>
    <input class="border rounded-md h-10" type="{{ $type }}" id="{{ $name }}" name="{{ $name }}">
</div>
