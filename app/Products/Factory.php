<?php

declare(strict_types=1);

namespace App\Products;



abstract class Factory {

    /*Method for get concrete Product */
    abstract public function getProduct(): Item;

    public function makeProducts( $image, $title): void 
    {
        $product = $this->getProduct();
        $product->setImage($image);
        $product->setTitle($title);

    }
}
?>