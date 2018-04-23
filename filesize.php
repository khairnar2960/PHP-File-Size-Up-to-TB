<?php
$path="sample.zip";  //file with path goes here
$a=filesize("$path");
$kb=2**10;
$mb=2**20;
$gb=2**30;
$tb=2**40;
if($a<$kb){
$fsize=$a;
$type=" Byte";
}elseif($a>=$kb AND $a<$mb){
$fsize=$a/$kb;
$type=" KB";
}elseif($a>=$mb AND $a<$gb){
$fsize=$a/$mb;
$type=" MB";
}elseif($a>=$gb AND $a<$tb){
$fsize=$a/$gb;
$type=" GB";
}else{
$fsize=$a/$tb;
$type=" TB";
}
echo sprintf('%0.2f' ,$fsize).$type; //this gives an size upto 2decimal places with an size notation Byte,KB,MB,GB or TB
?>