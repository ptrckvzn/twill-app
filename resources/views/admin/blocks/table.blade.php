@twillBlockTitle('Table')

@formField('input', [
   'name' => 'title',
   'label' => 'Title',
   'maxlength' => 80,
])

@formField('repeater', [
    'type' => 'table-row',
    'max' => 50,
])
