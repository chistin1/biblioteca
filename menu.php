<?php
include "seguridad.php";
?>
<!DOCTYPE HTML>
<html>
<head>
    <H1 align="right"><embed src="imagenes/img.jpg"  width="300" heigth="250"> </H1>
    <BODY bgcolor="white" background="imagenes/fondo3.png">
<br>
   <div id="uj"> 
    <h1> ORDENES DE SERVICIO</h1> 
   
</div>
   
    
    <link rel="stylesheet" href="estilos.css" />
    
    
</head>


<H1 align="center">
            
<ul class="nav">
    <li><a href="">Inicio</a>
        <ul>
          
            <li><a href="vistaorden.php">Nuevo</a></li>
            <li><a href="autor.html">Autor</a></li>
        </ul>
    </li>
    
     <li><a href="vistaUsuario.php">Usuarios</a>
       
    
    
    
    
    <li><a href="">Seguimiento de servicio</a>
        <ul>
          
            <li><a href="vistaorden.php">Estado de la orden</a></li>
            
        </ul>
    </li>
    
    

  
    <li><a href="">Ayuda</a>
        <ul>
            <li><a href="">Manual de usuario</a></li>
           
                    
            
        </ul>
    </li>
    
    <li><a href="salir.php">salir</a></li>
</ul>
</ul>
    </H1>
<style type="text/css">

    
    
    * {
font-family:sans-serif;
list-style:none;
text-decoration:none;
margin:0;
padding:0;
}
 
.nav > li {
float:left;
}
 
.nav li a {
background:#C0C0C0;
color:black;
display:block;
border:1px solid;
padding:10px 12px;
font:normal 20pt Bauhaus 93;
    color:black;
    text-shadow: 0 1px 0 #ccc,
               0 2px 0 #c9c9c9,
               0 3px 0 #bbb,
               0 4px 0 #b9b9b9,
               0 5px 0 #aaa,
               0 6px 1px rgba(0,0,0,.1),
               0 0 5px rgba(0,0,0,.1),
               0 1px 3px rgba(0,0,0,.3),
               0 3px 5px rgba(0,0,0,.2),
               0 5px 10px rgba(0,0,0,.25),
               0 10px 10px rgba(0,0,0,.2),
               0 20px 20px rgba(0,0,0,.15);
}
 
.nav li a:hover {
background:#838383;
}
  
    

.nav li ul {
display:none;
position:absolute;
min-width:140px;
}
.nav li:hover > ul {
display:block;
}
.nav li ul li {
position:relative;
}
 
.nav li ul li ul {
right:-140px;
top:0;
}

#uj{
    width:960px;
        height:500px;
    padding:50px 10px 0 10px;
    margin:0 auto;
        text-align:center;
}
#uj{
    width:960px;
        height:70px;
    padding:50px 10px 0 10px;
    margin:0 auto;
        text-align:center;
}
#uj h1{
    font:normal 30pt Arial;
    color:#FFFFFF;
    text-shadow: 0 1px 0 black,
               0 2px 0 black,
               0 3px 0 #bbb,
               0 4px 0 #b9b9b9,
               0 5px 0 #aaa,
               0 6px 1px rgba(0,0,0,.1),
               0 0 5px rgba(0,0,0,.1),
               0 1px 3px rgba(0,0,0,.3),
               0 3px 5px rgba(0,0,0,.2),
               0 5px 10px rgba(0,0,0,.25),
               0 10px 10px rgba(0,0,0,.2),
               0 20px 20px rgba(0,0,0,.15);
}
#uj p{
    font:normal 40pt Arial;
    color:#FFFFFF;
    text-shadow: 0 1px 0 #ccc,
               0 2px 0 #c9c9c9,
               0 3px 0 #bbb,
               0 4px 0 #b9b9b9,
               0 5px 0 #aaa,
               0 6px 1px rgba(0,0,0,.1),
               0 0 5px rgba(0,0,0,.1),
               0 1px 3px rgba(0,0,0,.3),
               0 3px 5px rgba(0,0,0,.2),
               0 5px 10px rgba(0,0,0,.25),
               0 10px 10px rgba(0,0,0,.2),
               0 20px 20px rgba(0,0,0,.15);
}


</style>
</head>

<body id="fondo">
    
   





<form action="archivo_destino.php" method="post">
    <form action="lista.php" method="post">
    
    
 

</select>

</form>



</body>
</html>


