<?php
  if(isset($_POST['cadastrar'])){
    $nome=$_POST['nome'];
  }
  $host="localhost";
  $banco="app_development";
  $user="root";
  $senha_user="password";
  $con=mysqli_connect($host,$banco,$user,$senha_user);