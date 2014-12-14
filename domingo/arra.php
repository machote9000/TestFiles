<?php

echo "<pre>";
print_r($_POST);
echo "</pre>";

$a=$_POST;



foreach ($a as $k =>$v)
{
   echo "$k=>$v \t";
}