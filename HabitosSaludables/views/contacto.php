<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Contactame</title>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    <link href="http://localhost/HabitosSaludables/HabitosSaludables/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom my styles css -->
    <link rel="stylesheet" type="text/css" href="http://localhost/HabitosSaludables/HabitosSaludables/css/estilos.css" />
    
    <script src="https://use.fontawesome.com/5e5d7b75f2.js"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="http://localhost/HabitosSaludables/HabitosSaludables/js/bootstrap.min.js"></script>
 
</head>
<body>
<div class="container">
<?php 
    include_once("header.php") 
?>
<!-- Container (Contact Section) -->
<div class="container-fluid bg-grey">
    <h2 class="text-center">CONTACTO</h2>
    <form name="frmContacto" method="post" action="http://localhost/HabitosSaludables/HabitosSaludables/controller/contacto.php">
    <div class="row">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-6 form-group">
                    <input class="form-control" id="name" name="name" placeholder="Nombre" type="text" required>
                </div>
                <div class="col-sm-6 form-group">
                    <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                </div>
                <div class="col-sm-12 form-group">
                    <input class="form-control" id="web" name="web" placeholder="Pagina Web" type="text" required>
                </div>
            </div>
        
                <textarea class="form-control" id="comments" name="comments" placeholder="Comentario" rows="5"></textarea><br>
            <div class="row">
                <div class="col-sm-12 form-group">
                    <button class="btn btn-default pull-right" type="submit">Enviar</button>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>
<!-- Site footer -->
<?php 
    include_once("footer.php") 
?>
</div>
</body>
</html>