</h1>Loops<h1>



<?php


$i=1;

while($i <6){
    echo $i;
    $i++;
}


$o=1;
do{
    echo $o;
    $o++;
}
while ($o < 6);


    $colors = array("red","green","yellow");
foreach ($colors as $x){
    echo $x."<br/>";
}



?>