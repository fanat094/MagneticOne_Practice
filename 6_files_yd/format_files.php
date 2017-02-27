<?php

$files = scandir("c://xampp/htdocs/test", 1);
foreach ($files as $value){
    $int = intval(preg_replace('/[^0-9]+/', '', $value), 10);
    if ($int > 10){
        echo $value.'<br>';
    }
}
