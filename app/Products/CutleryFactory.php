<?php

declare(strict_types=1);

namespace App\Products;



class CutleryFactory extends Factory
{
    public function getProduct(): Item
    {
        return new Cutlery();
    }
}
?>