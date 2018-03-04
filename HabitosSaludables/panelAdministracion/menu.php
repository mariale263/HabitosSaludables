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

    

  </head>
    <body>
        <div id="menu"> 
                <?php 
                include("../model/basededatos.php"); //Incluimos los datos de la conexion de base de datos 
                $menu_sql = mysqli_query($con,"SELECT id,nombre FROM menu"); //Selecciona los titulos del menu
                
                while($menu = mysqli_fetch_row($menu_sql)) //Entregara los datos en forma de $menu[numero], empezando con el 0
                {  //Repetira el siguiente echo con todos los datos de la consulta 
                    echo '<ul> 
                                <li> 
                                    <a href="'.$menu[0].'">'.$menu[1].'</a>'; //Se usa el '. .' para "pausar" el echo y mostrar una variable acompañada siempre por puntos.
                                    $submenu_sql = mysqli_query($con, "SELECT id,nombre,menu_id,cont_item FROM submenu WHERE menu_id = '".$menu[0]."'"); //Selecciona los subsmenu con la condición de mostrar en el menu que corresponda (Por id)
                                    if(mysqli_num_rows($submenu_sql) > 0) //Si la cantidad de filas que muestra la consulta es mayor a 0 imprimiria lo siguiente ( echo )
                                        { 
                                            echo ' 
                                            <div> 
                                                <ul>'; 
                                                    while($submenu = mysqli_fetch_row($submenu_sql)) 
                                                        { 
                                                            echo ' 
                                                            <li><a href="'.$submenu[0].'">'.$submenu[1].' ('.$submenu[3].')</a></li>'; 
                                                        } 
                                                    mysqli_free_result($submenu_sql); //Liberamos memoria para no saturar el servidor, si es muy visitado, pero siempre es mejor tomar precauciones :)
                                                    echo ' 
                                                </ul> 
                                            </div>'; 
                                    } 
                                echo ' 
                                </li> 
                            </ul> 
                    '; 
                } 
                mysqli_free_result($menu_sql); //Aqui tambien liberamos la memoria en la consulta del menu
                mysqli_close($con); //Cerramos la conexion a la db 
                ?> 
        </div> 

    </body>
</html>