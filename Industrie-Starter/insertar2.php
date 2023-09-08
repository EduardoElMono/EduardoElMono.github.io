<!DOCTYPE html>
<html>
<head>
	<title>Insertar datos para certificado de 2 niños</title>
	 <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="file"] {
            width: 95%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="file"] {
            padding: 5px;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #258cd1;
        }
    </style>
</head>
<body>
	<form class="" action="generador2.php" method="post" enctype="multipart/form-data">
		<label for="">Nombre del Padrino</label>
		<input type="text" name="padrino" value="">

		<label for="">Nombre del primer ahijado</label>
		<input type="text" name="ahijado" value="">

		<label for="">Nombre del segundo ahijado</label>
        <input type="text" name="ahijado2" value="">

		<label for="">Imagen del primer ahijado</label>
		<input type="file" name="imagen" value="" required>

        <label for="">Imagen del segundo ahijado</label>
        <input type="file" name="imagen2" value="" required>

		<input type="submit" name="" value="Guardar">


</body>
</html>