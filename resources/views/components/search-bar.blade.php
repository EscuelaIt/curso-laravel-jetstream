@props([
    'model'
])

<div>
    <input
        class="bg-white border border-gray-400 rounded-lg"
        type="text"
        wire:model="{{ $model }}"
    >
</div>
