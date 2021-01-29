    <form action = "./include/procesa.php" method="post"><!--Esta parte es el contenido, que contendrá el formulario
    donde obtendremos los valores de las variables para procesarlos posteriormente. -->
        <p><b>Nombre : </b><input id="nombre" type="text" name="nombre" value="" required></p><br>
        <p><b>Apellidos : </b><input id="nombre" type="text" name="apellido" value="" required ></p>

        <p><label><b>Cual de los siguientes deportes has practicado alguna vez? </b></label>
        <select name="raqueta" required>
            <option  value="padel">Padel</option>
            <option  value="tenis">Tenis</option>
            <option  value="mesa">Tenis de mesa</option>
            <option  value="squash">Squash</option>
        </select></p>

        <p><label><b>Elige uno de los siguientes deportes: </b></label></p>
    
        <input type="radio" name="deporte" value="basquet">Basquet<br>
        <input type="radio" name="deporte" value="golf">Golf<br>
        <input type="radio" name="deporte" value="beisbol">Beisbol<br>
        <input type="radio" name="deporte" value="futbol">Futbol<br>

        <p><b>Cuantos dias a la semana realizas deporte? </b><input type="number" name="dia" value="" min="0" max="7" required></p>

        <p><b><label>Cuales de los siguientes ingredientesson importantes para ti en una dieta? </label></b></p>
        <input type="checkbox" name="casilla1" value="pollo">Pollo<br>
        <input type="checkbox" name="casilla2" value="huevos">Huevos<br>
        <input type="checkbox" name="casilla3" value="patatas">Patatas<br>
        <input type="checkbox" name="casilla4" value="manzana">Manzanas<br>

        <p><b>Puntua la página: </b><input type="number" name="puntuacion" value="" min="0" max="5" required></p>

        <p><b>Opinión personal de la página: </b><textarea name="comentario"></textarea></p>
        <button type="submit" name="boton1">Envia el formulario</button>
        
    </form>
