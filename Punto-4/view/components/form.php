<?php include "./controller/dateController.php" ?>

<form method="post">
    <h2>Verificador de edad</h2>
    <div>
        <div>
            <label for="user-name">Ingrese su nombre</label>
            <input type="text" 
              id="user-name" 
              name="user_name" 
              placeholder="John Doe"
            >
        </div>
        <div>
            <label for="birth-date">Ingrese el año que nacio</label>
            <input type="date" 
              id="birth-date" 
              name="birth_date" 
              placeholder="24"
            >
        </div>
    </div>
    <button>verificar</button>
</form>