<?php
include("../source/app/config.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $myusername = $_POST['username'];
    $mypassword = md5($_POST['password']);
    echo $username;
    echo $password;
    
    $sql = "SELECT id_usuario FROM usuario WHERE usuario = '$myusername' and contrasenha = '$mypassword'";
    $result = $pdo->prepare($sql);
    $result->execute();
    $count = $result->fetchColumn();
    if($count >= 1) {
        $_SESSION['login_user'] = $myusername;        
        header("location: index.php");
    }else {
        $error = "Acceso incorrecto. Verifique los datos y vuelva a intentar.";
    }
}
?>
<html>
   
   <head>
      <title>Login Page</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>Usuario:</label><br /><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Contraseña:</label><br /><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = "Iniciar sesión"/><br />
               </form>
               
              <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div> 
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>