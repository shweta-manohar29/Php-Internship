<?php
//count()
echo"//count()<br/>";
$a=array(10,20,20,40,'s','f',60);
echo count($a)."<br/>";

//array_count_values()
echo "//array_count_values()<br/>";
$b= array_count_values($a);
foreach ($b as $key => $value) {
    echo"key is $key and value is $value <br/>";
}

//array_sum
echo"//array_sum()<br/>";
$c=array(8,10,20,3,4,5,6);
$d= array_sum($c);
echo $d."<br/>";

//array_product()
echo"//array_product()<br/>";
$e= array_product($c);
echo $e."<br/>";

//array_reverse()
echo"//array_reverse()<br/>";
$f= array_reverse($c);
print_r($f);

//in_array
echo"//in_array()<br/>";
$g= in_array(6, $c);
echo"$g.<br/>";

//array_rand()
echo"//array_rand()<br/>";
$h= array_rand($c); //returns array index
echo"$h.<br/>";

//array_unique
echo"//array_unique<br/>";
$i= array_unique($a);
print_r($i);

//array_merge
echo"//array_merge<br/>";
$j= array_merge($a,$c);
print_r($j);

//array_search
echo"//array_search<br/>";
$k= array_search(6, $c);
echo"$k.<br/>";

//range()
echo"//array_range<br/>";
$arr= range("11","20");
foreach ($arr as $key => $value) {
    echo"$key - $value<br/>";
}

//sort()
echo"//sort<br/>";
sort($c);
print_r($c);
echo"<br>";


//rsort()
echo"//rsort()<br/>";
rsort($a);
print_r($a);
echo"<br>";


//asort()
echo"//asort()<br/>";
asort($c);
print_r($c);
echo"<br>";

//ksort()
echo"//ksort<br/>";
$ksort=array(
    "s"=>"f",
    "f"=>"s",
    10=>20,
    30=>40
);
ksort($ksort);
print_r($ksort);
echo"<br>";

//krsort()
echo"//krsort()<br/>";
krsort($ksort);
print_r($ksort);
echo"<br>";

//shuffle()
echo"//shuffle()<br>";
shuffle($ksort);
foreach ($ksort as $key => $value) {
    echo"$value<br/>";
}

//array_key_exists
echo"//array_key_exists";
echo array_key_exists('s', $ksort);
echo"<br>";

//array_change_key_access
echo"//array_change_key_access<br/>";
$sf=array(
    0=>10,
    1=>20,
    "php"=>40,
    "c++"=>"java",
    "html"=>"Web design",
    80=>"web develop"
);
$SF= array_change_key_case($sf,CASE_UPPER);
print_r($SF);
echo"<br>";

//array_combine
echo"//array_combine<br/>";
$arr1= array_combine($a, $c);
print_r($arr1);
echo"<br>";

//end()
echo"//end()<br/>";
echo end($sf);

//compact
echo"//compact<br/>";
$name="shweta";
$surname="jariwala";
$sf1= compact("name","surname");
print_r($sf1);
echo"<br>";

//array_flip
echo"//array_flip<br/>";
$sf2= array_flip($sf);
print_r($sf2);
echo"<br>";

//arrray_diff
echo"//arrray_diff<br/>";
$diff= array_diff($c,$a);
print_r($diff);

//array_interscet
echo"//array_interscet<br/>";
$a1=array(
    1=>"sat",
    2=>"thur",
    3=>"wed"
);
$a2=array(
    4=>"tue",
    5=>"thur",
    6=>"sat"
);
$intersect= array_intersect($a1,$a2);
print_r($intersect);
echo"<br>";

//array_value
echo"//array_value<br/>";
$values= array_values($a1);
foreach ($values as $key => $value) {
    echo"$key - $value <br/>";
}
//array_push
echo"//array_push<br/>";
array_push($a,"phython",".net");
print_r($a);
echo"<br>";
//array_pop
echo"//array_pop<br/>";
array_pop($a);
print_r($a);
echo"<br>";

//explode
echo"//explode<br/>";
$b1="I love Php language";
$explode= explode(" ", $b1);
print_r($explode);
echo"<br>";

//implode
echo"//implode<br/>";
$b2=array("i","love","php","language");
$implode= implode(" ", $b2);
print_r($implode);

?>

