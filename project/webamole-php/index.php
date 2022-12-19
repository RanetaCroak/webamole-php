<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main page</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <form action="#" method="post">
        <!-- Campo numérico para mostrar una imagen -->
        <label for="num-img">Introduce el número de imágenes a mostrar:</label><br>
        <input type="number" id="num-img" name="num-img"><br>
        <br>

        <!-- Elemento para mostrar las estrellas -->
        <div class="estrellas">

            <label for="puntuacion">Puntuación de la página (de 0 a 5):</label><br>
            <input type="range" id="puntuacion" class="slider estrellas" name="puntuacion" min="1" max="5" value="1"><br>
            <pre>



</pre>
        </div>


        <!-- Campo select con contenido asociado -->
        <label for="contenido">Selecciona un contenido:</label><br>
        <select id="contenido" name="contenido">
            <option value="opcion1">Opción 1</option>
            <option value="opcion2">Opción 2</option>
            <option value="opcion3">Opción 3</option>
        </select><br>
        <br>

        <!-- Campo textarea para comentarios -->
        <label for="comentario">Introduce tu comentario:</label><br>
        <textarea id="comentario" name="comentario" rows="5" cols="40"></textarea><br>
        <br>

        <!-- Checkboxes para seleccionar temas -->
        <label for="tema1">Tema 1:</label>
        <input type="checkbox" id="tema1" name="tema1"><br>
        <label for="tema2">Tema 2:</label>
        <input type="checkbox" id="tema2" name="tema2"><br>
        <label for="tema3">Tema 3:</label>
        <input type="checkbox" id="tema3" name="tema3"><br>
        <br>

        <!-- Radiobutton para cambiar el estilo de la página -->
        <label for="estilo1">Estilo 1:</label>
        <input type="radio" id="estilo1" name="estilo" value="estilo1"><br>
        <label for="estilo2">Estilo 2:</label>
        <input type="radio" id="estilo2" name="estilo" value="estilo2"><br>
        <br>

        <!-- Botón para enviar el formulario -->
        <button type="submit">Enviar</button>
    </form>

</body>

</html>