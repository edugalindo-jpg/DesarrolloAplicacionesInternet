<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio D</title>
</head>
<body>

<h2>Mayor de tres números</h2>
<form method="GET">
    N1: <input type="number" name="n1"><br>
    N2: <input type="number" name="n2"><br>
    N3: <input type="number" name="n3"><br>
    <input type="submit" value="Calcular">
</form>

<?php
class Mayor {
    public $n1, $n2, $n3;

    public function __construct($n1, $n2, $n3){
        $this->n1 = $n1;
        $this->n2 = $n2;
        $this->n3 = $n3;
    }

    public function obtenerMayor(){
        $mayor = $this->n1;

        if($this->n2 > $mayor){
            $mayor = $this->n2;
        }
        if($this->n3 > $mayor){
            $mayor = $this->n3;
        }

        return "El mayor de los numeros: $this->n1, $this->n2, $this->n3 es $mayor";
    }
}

if(isset($_GET['n1'], $_GET['n2'], $_GET['n3'])){
    $mayor = new Mayor($_GET['n1'], $_GET['n2'], $_GET['n3']);
    echo "<h3>Resultado:</h3>";
    echo $mayor->obtenerMayor();
}
?>

</body>
</html>