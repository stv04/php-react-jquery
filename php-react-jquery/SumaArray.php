<?php
    function sumaArray($ar) {
        $counter = 0;
        foreach($ar as $val) {
            if(is_array($val)) {
                $counter += sumaArray($val);
            } else if($val >= 0) {
                $counter+=$val;
            }
        }

        return $counter;
    }
?>
