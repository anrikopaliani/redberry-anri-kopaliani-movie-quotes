@props(['name', 'type' => 'text'])

<div class="flex flex-col space-y-2 w-96 mb-4">
    <label for="{{ $name }}">{{ ucwords($name) }}</label>
    <input value="{{ $type === 'text' ? old($name) : '' }}" class="border rounded-md h-10 text-black"
        type="{{ $type }}" id="{{ $name }}" name="{{ $name }}">
    @error($name)
        <p class=" text-red-600">{{ $message }}</p>
    @enderror
</div>
