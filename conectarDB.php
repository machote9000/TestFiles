<?php

$host='localhost';
$userphp='PHP';
$password='1234';
$database='usuarios';



$conexion= mysqli_connect($host, $userphp, $password, $database) or die ("unable to connect");

$consulta= mysqli_query($conexion, "select * from cities") or die ("query failed");
if($consulta==TRUE)
    echo "consulta ok";


$nfilas= mysqli_num_rows($consulta);
echo $nfilas;



echo "<br />";
while($fila=mysqli_fetch_assoc($consulta))
{
    echo "<pre>";
    print_r ($fila);
    echo "</pre>";
}

// for($i=0;$i<=$nfilas;$i++)
// {     
//     $fila=mysqli_fetch_array($consulta, MYSQLI_ASSOC);
// //     echo $fila['cities'];
//     echo $fila["idcity"];
//     echo $fila["city"];
//     printf ("%s (%s)\n", $fila["idcity"], $fila["cities"]);
//     echo "<br />";
// }

mysqli_close($conexion);


?>