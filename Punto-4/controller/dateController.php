<?php
  $result = "";
  $ageToday = 0;
  $userName = "";
  $brith = "";

  if (isset($_POST["birth_date"]) && isset($_POST["user_name"]) && isset($_POST["birth_date"] )) {
    $brith = $_POST ["birth_date"];
    $userName = $_POST["user_name"];
    $birthDate = new DateTime($_POST['birth_date']);
    $today = new DateTime ();
    $newDate = $birthDate->diff($today);
    $ageToday = $newDate->y;
        
    if ($ageToday >= 18){
        $result = "Eres mayor de edad";
    } else {
        $result = "Eres menor de edad";
    } 
  }
?>