<?php

namespace Smacon\Broucher\Repositories\Presenter;

use League\Fractal\TransformerAbstract;
use Hashids;

class ProductTransformer extends TransformerAbstract
{
    public function transform(\Smacon\Broucher\Models\Product $product)
    {
        return [
            'id'                => $product->getRouteKey(),
            'key'               => [
                'public'    => $product->getPublicKey(),
                'route'     => $product->getRouteKey(),
            ], 
            'entity_id'         => $product->entity_id,
            'title'             => $product->title,
            'description'       => $product->description,
            'sort_order'        => $product->sort_order,
            'categories'        => $product->categories,
            'images'            => $product->images,
            'slug'              => $product->slug,
            'url'               => [
                'public'    => trans_url('broucher/'.$product->getPublicKey()),
                'user'      => guard_url('broucher/product/'.$product->getRouteKey()),
            ], 
            'status'            => trans('app.'.$product->status),
            'created_at'        => format_date($product->created_at),
            'updated_at'        => format_date($product->updated_at),
        ];
    }
}