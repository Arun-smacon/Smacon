<?php

namespace Smacon\Broucher\Repositories\Presenter;

use League\Fractal\TransformerAbstract;
use Hashids;

class CategoryTransformer extends TransformerAbstract
{
    public function transform(\Smacon\Broucher\Models\Category $category)
    {
        return [
            'id'                => $category->getRouteKey(),
            'key'               => [
                'public'    => $category->getPublicKey(),
                'route'     => $category->getRouteKey(),
            ], 
            'entity_id'         => $category->entity_id,
            'title'             => $category->title,
            'description'       => $category->description,
            'sort_order'        => $category->sort_order,
            'parent_item'       => $category->parent_item,
            'image'             => $category->image,
            'slag'              => $category->slag,
            'url'               => [
                'public'    => trans_url('broucher/'.$category->getPublicKey()),
                'user'      => guard_url('broucher/category/'.$category->getRouteKey()),
            ], 
            'status'            => trans('app.'.$category->status),
            'created_at'        => format_date($category->created_at),
            'updated_at'        => format_date($category->updated_at),
        ];
    }
}