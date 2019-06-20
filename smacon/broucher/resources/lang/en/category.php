<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Language files for category in broucher package
    |--------------------------------------------------------------------------
    |
    | The following language lines are  for  category module in broucher package
    | and it is used by the template/view files in this module
    |
    */

    /**
     * Singlular and plural name of the module
     */
    'name'          => 'Category',
    'names'         => 'Categories',
    
    /**
     * Singlular and plural name of the module
     */
    'title'         => [
        'main'  => 'Categories',
        'sub'   => 'Categories',
        'list'  => 'List of categories',
        'edit'  => 'Edit category',
        'create'    => 'Create new category'
    ],

    /**
     * Options for select/radio/check.
     */
    'options'       => [
            
    ],

    /**
     * Placeholder for inputs
     */
    'placeholder'   => [
        'entity_id'                  => 'Please enter entity id',
        'title'                      => 'Please enter title',
        'description'                => 'Please enter description',
        'sort_order'                 => 'Please enter sort order',
        'parent_item'                => 'Please enter parent item',
        'image'                      => 'Please enter image',
        'slag'                       => 'Please enter slag',
    ],

    /**
     * Labels for inputs.
     */
    'label'         => [
        'entity_id'                  => 'Entity id',
        'title'                      => 'Title',
        'description'                => 'Description',
        'sort_order'                 => 'Sort order',
        'parent_item'                => 'Parent item',
        'image'                      => 'Image',
        'slag'                       => 'Slag',
    ],

    /**
     * Columns array for show hide checkbox.
     */
    'cloumns'         => [
        'entity_id'                  => ['name' => 'Entity id', 'data-column' => 1, 'checked'],
        'title'                      => ['name' => 'Title', 'data-column' => 2, 'checked'],
        'description'                => ['name' => 'Description', 'data-column' => 3, 'checked'],
        'sort_order'                 => ['name' => 'Sort order', 'data-column' => 4, 'checked'],
        'parent_item'                => ['name' => 'Parent item', 'data-column' => 5, 'checked'],
        'image'                      => ['name' => 'Image', 'data-column' => 6, 'checked'],
        'slag'                       => ['name' => 'Slag', 'data-column' => 7, 'checked'],
    ],

    /**
     * Tab labels
     */
    'tab'           => [
        'name'  => 'Categories',
    ],

    /**
     * Texts  for the module
     */
    'text'          => [
        'preview' => 'Click on the below list for preview',
    ],
];
