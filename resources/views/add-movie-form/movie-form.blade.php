<x-layout>
    <h1 class="text-center text-8xl">Add a Movie</h1>
    <form action="" method="POST" class="mx-auto mb-28">
        <x-input name="title" />
        <div class="flex flex-col space-y-2 ">
            <label for="image">Image</label>
            <input class="text-white" type="file" accept="image/*" name="image" id="image">
        </div>
        <x-submit-button>Submit</x-submit-button>
    </form>
</x-layout>
