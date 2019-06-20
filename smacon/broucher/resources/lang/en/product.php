<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Language files for product in broucher package
    |--------------------------------------------------------------------------
    |
    | The following language lines are  for  product module in broucher package
    | and it is used by the template/view files in this module
    |
    */

    /**
     * Singlular and plural name of the module
     */
    'name'          => 'Product',
    'names'         => 'Products',
    
    /**
     * Singlular and plural name of the module
     */
    'title'         => [
        'main'  => 'Products',
        'sub'   => 'Products',
        'list'  => 'List of products',
        'edit'  => 'Edit product',
        'create'    => 'Create new product'
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
        'categories'                 => 'Please enter categories',
        'images'                     => 'Please enter images',
        'slug'                       => 'Please enter slug',
    ],

    /**
     * Labels for inputs.
     */
    'label'         => [
        'entity_id'                  => 'Entity id',
        'title'                      => 'Title',
        'description'                => 'Description',
        'sort_order'                 => 'Sort order',
        'categories'                 => 'Categories',
        'images'                     => 'Images',
        'slug'                       => 'Slug',
    ],

    /**
     * Columns array for show hide checkbox.
     */
    'cloumns'         => [
        'entity_id'                  => ['name' => 'Entity id', 'data-column' => 1, 'checked'],
        'title'                      => ['name' => 'Title', 'data-column' => 2, 'checked'],
        'description'                => ['name' => 'Description', 'data-column' => 3, 'checked'],
        'sort_order'                 => ['name' => 'Sort order', 'data-column' => 4, 'checked'],
        'categories'                 => ['name' => 'Categories', 'data-column' => 5, 'checked'],
        'images'                     => ['name' => 'Images', 'data-column' => 6, 'checked'],
    ],

    /**
     * Tab labels
     */
    'tab'           => [
        'name'  => 'Products',
    ],

    /**
     * Texts  for the module
     */
    'text'          => [
        'preview' => 'Click on the below list for preview',
    ],
];
