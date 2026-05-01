<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio A</title>
</head>
<body>

<h2>Usuario</h2>
<form method="GET">
    Nombre: <input type="text" name="nombre"><br>
    Email: <input type="email" name="mail"><br>
    <input type="submit" value="Enviar">
</form>

<?php
class Usuario {
    public $nombre, $mail;

    public function __construct($nombre, $mail){
        $this->nombre = $nombre;
        $this->mail = $mail;
    }

    public function mostrar(){
        return "Nombre: $this->nombre <br>Email: $this->mail";
    }
}

if(isset($_GET['nombre']) && isset($_GET['mail'])){
    $user = new Usuario($_GET['nombre'], $_GET['mail']);
    echo "<h3>Resultado:</h3>";
    echo $user->mostrar();
}
?>

</body>
</html>