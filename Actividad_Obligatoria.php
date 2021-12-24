<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Actividad Obligatoria - Modulo 1</title>
        <link rel="stylesheet" type="text/css" href="actividad.css">
    </head>
    <body>
        <h1>Actividad Obligatoria - Modulo 1</h1>
        <div>
            <?php
                // Validador de Edad. CONSTANTE
                const mayor = 18;
                $edad = 17;
                if ($edad>mayor){
                    echo "<p id=legal>La persona es mayor de edad.</p>";
                } else {
                    echo "<p id=menor>La persona es menor de edad.</p>";
                }
                //________________________________________________
                //VARIABLES.
                $nombre = "Skip";
                $accion = "Ladrar";

                echo "<p id=mascota>El perro $nombre sabe $accion</p>";
                //________________________________________________
                // VARIABLE + OPERADORES.
                $anios = 29;
                $anios++;
                echo "<p id=edad>El año que viene usted tendra $anios años.</p>";
            ?>
        </div>
        <hr>
    </body>
</html>