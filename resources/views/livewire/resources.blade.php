<div>
    <div x-data="{
        creating: @entangle('creating'),
        text: @entangle('text'),
    }">
        <div class="flex justify-center">
            <h1 class="
                font-bold
                text-2xl
                text-center
                mt-5
                mb-24
                border-b
                border-b-2
                border-gray-600"
            >
                File Media Manager with other things
            </h1>
        </div>


        <div class="p-5 flex justify-end">
            <x-button-link
                x-on:click="
                    creating = !creating;
                    text = creating
                        ? 'Pending'
                        : 'Create'
                    "
                x-text="text"
            >
            </x-button-link>
        </div>

        <div class="p-5 flex justify-end">
            <x-search-bar model="search" />
        </div>

        <div class="p-5 flex justify-start">
            {{ $files->links() }}
        </div>

        <div class="p-5">
            <x-table :files="$files"/>
        </div>

        <x-jet-modal wire:model="creating">
            <x-files.create-file
                trigger="creating"
                action="{{ $action }}"
            />
        </x-jet-modal>
    </div>
</div>
