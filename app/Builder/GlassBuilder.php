<?php

declare(strict_types=1);

namespace App\Builder;

class GlassBuilder implements Builder {

    private $glass;
    const BR = '<br />';
    

    public function __construct(Glass $glass)
    {
        $this->glass = $glass;
    }

    public function setCategory() {

        $categ = $this->glass->category = "Glasses". self::BR;

        print_r($categ);
    }



    public function getCategory() {

        return $this->glass;
    }
}
?>
