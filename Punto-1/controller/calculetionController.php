<?php
  $result = 0;
  $operationText = "";
  $firstNumber = 0;
  $secondNumber = 0;
  $failet = "";

  

  if (isset($_POST["first_number"]) 
  && isset($_POST["second_number"]) 
  && isset($_POST["operation_type"])) {

    $firstNumber = floatval($_POST ["first_number"]);
    $secondNumber = floatval($_POST ["second_number"]);
    $operationType = $_POST ["operation_type"];  
  
    switch ($operationType) {
      case "Sumar":
        $result = $firstNumber + $secondNumber;
        $operationText = "+";
        break;
      case "Restar":
        $result = $firstNumber - $secondNumber;
        $operationText = "-";
        break;
      case "Multiplicar":
        $result = $firstNumber * $secondNumber;
        $operationText = "x";
        break;
      case "Dividir":
          $result = $firstNumber / $secondNumber;
          $operationText = "÷";
        break;
      default:
        $result = "Opcion invalida";
        break;
    }
  }
?>