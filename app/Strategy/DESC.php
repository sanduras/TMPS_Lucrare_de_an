<?php
declare (strict_types=1);

namespace App\Strategy;

class DESC implements Strategy{

    public function order($data) {
       rsort($data);
       echo "<hr>";
       foreach ($data as  $val) {
           
        echo " $val\n".'<br>';
    }
    }

}
?>