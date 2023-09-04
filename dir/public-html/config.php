<?php
  if(isset($_POST['cadastrar'])){
    $nome=$_POST['nome'];
  }
  $host="db";
  $banco="app_development";
  $user="root";
  $senha_user="password";

  $con=mysqli_connect($host, $user, $senha_user, $banco);

  if(!$con){
    die("Conexao falhou" . mysqli_connect_error() );
  }
  $sql = "INSERT INTO Cliente(nome) VALUES('$nome')";

  $rs = mysqli_query($con, $sql);
  if($rs){
    echo "voce foi cadastrado";
  }
  ?>