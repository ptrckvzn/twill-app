@twillRepeaterTitle('Column')
@twillRepeaterTrigger('Add column')
@twillBlockTitleField('primary')

@component('twill::partials.form.utils._columns')
    @slot('left')
        @formField('input', [
            'name' => 'primary',
            'label' => 'Primary text',
        ])
    @endslot
    @slot('right')
        @formField('input', [
            'name' => 'secondary',
            'label' => 'Secondary text',
        ])
    @endslot
@endcomponent