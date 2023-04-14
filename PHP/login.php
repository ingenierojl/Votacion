<html>
    <body>
        <?php 
            // Comprobamos que nos llega los datos del formulario
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                // Base de datos ficticia que se usará en el ejemplo.
                $baseDeDatos = [
                    'email' => 'desarrollo',
                    'password' => password_hash('lajose2023*', PASSWORD_BCRYPT)
                ];
                
                // Variables del formulario
                $emailFormulario = isset($_REQUEST['email']) ? $_REQUEST['email'] : null;
                $contrasenyaFormulario = isset($_REQUEST['contrasenya']) ? $_REQUEST['contrasenya'] : null;

                // Comprobamos si los datos son correctos
                if ($baseDeDatos['email'] == $emailFormulario && password_verify($contrasenyaFormulario, $baseDeDatos['password'])) {
                    // Si son correctos, creamos la sesión
                    session_start();
                    $_SESSION['email'] = $_REQUEST['email'];
                    // Redireccionamos a la página segura
                    header('Location: privado.php');
                    die();
                } else {
                    // Si no son correctos, informamos al usuario
                    echo '<p style="color: red">contraseña es incorrecta.</p>';
                }
            }
        ?>
        <form method="post">
            <p>
                <input type="text" name="email" placeholder="Email"> 
            </p> 
            <p>
                <input type="password" name="contrasenya" placeholder="Contraseña"> 
            </p>
            <p>
                <input type="submit" value="Entrar"> 
            </p>
        </form>
    </body>
</html>