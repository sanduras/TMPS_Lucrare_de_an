<?php
declare (strict_types=1);

namespace App\Strategy;

class Application {

    public function order($data, Strategy $ordering) {         
        $ordering = $ordering ?: new ASC;
        $ordering->order($data);
    }

}