<?php

declare(strict_types=1);

namespace App\Products;

class GlassWareFactory extends Factory
{
    public function getProduct(): Item
    {
        return new  GlassWare();
    }
}

?>