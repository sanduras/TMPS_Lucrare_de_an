<?php

declare(strict_types=1);

namespace App\Builder;


class CrockeryBuilder implements Builder {

    private $crockery;
    const BR = '<br />';
    

    public function __construct(Crockery $crockery)
    {
        $this->crockery = $crockery;
    }

    public function setCategory() {

       $categ =  $this->crockery->category = "Crockery". self::BR;
        print_r("$categ");
    }



    public function getCategory() {

        return $this->crockery;
    }
}
?>
