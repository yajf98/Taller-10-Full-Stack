<?php include "./controller/calculetionController.php" ?>

<form method="post">
    <h2>Calculadora</h2>
    <div>
        <div>
            <label for="first-number">Primer número</label>
            <input type="text" 
              id="first-number" 
              name="first_number" 
              placeholder="5"
            >
        </div>
        <div>
            <label for="second-number">Segundo número</label>
            <input type="text" 
              id="second-number" 
              name="second_number" 
              placeholder="10"
            >
        </div>
        <div>
            <label for="operation-type">Tipo de operación</label>
            <select 
              name="operation_type" 
              id="operation-type"
            >
              <option value="Sumar">Sumar</option>
              <option value="Restar">Restar</option>
              <option value="Multiplicar">Multiplicar</option>
              <option value="Dividir">Dividir</option>
            </select>
        </div>
    </div>
    <button>Calcular</button>
</form>