<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller 1</title>
</head>

<body>

    <h1>Punto 1</h1>

    <?php

    $promedioMaximo = 0;
    $mejorEstudiante = "";

    $estudiantes = [
        "Ana" => [
            "Calculo 1" => 2.1,
            "Introduccion a la ingenieria" => 3.9,
            "Programacion web" => 3.3
        ],
        "Luis" => [
            "Calculo 1" => 4.1,
            "Introduccion a la ingenieria" => 3.5,
            "Programacion web" => 2.7
        ],
        "Maria" => [
            "Calculo 1" => 4.1,
            "Introduccion a la ingenieria" => 4.8,
            "Programacion web" => 4.5
        ],
        "Carlos" => [
            "Calculo 1" => 1.3,
            "Introduccion a la ingenieria" => 2.1,
            "Programacion web" => 3
        ]
    ];


    foreach ($estudiantes as $nombre => $materias) {

        $sumaCalificaciones = 0;

        echo "<strong>$nombre:</strong><br>";

        foreach ($materias as $materia => $calificacion) {
            echo "$materia: $calificacion<br>";
            $sumaCalificaciones += $calificacion;
        }

        $promedio = $sumaCalificaciones / count($materias);

        echo "Promedio: $promedio<br><br>";

        if ($promedio > $promedioMaximo) {
            $promedioMaximo = $promedio;
            $mejorEstudiante = $nombre;
        }
    }

    echo "<strong>El estudiante con el promedio más alto es $mejorEstudiante con un promedio de $promedioMaximo.</strong>";
    ?>

    <h1>Punto 2</h1>

    <?php

    $empleados = [
        "Juan Duque" => [
            "salario" => 1750000,
            "fecha_contratacion" => "2020-01-15",
            "departamento" => "Finanzas"
        ],
        "John Doe" => [
            "salario" => 1975000,
            "fecha_contratacion" => "2018-03-22",
            "departamento" => "Recursos Humanos"
        ],
        "Carlos Castañeda" => [
            "salario" => 2185000,
            "fecha_contratacion" => "2019-07-10",
            "departamento" => "Tecnología"
        ],
        "Ana Rodriguez" => [
            "salario" => 1750000,
            "fecha_contratacion" => "2017-11-05",
            "departamento" => "Marketing"
        ]
    ];

    foreach ($empleados as $nombre => $info) {
        echo "Empleado: $nombre - Salario: $" . $info['salario'] . "<br>";
    }
    ?>

    <h1>Punto 3</h1>

    <?php

    $productos = [
        "Laptop" => [
            "precio" => 1700000,
            "detalles" => [
                "disponibilidad" => true,
                "reseñas" => ["Buena calidad", "Precio razonable"]
            ]
        ],
        "Smartphone" => [
            "precio" => 900000,
            "detalles" => [
                "disponibilidad" => false,
                "reseñas" => ["Excelente cámara", "Batería de larga duración"]
            ]
        ],
        "Auriculares" => [
            "precio" => 350000,
            "detalles" => [
                "disponibilidad" => true,
                "reseñas" => ["Sonido claro", "Cómodos de usar"]
            ]
        ],
        "Tablet" => [
            "precio" => 700000,
            "detalles" => [
                "disponibilidad" => true,
                "reseñas" => ["Pantalla de buena resolución", "Ligera y portátil"]
            ]
        ]
    ];

    foreach ($productos as $nombre => $info) {
        if ($info['detalles']['disponibilidad']) {
            echo "Producto: $nombre - Precio: $" . $info['precio'] . "<br>";
        }
    }
    echo "<strong>No se muestra el smartphone porque por el valor el false indicando que no tiene cantidad</strong>";
    ?>


</body>

</html>