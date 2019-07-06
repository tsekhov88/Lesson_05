<?php
        $data = '01.01.2020';
        $time = strtotime($data);
        $today = time();
        $day = ($today - $time)/86400*-1;
        $day = floor($day);
        echo "До нового года осталось ".$day." дней.";
?>
