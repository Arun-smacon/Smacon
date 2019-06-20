<?php

namespace Smacon\Broucher\Repositories\Eloquent;

use Smacon\Broucher\Interfaces\ProductRepositoryInterface;
use Litepie\Repository\Eloquent\BaseRepository;

class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{


    public function boot()
    {
        $this->fieldSearchable = config('smacon.broucher.product.model.search');

    }

    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        return config('smacon.broucher.product.model.model');
    }
}
