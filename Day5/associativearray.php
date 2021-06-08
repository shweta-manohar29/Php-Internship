<?php
//in associative array assign key and value
//key=>value
$a=array(
    0=>10,
    1=>20,
    "php"=>40,
    "c++"=>"java",
    "html"=>"Web design",
    80=>"web develop"
);
echo $a['c++'];

foreach ($a as $value) {
    echo "<br/> value is".$value;
}

foreach ($a as $key => $value) {
    echo "<br/> key is $key and value is $value";
}

echo"<pre>";
var_dump($a);
echo"<pre/>";
?>