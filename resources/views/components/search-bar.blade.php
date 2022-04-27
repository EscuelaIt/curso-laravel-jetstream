@props([
    'model'
])

<div>
    <input
        class="bg-white border border-gray-400 rounded-lg"
        type="text"
        wire:model.debounce.250ms="{{ $model }}"
        {{-- wire:model.lazy="{{ $model }}" --}}
        {{-- wire:model.defer="{{ $model }}" --}}
    >
</div>
