<?php
  session_start();

  $con = mysqli_connect('localhost', 'root', '','users');

  $email = mysqli_real_escape_string($con, $_POST['txtEmail']);
  $senha = mysqli_real_escape_string($con, $_POST['txtSenha']); 
      
  if (!empty($email) || !empty($password)) {
    $query  = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($con, $query);
    
    if(mysqli_num_rows($result) == 1){
      while ($row = mysqli_fetch_assoc($result)) {
        if (password_verify($senha, $row['senha'])) {
          header("Location:simulacao.php");
        } else {
          header("Location:../../login.html");
          echo "Senha Incorreta";
        }    
      }
    } else {
      header("Location:../../login.html");
      echo "Email não cadastrado";
    } 
  }
?>