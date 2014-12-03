<?php

?>

<html>

<head>
<title>Formulario.php</title>

</head>

<body>

<form action="visu.php" method="post">

<label>Nombre</label>
<input type="text" name="name" placeholder="Introduce nombre: "><br />


<label>Email</label>
<input type="text" name="email" placeholder="Introduce e-mail"><br />


<label>Password</label>
<input type="password" name="password" placeholder="Introduce password"><br />


<label>Descripcion:</label>
<br />
<textarea cols="50" rows="4" name="description">Cuenta algo aqui
</textarea><br />

<label>Idiomas</label><br />
<select multiple size="3" name="languajes[]">
<option value="Ingles">Ingles
<option value="Frances">Frances
<option value="Espanol">Espanol
</select>
<br />


<label>Ciudad</label>
<select name="city">
<option value="Zaragoza" selected>Zaragoza
<option value="Madrid">Madrid
<option value="Sevilla">Sevilla
</select><br />

<label>Sexo</label>
<input type="radio" name="gender" value="female">Mujer
<input type="radio" name="gender" value="male">Hombre
<input type="radio" name="gender" value="others">Otros

<br />

<label>Hobbies</label><br />
<input type="checkbox" name="hobbies[]" value="futbol">Futbol
<input type="checkbox" name="hobbies[]" value="basket">Basket
<input type="checkbox" name="hobbies[]" value="pesca">Pesca
<input type="checkbox" name="hobbies[]" value="ciclismo">Ciclismo
<input type="checkbox" name="hobbies[]" value="caza">Caza
<br />

<label>Foto</label>
<input type="file" name="pic">
<br />
<br />
<input type="submit" value="Enviar">
</form>

</body>
</html>