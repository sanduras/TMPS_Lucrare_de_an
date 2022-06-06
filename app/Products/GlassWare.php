<?php

declare (strict_types=1);

namespace App\Products;

class GlassWare implements Item {
    public function  setImage($image) {
       echo ' <img class="transform  transition duration-500 hover:scale-110 w-full h-auto object-cover object-center max-w-full align-middle transition-all duration-75 " alt="" src="'.$image.'">';
     }
 
     public function  setTitle($title) {
        echo ' <h5 class="tech_item_text_text relative uppercase transition-all duration-75 mb-3.5 font-semibold text-xl ">'.$title.'</h5>';
     }
}