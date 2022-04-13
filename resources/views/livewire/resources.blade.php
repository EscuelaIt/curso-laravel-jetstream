<div>
    <div x-data="{
        creating: false,
        text: 'Create'
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

        <div class="p-5">
            <x-table></x-table>
        </div>

        <div x-cloak x-show="creating">
            <x-files.create-file
                trigger="creating"
            />
        </div>
    </div>

    <x-create-file trigger="creating"/>
</div>
