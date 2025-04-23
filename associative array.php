<?php
// associative array = an array made of key => value pairs

$capitals = array("USA" => "Washington",
                  "Japan" => "Tokyo",
                  "South Korea" => "Seoul",
                  "Vietnam" => "Hanoi");
                  
// $capitals["USA"] = "Las Vegas";
// $capitals["China"] = "Beijing";
// array_pop($capitals);
// array_shift($capitals);
//$keys = array_keys($capitals);
//$values = array_values($capitals);
//$capitals = array_flip($capitals);

foreach($capitals as $key => $value)
{
    echo "{$key} = {$value} <br>";
}
?>
