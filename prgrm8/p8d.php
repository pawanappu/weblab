<?php
$a1=array('0'=>array('0'=>1,'1'=>2),'1'=>array('0'=>4,'1'=>5));
$a2=array('0'=>array('0'=>1,'1'=>2),'1'=>array('0'=>4,'1'=>5));
$res=array();
for($i=0;$i<=1;$i++){
for($j=0;$j<=1;$j++){
$res[$i][$j]=0;
for($k=0;$k<=1;$k++)
$res[$i][$j]+=$a1[$i][$k]*$a2[$k][$j];
}
}
echo"<p>matrix multipication</p>";
echo"<pre/>";print_r($res);
?>
