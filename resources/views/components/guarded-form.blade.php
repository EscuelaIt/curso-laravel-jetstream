<form
    {{
        $attributes->merge([
            'x-data' => 'guardedForm()',
            'x-init' => 'guardForm()',
            'x-on:input' => 'guarded = true',
            'x-on:submit' => 'guarded = false',
        ])
    }}
>
    {{ $slot }}
</form>
