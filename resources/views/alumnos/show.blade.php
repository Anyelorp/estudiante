<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Alumno</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .info {
            margin-bottom: 20px;
        }

        .info label {
            font-weight: bold;
        }

        .info p {
            margin: 5px 0;
        }

        .btn-back {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }

        .btn-back:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Detalles del Alumno</h2>
        <div class="info">
            <label for="nombre">Nombre:</label>
            <p>{{ $alumno->nombre }}</p>
        </div>

        <div class="info">
            <label for="apellido">Apellido:</label>
            <p>{{ $alumno->apellido }}</p>
        </div>

        <div class="info">
            <label for="email">Email:</label>
            <p>{{ $alumno->email }}</p>
        </div>

        <div class="info">
            <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
            <p>{{ $alumno->fecha_nacimiento }}</p>
        </div>

        <a href="{{ route('alumnos.index') }}" class="btn-back">Volver</a>
    </div>
</body>
</html>
