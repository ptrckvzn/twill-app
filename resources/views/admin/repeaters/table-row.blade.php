@twillRepeaterTitle('Row')
@twillRepeaterTrigger('Add row')
@twillBlockTitleField('title')

@formField('radios', [
    'name' => 'type',
    'label' => 'Type',
    'inline' => true,
    'default' => 'text',
    'options' => collect([
        'text' => 'Text',
        'heading' => 'Heading',
    ])
])

@formField('repeater', [
    'type' => 'table-col',
    'max' => 8,
])
