<?php
declare (strict_types=1);

namespace App\Strategy;

class ASC implements Strategy {
    
    public function order($data) {
         echo sort($data);

         foreach ($data as  $val) {
            echo " $val\n".'<br>';
        }
     }
     
 }
?>