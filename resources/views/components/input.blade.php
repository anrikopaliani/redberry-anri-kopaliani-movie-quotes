@props(['name', 'type' => 'text', 'label'])

<div class="flex flex-col space-y-2 w-96 mb-6">
    <label for="{{ $name }}">{{ ucwords($label) }}</label>
    <div>
        <input value="{{ $type === 'text' ? old($name) : '' }}" class="border w-full rounded-md h-10 text-black px-4"
            type="{{ $type }}" id="{{ $name }}" name="{{ $name }}">
        @error($name)
            <p class="absolute text-red-600">
                {{ $message === 'The selected username is invalid.' ? 'User credentials are incorrect.' : $message }}</p>
        @enderror
    </div>
</div>
