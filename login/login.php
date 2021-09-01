<?php
session_reset();

require_once '../database.php';

if (!empty($_POST['email']) && !empty($_POST['password'])){
$consulta = $conn->prepare('SELECT id, email, passwor FROM users  WHERE email = :email');
$consukta->bindParam(':email',$_POST['email']);
$consulta->execute();
$resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
 
$message = '';

if(count($resultado) > 0 && password_verify($_POST['password'], $resultado['passwor'])){
    $_SESSION['user_id'] = $resultado['id'];
    header('Location: /index.html');
}else{
    $message = 'usuario incorrecto';
}

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LOGIN</title>
<link rel = "preconnect" href = "https://fonts.gstatic.com" crossorigin>
<link rel = "preconnect" href = "https://fonts.googleapis.com">
<link rel = "preconnect" href = "https://fonts.gstatic.com" crossorigin>

<link rel="shortcut icon" href="../images/minilogo.png" type="image/x-icon">
<link rel="apple-touch-icon" href="../images/minilogo.png">

<link rel="stylesheet" href="../css/estilologin.css">
</head>
<body>




<h1>LOGIN</h1>

   <form action="login.php" method="post">
      <input type="email" id="email" name="email" placeholder="usuario">
      <input type="password" id="password" name="password" placeholder="password">
      <input type="submit" name="submit" href="Menu_Usuario/index.html" value="Entrar">
    </form>
    <a href="signup.php">REGISTRARSE</a>

    <?php if(!empty($message)) : ?>

        <h1><?= $message ?> </h1>
     <?php endif;?>   

</body>
</html>




