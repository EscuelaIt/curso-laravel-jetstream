@props([
    'trigger',
    'action' => 'create'
])

<div x-show="{{ $trigger }}">
    <h1 class="font-bold text-2xl text-center mt-10">Create a New File</h1>
    <x-guarded-form
        class="flex flex-col justify-center w-full bg-gray-100 mt-10 p-10"
        wire:submit.prevent="{{ $this->action }}"
    >
        @csrf
        <x-jet-label for="title" class="pl-2">Media Name</x-jet-label>
        <x-jet-input
            class="w-full rounded-lg"
            type="text"
            required
            wire:model="file.title"
        />
        <x-jet-input-error for="file.title" class="mt-2" />

        <x-jet-label for="description" class="mt-10 pl-2">Description</x-jet-label>
        <textarea
            class="rounded-lg w-full border-gray-300"
            rows="5"
            wire:model="file.description"
        ></textarea>
        <x-jet-input-error for="file.description" class="mt-2" />

        <div class="mt-10">
            <x-jet-label for="file">Media File</x-jet-label>
            <x-jet-input
                type="file"
                wire:model="media"
                class="border border-gray-300 w-full p-5"
                id="{{ $this->random }}"
            />
        </div>
        <x-jet-input-error for="media" class="mt-2" />

        <div class="mt-10 m-auto flex flex-row">
            {{-- <x-button-link
                class="rounded-full mr-1"
                x-on:click.prevent="{{ $trigger }}=false"
            >
                Cancel
            </x-button-link> --}}
            <x-jet-button
                class="rounded-full mr-1"
                x-on:click.prevent="{{ $trigger }}=false; text = 'Creating'"
                type="button"
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
