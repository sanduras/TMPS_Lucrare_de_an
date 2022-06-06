<?php
declare (strict_types=1);

namespace App\Filter;

class Product
{
    protected $product;

    public function __construct(string $product)
    {
        $this->product = $product;
    }

    public function getProduct(): string
    {
        return $this->product;
    }
}

?>