@props([
    'trigger',
])

<div x-show="{{ $trigger }}">
    <h1 class="font-bold text-2xl text-center mt-10">Create a New File</h1>
    <x-guarded-form
        class="flex flex-col justify-center w-full bg-gray-100 mt-10 p-10"
        method="POST"
        action="{{ route('files.store') }}"
    >
        @csrf
        <x-jet-label for="title" class="pl-2">Media Name</x-jet-label>
        <x-jet-input
            class="w-full rounded-lg"
            name="title"
            type="text"
            required
        />
        <x-jet-input-error for="title" class="mt-2" />

        <x-jet-label for="description" class="mt-10 pl-2">Description</x-jet-label>
        <textarea
            class="rounded-lg w-full border-gray-300"
            name="description"
            rows="5"
        ></textarea>
        <x-jet-input-error for="description" class="mt-2" />

        <div class="mt-10">
            <x-jet-label for="file">Media File</x-jet-label>
            <x-jet-input
                type="file"
                name="file"
                class="border border-gray-300 w-full p-5"
            />
        </div>
        <x-jet-input-error for="file" class="mt-2" />

        <div class="mt-10 m-auto flex flex-row">
            <x-jet-button
                class="rounded-full mr-1"
                x-on:click="{{ $trigger }}=false"
            >
                Cancel
            </x-jet-button>
            <x-jet-button
                class="rounded-full ml-1"
            >
                Publish
            </x-jet-button>
        </div>
    </x-guarded-form>
</div>
