<?php

$a=1;
echo "Display numbers upto 10<br/>";
for($a=1;$a<=10;$a++){
    echo "$a<br/>";
}
echo "Display even numbers<br/>";
for($a=1;$a<=10;$a++){
    if($a%2==0){
        echo "$a<br/>";
    }
}
echo "Display odd numbers<br/>";
for($a=1;$a<=10;$a++){
     if($a%2==!0){
        echo "$a<br/>";
}
}
?>