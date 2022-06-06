<?php

declare(strict_types=1);

namespace App\Builder;

use App\Builder\Cutlery;

class CutleryBuilder implements Builder {

    private $cutlery;
    const BR = '<br />';
    

    public function __construct(Cutlery $cutlery)
    {
        $this->cutlery = $cutlery;
    }

    public function setCategory() {

        $categ = $this->cutlery->category = "Cutlery". self::BR;

        print_r("$categ");
    }



    public function getCategory() {

        return $this->cutlery;
    }
}
?>
