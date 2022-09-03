<h1 class="nombre-pagina">Login</h1>
<p class="descripcion-pagina">Inciar sesión con tus datos</p>

    <?php 
        include_once __DIR__ . "/../templates/alertas.php";
    ?>

<form action="/" class="formulario" method="POST">
    <div class="campo">
        <label for="email">Email</label>
        <input 
            type="email"
            id="email"
            placeholder="Tu email"
            name="email"
        />
    </div>
    <div class="campo">
        <label for="password">Password</label>
        <input 
            type="password" 
            name="password" 
            placeholder="Tu password"
            id="password"
        />
    </div>
    <input type="submit" class="boton" value="Iniciar Sesión">
</form>

<div class="acciones">
    <a href="/crear-cuenta">¿Aún no tienes una cuenta? Crea una</a>
    <a href="/olvide">¿Olvidaste tu password?</a>
</div>