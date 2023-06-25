<?php 
  $name = "";
  $age = 0;
  $result = "";  
  if (isset($_POST["age_number"]) && isset($_POST["user_name"])) {
    $age = intval($_POST["age_number"]);
    $name = $_POST ["user_name"];

    if  ($age >= 18){
      $result = "Eres mayor de edad";
    } else {
      $result = "Eres menor de edad";
    }
  }
?>