<?php
require 'vendor/autoload.php';
use Andreshg112\ChuckNorrisJokes\JokeFactory;

$jokes = new JokeFactory;

$joke = $jokes->getRandomJoke();

$key = $joke;
$encrypter = new \CodeZero\Encrypter\DefaultEncrypter($key);
$encrypted = $encrypter->encrypt('some string');


echo '

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="CSS/estilo.css">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8">
</head>

<body>


    <div class="row">

        <div class="col s12  blue center-align card-panel teal lighten-2">
            <h4>Examen Despliegue Aplicaciones Web</h4>
        </div>
        
        <div class="col s9  ">
            
            <p>
            En este ejercicio vamos a generar un chiste aleatorio sobre chuck-norris utilizando el paquete  de composer :
            <br>
            andreshg112/chuck-norris-jokes
            <br>
            Una vez generado el chiste me encriptara dicho chiste utlizando el paquete:
            <br>
            codezero/encrypter
            <br>
            NOTA: Para la  key que necesita el paquete de encriptacion utiliza la que quieras, es decir NO es necesario que la
            introduzcas, se la puedes asignar directamente a una variable.
            </p>
            
        
            
        </div>
        <aside>
                    <h5>Enlace Heroku </h5>
                    Pulsa sobre esta imagen para ver desplegada la aplicacion sobre heroku
                    <p>
                    <a title="Heroku" href=""><img src="imagenes/heroku.png" alt="Heroku" width="100" height="100" /></a>
                    </p>
        </aside>
        <form class="col s12" method="POST" action="index.php">
        <div class="row">
            <!-- el "for" del label tiene que asociarse a la ID del input, no al nombre,
                 sino, al hacer click sobre el texto en el navegador, este no se quita para escribir -->
           
            <div class="md-form col s7">
                <label for="form7">Chiste</label>
                <textarea name="form7" class="form-control rounded-0" rows="5">'.$joke.'</textarea>
               
            </div>
               

            <div class="md-form col s7">
                <label for="form7">Chiste Cifrado</label>
                <textarea name="form7" class="form-control rounded-0" rows="5" >'.$encrypted.'</textarea>
           
            </div>
        
            <div class="row "></div> <!-- linea en blanco -->

                
            </div>
                
        </div>
        </form>
    </div>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>';
