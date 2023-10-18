<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="envio.php" method="post" id="formulario">

    <label for="">Nombre</label>
    <input name="nombre" type="text">
    <br>
    <label for="">Apellido</label>
    <input name="apellido" type="text">
    <br>
    <label for="">Edad</label>
    <input name="edad" type="text">
    <br>
    <select  name="carrera" id="">
        <option value="Ingenieria">ingenieria</option value>
        <option value="Diseño">Diseño</option value>
</select>
        <button type="submit">Envio</button>
</body>
</html>