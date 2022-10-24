<?php
include './AbastractExibe.php';
class Derived extends base {
    function __construct() {
    }
    
    function printarSucesso() 
    {
      $url = '../View/Home.php';

      $msg = "  
        swal({
        title: 'Good job!',
        text: 'You clicked the button!',
        icon: 'success',
        button: 'Aww yiss!',
      });";

      header( "refresh:3;url={$url}" );
       echo $msg;

       header('location: ../View/Home.php');
  }

  function printarErro() 
  {
      echo "<SCRIPT> //not showing me this
      alert('Cadastro não realizado, tente novamente ');
      window.location.replace('../../app/View/LoginCadastro.php');
    </SCRIPT>";
  } 
}
  ?>


