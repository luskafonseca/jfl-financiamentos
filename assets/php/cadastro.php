<?php

  $con = mysqli_connect('localhost', 'root', '','users');

  $txtNome = $_POST['txtNome'];
  $txtEmail = $_POST['txtEmail'];
  $hash = password_hash($_POST['txtSenha'], PASSWORD_DEFAULT);

  $sql = "INSERT INTO `users` (`Id`, `nome`, `email`, `senha`) VALUES ('0', '$txtNome', '$txtEmail', '$hash')";

  $rs = mysqli_query($con, $sql);

  header('location:../../login.html');

?>