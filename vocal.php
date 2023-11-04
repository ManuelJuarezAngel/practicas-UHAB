<?php 
if(isset($_POST['btn-validar'])){
  $mensaje = $_POST['mensaje'];
  if($mensaje == 'a'){
     echo "La letra :".$mensaje." Es una vocal "; 
   }
   else if($mensaje == 'e'){
    echo "La letra :".$mensaje." Es una vocal "; 
   }
   else if($mensaje == 'i'){
    echo "La letra :".$mensaje." Es una vocal "; 
   }
   else if($mensaje == 'o'){
    echo "La letra :".$mensaje." Es una vocal "; 
   }
   else if($mensaje == 'u'){
    echo "La letra :".$mensaje." Es una vocal "; 
   }
   else{
    echo "es una consonante";
   }
}


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="text" name="mensaje" placeholder="Digita la letra a evaluar">
        <input type="submit" value="Verificar" name="btn-validar">
    </form>
</body>
</html>