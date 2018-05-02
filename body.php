  <body>
    <div class="container">
      <div class="row py-5">
        <div class="col">
          <h1><?php print($title);?></h1>
          <h3>Hoy es la clase <?php print($number);?></h3>
          <h5 class="my-3">Today is <?php print($fecha);?></h5>
          <p>A continuación usaré el <a href="http://php.net/manual/es/function.print-r.php">print_r</a> para mostrarles la información de algunas variables:</p>
          <hr>
          <pre class="my-3"><code><?php print_r($arreglo);?></code></pre>
        
          <ul>
          <?php  //ENTRAR A ARREGLO CON FOR
          for($a=0; $a<count($arreglo); $a++){
            print('<li>' .$arreglo[$a].'</li>');
          } 
          ?>
          </ul>

          <hr>
          <pre class="my-3"><code><?php print_r($arreglobjeto);?></code></pre>
        
          <p>Mi nombre es <?php print ($arreglobjeto[nombres].' '.$arreglobjeto[apellidos])?>
            , tengo <?php print ($arreglobjeto[edad])?> años,
            mi signo zodiacal es <?php print ($arreglobjeto[signo])?>
            y mi animal espiritual es el <?php print ($arreglobjeto[animal])?>.
          </p>

          <hr>
          <p>Lo que sigue es un <a href="https://github.com/profesorfaco/dno037-2018-09/blob/master/data/swapi-planets.csv">CSV</a> que armé tomando lo que necesitaba de <a href="https://swapi.co/">SWAPI</a>:</p>
          <pre class="my-3"><code><?php print_r($csv);?></code></pre>

          <p>Tengo información de los siguientes planetas de Star Wars: <strong>
          <?php  //ENTRAR A ARREGLO CON FOR. ??????????????????????????????? PARA QUE SON LOS PUNTOS
        for($a=0; $a<count($csv); $a++){
            if ($a < count($csv)-2) {
            print( $csv[$a][name].'</strong>,<strong> ');
          } elseif ($a == count($csv)-2) {
          print( $csv[$a][name].' </strong>y<strong> ');   
        }   else {
              print($csv[$a][name].'.');          
          }
        }
         
          ?>
          </strong>
          </p>

          <hr>
          <pre class="my-3"><code><?php print_r($json);?></code></pre>
          <p>En las últimas 24 horas, han sido registrados <?php print(count($json[features]));?> temblores de magnitud igual o superior a 4.5 . El más reciente: <?php print($json[features][0][properties][title])?></p> 
          <p>Si le dan un vistazo al párrafo anterior con "ver código fuente", no encontrarán nada más que HTML. Pero, si lo revisan en sus editores de código podrán ver PHP.</p> 
        </div>
      </div>
    </div>
    <script>
      //¿Puedo mezclar PHP y JavaScript?
      var starwars = JSON.parse('<?php print($arreglinjson);?>');
      //si, acá tienes un ejemplo.
      console.log(starwars);
      //si mezclan: háganlo con cuidado, para no confundir sintaxis
      console.log("El planeta más grande es " + starwars[5].name);
    </script>
  </body>
      <title><?php print($title);?></title>
 </head>