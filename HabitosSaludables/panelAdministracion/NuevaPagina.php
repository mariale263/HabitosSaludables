<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Habitos Saludables</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
      <!-- Bootstrap core CSS -->
    <link href="http://localhost/HabitosSaludables/HabitosSaludables/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    
        <!-- Custom my styles css -->
    <link rel="stylesheet" type="text/css" href="http://localhost/HabitosSaludables/HabitosSaludables/css/estilosPanel.css" />
    
    <script src="https://use.fontawesome.com/5e5d7b75f2.js"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="http://localhost/HabitosSaludables/HabitosSaludables/js/bootstrap.min.js"></script>
    <script src="http://localhost/HabitosSaludables/HabitosSaludables/js/menu.js"></script>

    <!-- include summernote css/js-->
    

<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.js"></script>
<script src="http://localhost/HabitosSaludables/HabitosSaludables/js/summernote.js"></script>
    

  </head>
    <body>
    <?php 
            include_once("headerPanel.php") 
        ?>
        <div class="relleno-panel">

        <form method="post">
            <div>
                <h1>Agregar nueva página</h1>
                <label for="">Introduce el título aquí:</label>
                <input type="text" name="titulo"><br>
                <textarea id="summernote" name="editordata"></textarea>
                <input type="submit" name="Guardar borrador" value="Guardar borrador">
                <input type="submit" name="Vista previa" value="Vista previa">
                <a href="#">Editar</a>
            </div>
            <div>
                <input type="submit" name="Publicar" value="PUBLICAR">
            </div>
            <div>
                <h2>Atributos de la página</h2>
                <p>
                    <label for="">Lugar del menú</label>
                </p>
                <select name="select-menu" id="">
                    <option value="">Sobre Mi</option>
                    <option value="">Desayuno</option>
                    <option value="">Almuerzos</option>
                    <option value="">Meriendas</option>
                    <option value="">Cenas</option>
                </select>
            </div>
                

        </form>

        </div>
    </body>
</html>


