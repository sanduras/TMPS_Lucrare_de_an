<?php
declare (strict_types=1);

namespace App\Filter;

// use Countable;
// use Iterator;

class ProductLists implements \Countable, \Iterator
{

    protected $products = [];

    protected $counter = 0;

    public function addProduct(Product $product)
    {
        $this->products[] = $product;
    }

    public function removeProduct(Product $toRemove)
    {
        $removeProduct = $toRemove->getProduct();
        $this->products = array_filter($this->products, function (Product $product) use ($removeProduct) {
            return $product->getProduct() !== $removeProduct ;
        });
    }

    public function count(): int
    {
        return count($this->products);
    }

    public function current(): Product
    {
        return $this->products[$this->counter];
    }

    public function key()
    {
        return $this->counter;
    }

    public function next()
    {
        $this->counter++;
    }

    public function rewind()
    {
        $this->counter = 0;
    }

    public function valid(): bool
    {
        return isset($this->products[$this->counter]);
    }


}
?>