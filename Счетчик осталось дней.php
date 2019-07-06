<?php
        $data = '09.05.1945';
        $time = strtotime($data);
        $today = time();
        $day = ($today - $time)/86400;
        $day = floor($day);
        echo "C 9 мая 1945 года прошло ".$day." дней.";
?>