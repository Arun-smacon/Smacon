<?php

namespace Smacon\Broucher\Repositories\Eloquent;

use Smacon\Broucher\Interfaces\CategoryRepositoryInterface;
use Litepie\Repository\Eloquent\BaseRepository;

class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface
{


    public function boot()
    {
        $this->fieldSearchable = config('smacon.broucher.category.model.search');

    }

    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        return config('smacon.broucher.category.model.model');
    }
}
