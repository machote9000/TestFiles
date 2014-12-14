<?php


$file="apellidos.txt";
    

$a=$_POST;
// $nombre=$_POST['name'];
// $apellido=$_POST['lastname'];

foreach($a as $k =>$v)
{
    file_put_contents($_SERVER['DOCUMENT_ROOT']."/".$file, $v."|", FILE_APPEND);
    if($v==end($a))
    {
      file_put_contents($_SERVER['DOCUMENT_ROOT']."/".$file, "\n", FILE_APPEND); 
    }
}


die;


// header("Location: formulario.php");
