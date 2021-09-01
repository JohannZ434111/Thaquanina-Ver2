<?php 

require_once '../database.php';

 $message = '' ;

 

 if (!empty($_POST['usu']) && !empty($_POST['pass'])) {
  $consulta = "INSERT INTO users (email, passwor) VALUES (:usu, :pass)";
  $resultado = $conn->prepare($consulta);

        
  $resultado->bindParam(':usu',$_POST['usu']);
  $password = password_hash($_POST['pass'], PASSWORD_BCRYPT);
  $resultado->bindParam(':pass',$password);
  

  if ($resultado->execute()) {
    $message = 'Successfully created new user' ;
  } else {
    $message = 'Sorry must have been an issue creating your accout' ;
  }
  
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel = "preconnect" href = "https://fonts.gstatic.com" crossorigin>
<link rel = "preconnect" href = "https://fonts.googleapis.com">
<link rel = "preconnect" href = "https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="../css/estilologin.css">
</head>
<body>
   
       

    <h1>SignUp</h1>
    
    <form action="signup.php" method="post">
      <input type="email" id="usu" name="usu" placeholder="Enter your email">
      <input type="password" id="pass" name="pass" placeholder="Enter your password">
      <input type="password" name="confirm_password" placeholder="Confirm your password">
      <input type="submit" name="submit" value="Enviar">
    </form>
</body>
</html>