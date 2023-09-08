<!DOCTYPE html>
<html>
<head>
	<title>Insertar datos</title>
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
	<form class="" action="generador.php" method="post" enctype="multipart/form-data">
		<label for="">Nombre del Padrino</label>
		<input type="text" name="padrino" value="">

		<label for="">Nombre del ahijado</label>
		<input type="text" name="ahijado" value="">

		<label for="">Historial del Ahijado</label>
		<input type="text" name="historial" value="">

		<label for="">Que le gusta al ahijado?</label>
		<input type="text" name="qlgusta" value="">

		<label for="">Imagen del ahijado</label>
		<input type="file" name="imagen" value="" required>

		<input type="submit" name="" value="Guardar">


</body>
</html>