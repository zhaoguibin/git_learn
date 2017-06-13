<?php
$b=array('4','3','8','9','2','1');
$len=count($b);//6
for($k=0;$k<=$len;$k++)
{
    for($j=$len-1;$j>$k;$j--){
        if($b[$j]<$b[$j-1]){
            $temp = $b[$j];
            $b[$j] = $b[$j-1];
            $b[$j-1] = $temp;
        }
    }
}
var_dump($b);
