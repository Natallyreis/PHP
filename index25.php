<?php
    
    $date = new DateTime('28-09-2023');
    $date->modify('+1 monyh');
    echo $date->format('d-m-Y H:i:s');

?> 