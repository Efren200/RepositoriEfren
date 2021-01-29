<!DOCTYPE html>
<html lang="es">
<?php
  $deporte = recogeVariables("deporte");//Con estas tres linias guardo el nombre del css que voy a aplicar, asi dependiendo del
  validarVariables($deporte, "deporte");// deporte que escoja el usuario pondre un fondo o otro
  $nombre_css = validaDeporte($deporte);

print"<head>";//Esto es el head de la pagina donde se procesan los datos recogidos en el formulario y donde aplicaremos el css a la página.
print"  <meta charset=\"utf-8\">";
print"  <title>DEPORTES</title>";
print"  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">";
print"  <link rel=\"stylesheet\" href=\"../css/$nombre_css\" title=\"Color\">";
print"</head>";
print"<body>";
print"<header>";
print"<h1>RECOGIDA DE DATOS</h1>";
print"</header>";

  function recogeVariables($var){ //Funcion para recoger el valor de la variable segun el name de la cual queremos recoger.
    if(isset($_REQUEST[$var])){
      $tmp = $_REQUEST[$var];
    }
    else{
      $tmp = "";
    }
    {
      return $tmp;
    }
  }

  function validarVariables($dato, $nombre){ //Comprobamos que el valor de la variable es distinto de vacio, en caso de que no tenga valor
    if($dato != ""){                         // le mostramos al usuario un mensaje de  que le falta un valor a aplicar.
        return $dato;
    }
    else{
      print"<p>No ha escrito el $nombre.</p>";
    }
  }

  function validaNombre($dato){ //Esta funcion sirve para validar el nombre con la restriccion de que sean solo letras.
    $patron = "/^[a-z]+$/i";
    if(preg_match($patron, $dato)){
      print "<p>Nombre: <b>$dato</b></p>";
    }
    else{
        print "<p>La variable no son solo letras</p>\n" ;
    }
  }

  function validaApellido($dato){ //Esta funcion sirve para validar el apellido con la restriccion de que sean solo letras.
    $patron = "/^[a-z]+$/i";
    if(preg_match($patron, $dato)){
      print "<p>Apellido: <b>$dato</b></p>";
    }
    else{
        print "<p>La variable no son solo letras</p>\n" ;
    }
  }

  function validaRaqueta($dato){//Esta funcion, dependiendo del deporte de raqueta que escoja el usuario pondra una descripción o otra.
    if($dato == "padel"){       //Mostraremos un titulo, una imagen y una descripción del deporte seleccionado.
      print "<h1>PADEL</h1>";
      print "<img src=\"../imagenes/padel.jpg\">";
      print "<h2>DESCRIPCIÓN: </h2>";
      print "<p>El padel es un deporte de origen mexicano que se juega en parejas y el juego consiste en hacer botar la bola en el
                campo del contrario con la posibilidad de rebotar la pelota en las paredes. El jugador o jugadores opuestos deben 
                devolver la bola con un golpe, cumpliendo con un máximo de un bote para golpearla.
            </p>";
    }
    else if($dato == "tenis"){
      print "<h1>TENIS</h1>";
      print "<img src=\"../imagenes/tenis.jpg\">";
      print "<h2>DESCRIPCIÓN: </h2>";
      print "<p>El tenis es un deporte de raqueta practicado sobre una pista rectangular delimitada por líneas y dividida por una red.
              Se disputa entre dos jugadores (individuales) o entre dos parejas (dobles). El objetivo del juego es lanzar una pelota 
              golpeándola con la raqueta de modo que rebote en la otra cancha pasando la red dentro de los límites permitidos del campo 
              del rival, procurando que este no pueda devolverla para conseguir un segundo rebote en el suelo y por ende un punto.
            </p>";
    }
    else if($dato == "mesa"){
      print "<h1>TENIS DE MESA</h1>";
      print "<img src=\"../imagenes/mesa.jpg\">";
      print "<h2>DESCRIPCIÓN: </h2>";
      print "<p>El tenis de mesa es un deporte de raqueta que se disputa entre dos jugadores o dos parejas (dobles).Diversos estudios han demostrado 
              que la práctica de este deporte mejora, entre otras, la capacidad y el tiempo de reacción, la coordinación ojo-mano, la concentración y la memoria.
              La finalidad de este deporte es que la bola solo pegue un bote en tu campo y luego pasarla al del contrario.
            </p>";
    }
    else{
      print "<h1>SQUASH</h1>";
      print "<img src=\"../imagenes/squash.jpg\">";
      print "<h2>DESCRIPCIÓN: </h2>";
      print "<p>El squash es un deporte en el que se golpea con raqueta una bola de goma contra una pared. Se practica en interior 
              con dos jugadores y una pelota de goma que puede tener distintos grados de velocidad o rebote. El grado de velocidad o 
              rebote se identifica en el color de la pelota. Los jugadores golpean la pelota con sus raquetas haciéndola rebotar en 
              la pared frontal de la cancha. La pelota puede rebotar en todas las paredes cuantas veces sea necesario y en cualquier orden, 
              siempre que golpee en la pared frontal o frontis antes de tocar el suelo. Solo puede rebotar en el suelo una vez antes de que se 
              considere un punto para el contrincante.
            </p>";
    }
  }

  function validaDeporte($dato){ //Esta funcion sirve para mostrar el nombre del css dependiendo del value
    if($dato == "basquet"){      // del radiobutton.
      $css = "basquet.css";
      return $css;
    }
    else if($dato == "golf"){
      $css = "golf.css";
      return $css;
    }
    else if($dato == "beisbol"){
      $css = "beisbol.css";
      return $css;
    }
    else{
        $css = "futbol.css";
        return $css;
    }
  }

  function validaDia($dato){ //En esta funcion dependiendo del numero que recibamos del formulario, mostraremos tantas fotos
    print "<p>He practicado $dato dias esta semana deporte.</p>";//como numeros haya introducido el usuario con un for, desde i=0 hasta
    for ($i=0; $i < $dato; $i++) {                               //el numero introducido.
      print "<img src=\"../imagenes/dia.jpg\" align=\"center\">";
    }
  }

  function validarCheckbox($casilla){ //Esta funcion dependiendo si el valor esta vacio o no, mostrara una imagen relacionada con el ingrediente
    if($casilla != ""){               // seleccionado por el usuario.
      print"<img src=\"../imagenes/$casilla.jpg\">";
    }
    
  }

  function validaPuntuacion($dato){ //Esta funcion es similar a la de validarDia, mostrando tantas estrellas como valorada haya sido
    print "<p>Puntuación : <b>$dato</b></p>";// la página, lo haremos con un for como antes.
    for ($i=0; $i < $dato; $i++) { 
      print"<img src=\"../imagenes/puntuacion.png\">";
    }
  }

  function guardarPalabras($dato){ //Esta funcion me guarda las pablabras introducidas en el textarea en una variable sin los espacios. 
    $palabras = explode(" ", $dato);
    return $palabras;
  }

  function contarPalabras($dato){ // Esta funcion me cuenta cuantas palabras ha introducido el usuario.
    $contador = 0;
    for ($i=0; $i < count($dato); $i++) {
      $contador++;
    }
    return $contador;

  }

  function mostrarPalabras($dato, $contador){ // Esta funcion mostrara el texto y las palabras separadas y rodeadas por un borde.
    print" <p>Esto es lo que opinas de nosotros: </p>";
    for($i = 0; $i < $contador; $i++){
      //Genero aqui dentro el codigo css para enmarcar las palabras porque si lo aplico en el css no me funciona
      print "<p style='display: inline-block; border: 3px black solid; background-color: rgb(11, 70, 180); color:white; text-align: center; margin: 6px'><b> $dato[$i] </b> </p>";
    }
    print "<p>Has escrito $contador palabras.</p>";
  }
  function diaHoy($dia){ // Esta funcion es para saber en que dia de la semana estamos segun el valor recogido en el date.
    if($dia=="1"){
      $dia_n = "Lunes";
    }
    else if($dia=="2"){
      $dia_n = "Martes";
    }
    else if($dia=="3"){
      $dia_n = "Miercoles";
    }
    else if($dia=="4"){
      $dia_n = "Jueves";
    }
    else if($dia=="5"){
      $dia_n = "Viernes";
    }
    else if($dia=="6"){
      $dia_n = "Sábado";
    }
    else{
      $dia_n = "Domingo";
    }
    return $dia_n;
  }


  print"<div id=\"nombre\">";//Separo cada una de las variables recogidas con un div con diferentes id para luego en el css aplicarle 
  $nombre = recogeVariables("nombre");// unas caracteristicas diferentes a cada uno. Dentro del div de cada uno, recojo las variables,
  validarVariables($nombre, "nombre");// las valido y luego aplico la funcion correspondiente a cada uno para que hagan su funcionalidad.
  validaNombre($nombre);
  print"</div>";

  print"<div id=\"apellido\">";
  $apellido = recogeVariables("apellido");
  validarVariables($apellido, "apellido");
  validaApellido($apellido);
  print"</div>";

  print "<div id=\"raqueta\">";
  $raqueta = recogeVariables("raqueta");
  validarVariables($raqueta, "raqueta");
  validaRaqueta($raqueta);
  print"</div>";

  print "<div id=\"dia\">";
  $dia = recogeVariables("dia");
  validarVariables($dia, "dia");
  validaDia($dia);
  print"</div>";

  print "<div id=\"check\">";//En el checkbox hago 4 llamadas diferentes por si el usuario selecciona los 4 ingredientes, en caso de 
  $pollo = recogeVariables("casilla1");// que no seleccione una, no la mostraremos.
  validarCheckbox($pollo);

  $huevo = recogeVariables("casilla2");
  validarCheckbox($huevo);

  $patatas = recogeVariables("casilla3");
  validarCheckbox($patatas);

  $manzana = recogeVariables("casilla4");
  validarCheckbox($manzana);
  print "</div>";

  print "<div id=\"valora\">";
  $opinion = recogeVariables("puntuacion");
  validarVariables($opinion, "puntuacion");
  validaPuntuacion($opinion);
  print "</div>";

  print "<div id=\"texto\">";
  $texto = recogeVariables("comentario");
  validarVariables($texto, "comentario");
  $palabra = guardarPalabras($texto);
  $contador = contarPalabras($palabra);
  mostrarPalabras($palabra, $contador);
  print "</div>";

  print "<div id=\"hoy\">";//Esta parte es la de recoger la fecha actual, utilizo el date para recoger el dia, y luego saco el dia
  $dia = date("N");         // con la funcion anterior, dependiendo del dia del 1 al 7 que estemos me mostrará el dia en letras. Después,
  $dia_hoy = diaHoy($dia);  // tambié muestro el dia en numeros, el mes en numeros y el año con 4 digitos
  $d_hoy = date("j");
  $mes = date("m");
  $anyo = date("Y");
  print"$dia_hoy , $d_hoy - $mes -  $anyo ";   //Hago un print con los datos anteriores para mostrar la fecha actual.
  print "</div>";

  print"<footer>";
  print"  <p>Efrén Palop García</p>";
  print"</fotter>";

?>
</body>
</html>

