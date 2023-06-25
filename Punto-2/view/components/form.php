<?php include "./controller/ageController.php" ?>

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
            <label for="age-number">Ingrese su edad</label>
            <input type="text" 
              id="age-number" 
              name="age_number" 
              placeholder="24"
            >
        </div>
    </div>
    <button>verificar</button>
</form>