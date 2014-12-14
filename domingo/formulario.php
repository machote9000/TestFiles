<html>

<body>

<form action="usform.php" method="post">

<label>Nombre:</label>
<input type="text" name="name" placeholder="Introduce tu nombre">
<br/>

<label>Apellido:</label>
<input type="text" name="lastname" placeholder="Introduce tu apellido">
<br/>

<label>Password:</label>
<input type="password" name="password" placeholder="Introduce tu password"><br>
<br/>


<label>Ciudad:</label>
<select name="city">
<option value="zaragoza" selected>Zaragoza
<option value="madrid">Madrid
<option value="barcelona">Barcelona
</select>
<br/>

<label>Sexo:</label>
<input type="radio" name="gender" value="female">Mujer
<input type="radio" name="gender" value="male">Hombre
<input type="radio" name="gender" value="others">Otros
<br/>


<input type="submit" value="Aceptar">

</form>

</body>

</html>