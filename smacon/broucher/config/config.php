<?php

return [

    /**
     * Provider.
     */
    'provider'  => 'smacon',

    /*
     * Package.
     */
    'package'   => 'broucher',

    /*
     * Modules.
     */
    'modules'   => ['category', 
'product'],

    'category'       => [
        'model' => [
            'model'                 => \Smacon\Broucher\Models\Category::class,
            'table'                 => 'categories',
            'presenter'             => \Smacon\Broucher\Repositories\Presenter\CategoryPresenter::class,
            'hidden'                => [],
            'visible'               => [],
            'guarded'               => ['*'],
            'slugs'                 => ['slug' => 'name'],
            'dates'                 => ['deleted_at', 'createdat', 'updated_at'],
            'appends'               => [],
            'fillable'              => ['entity_id',  'title',  'description',  'sort_order',  'parent_item',  'image',  'slag'],
            'translatables'         => [],
            'upload_folder'         => 'broucher/category',
            'uploads'               => [
            /*
                    'images' => [
                        'count' => 10,
                        'type'  => 'image',
                    ],
                    'file' => [
                        'count' => 1,
                        'type'  => 'file',
                    ],
            */
            ],

            'casts'                 => [
            /*
                'images'    => 'array',
                'file'      => 'array',
            */
            ],

            'revision'              => [],
            'perPage'               => '20',
            'search'        => [
                'name'  => 'like',
                'status',
            ]
        ],

        'controller' => [
            'provider'  => 'Smacon',
            'package'   => 'Broucher',
            'module'    => 'Category',
        ],

    ],

    'product'       => [
        'model' => [
            'model'                 => \Smacon\Broucher\Models\Product::class,
            'table'                 => 'products',
            'presenter'             => \Smacon\Broucher\Repositories\Presenter\ProductPresenter::class,
            'hidden'                => [],
            'visible'               => [],
            'guarded'               => ['*'],
            'slugs'                 => ['slug' => 'name'],
            'dates'                 => ['deleted_at', 'createdat', 'updated_at'],
            'appends'               => [],
            'fillable'              => ['entity_id',  'title',  'description',  'sort_order',  'categories',  'images',  'slug'],
            'translatables'         => [],
            'upload_folder'         => 'broucher/product',
            'uploads'               => [
            /*
                    'images' => [
                        'count' => 10,
                        'type'  => 'image',
                    ],
                    'file' => [
                        'count' => 1,
                        'type'  => 'file',
                    ],
            */
            ],

            'casts'                 => [
            /*
                'images'    => 'array',
                'file'      => 'array',
            */
            ],

            'revision'              => [],
            'perPage'               => '20',
            'search'        => [
                'name'  => 'like',
                'status',
            ]
        ],

        'controller' => [
            'provider'  => 'Smacon',
            'package'   => 'Broucher',
            'module'    => 'Product',
        ],

    ],
];
