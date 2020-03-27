<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atividade Cookies</title>
</head>
<body>
<div>
<form method="POST" action="">
<input type="text" name="username" method="POST" placeholder="Usuário">
<input type="submit" value="Enviar">
</form>

<?php 
$user = $_POST['username'];
if(isset($user)){
    setcookie("name",$_POST['username']);
    header("location:cookie.php");
}


?>
</div>
    
</body>
</html>