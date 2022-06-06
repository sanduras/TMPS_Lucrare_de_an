<?php

declare(strict_types=1);

namespace App\Builder;

class Director {

    public function  create(Builder $builder)
    {
        $builder->setCategory();
        return $builder->getCategory();
    }
}

?>
