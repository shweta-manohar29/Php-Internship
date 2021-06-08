<?php

$a=array(10,20,30,40,"c","c++");
echo "print single array<br/>";
echo "$a[5]<br/>";
echo"print whole array <br/>";
for($i=0;$i<=5;$i++)
{
    echo "$a[$i]<br/>";
}

//using while loop
echo"using while loop<br/>";
$i=0;
while($i< count($a)){
    
    echo "$a[$i]<br/>";
    $i++;
}

//inbuilt function to debug array
echo"<pre>";
print_r($a);
echo"<pre/>";

//use to check the datatype of element of array
echo"<pre>";
var_dump($a);
echo"<pre/>";
?>
