<form action="./view/pages/info-user.php" method="get">
    <h2>Datos usuario</h2>
    <div>
        <div>
            <label for="first-name">
                Nombres
            </label>
            <input 
              type="text" 
              id="first-name" 
              name="first_name" 
              placeholder="John"
            >
        </div>
        <div>
            <label for="last-name">
                Apellidos
            </label>
            <input 
              type="text" 
              id="last-name" 
              name="last_name" 
              placeholder="Doe"
            >
        </div>
        <div>
            <label for="id-user">
                Cedula
            </label>
            <input 
              type="text" 
              id="id-user" 
              name="id_user" 
              placeholder="1.000.000.000"
            >
        </div>
    </div>
    <button>Ingresar</button>
</form>