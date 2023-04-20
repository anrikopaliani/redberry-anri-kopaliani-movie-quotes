@props(['name', 'type' => 'text', 'label'])

<div class="flex flex-col space-y-2 w-96 mb-4">
    <label for="{{ $name }}">{{ ucwords($label) }}</label>
    <input value="{{ $type === 'text' ? old($name) : '' }}" class="border rounded-md h-10 text-black px-4"
        type="{{ $type }}" id="{{ $name }}" name="{{ $name }}">
    @error($name)
        <p class=" text-red-600">{{ $message }}</p>
    @enderror
</div>
