<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Habitos Saludables</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    <link href="http://localhost/HabitosSaludables/HabitosSaludables/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="../../HabitosSaludables/css/bootstrap/justified-nav.css" rel="stylesheet">

    <!-- Custom my styles css -->
    <link rel="stylesheet" type="text/css" href="http://localhost/HabitosSaludables/HabitosSaludables/css/estilos.css" />
    
    <script src="https://use.fontawesome.com/5e5d7b75f2.js"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="http://localhost/HabitosSaludables/HabitosSaludables/js/bootstrap.min.js"></script>
    <script src="http://localhost/HabitosSaludables/HabitosSaludables/js/menu.js"></script>

  </head>
  <body>
    <div class="container">
      <?php 
          include_once("header.php") 
      ?>

      <!-- Cuerpo de imagen y articulo -->
            
			<figure class="imagen1 hidden-xs">
				<img src="../img/OMHY540.jpg" alt="imagen1"></img>
                <a href='https://www.freepik.es/foto-gratis/mesa-con-ingredientes-para-preparar-pasta-italiana_1077857.htm'>Designed by Freepik</a>
                    <div class="articuloPrincipal">
                        <div class="contenedorExterno">
                            <div class="contenedorInterior">
                                <article class="articulo1">
                                    <header class="headerInterno">
                                        <h1>CAMBIANDO HÁBITOS CON MARIALE</h1>
                                    </header>
                                    <div class="contenidoInterno">
                                        <p>
                                        Hola soy Mariale, en este blog encontraran todo sobre mi, ¿Quién soy?, mi salud, las bases de mi alimentación, sobre mi perdida de peso, 
                                        también encontrarán recetas y menús de los platos que consumo a diario.
                                        </p>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
            </figure>
      
     <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-4 aside1">
          <h2 class="guion">TARTA DE AVENA Y PLATANO ESTILO BROWNIE</h2>
          <a title="tarta de avena y platano estilo brownie" href="#">
              <img src="../img/tartabrownie.jpg" alt=""></img>
          </a> 
          <p><a class="btn btn-primary" href="#" role="button">Leer más &raquo;</a></p>
        </div>
        
        <div class="col-lg-4 aside2">
          <h2 class="guion">AREPAS DE ESPINACAS MUY RICAS Y SALUDABLES (HEALTHY)</h2>
          <a title="arepas integrales" href="#">
              <img src="../img/arepasintegrales.jpg" alt=""></img>
          </a>
          <p><a class="btn btn-primary" href="#" role="button">Leer más &raquo;</a></p>
       </div>

        <div class="col-lg-4 aside3">
          <h2 class="guion">CREPS DE HARINA DE TRIGO INTEGRAL Y SEMILLAS DE CHIA</h2>
          <a title="creps de harina de trigo" href="#">
              <img src="../img/creps.jpeg" alt=""></img>
          </a>
          <p><a class="btn btn-primary" href="#" role="button">Leer más &raquo;</a></p>
        </div>
      </div>

      <!-- Site footer -->
      <?php 
          include_once("footer.php") 
        ?>

    </div> <!-- /container -->

  </body>
</html>
