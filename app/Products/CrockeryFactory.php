<?php

declare (strict_types=1);

namespace App\Products;

class CrockeryFactory extends Factory
{
    public function getProduct(): Item
    {
        return new  Crockery();
    }
}
?>