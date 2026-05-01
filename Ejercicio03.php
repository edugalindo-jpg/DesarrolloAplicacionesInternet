<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio C</title>
</head>
<body>

<h2>Comparación</h2>
<form method="GET">
    A: <input type="number" name="a"><br>
    B: <input type="number" name="b"><br>
    <input type="submit" value="Resolver">
</form>

<?php
class Calculo {
    public $a, $b;

    public function __construct($a, $b){
        $this->a = $a;
        $this->b = $b;
    }

    public function resolver(){
        $resultado = "";

        if($this->a > $this->b){
            $resultado .= "El número mayor es: " . $this->a . "<br>";
        } else if($this->b > $this->a){
            $resultado .= "El número mayor es: " . $this->b . "<br>";
        } else {
            $resultado .= "Ambos números son iguales<br>";
        }

        if($this->a > $this->b){
            $resultado .= "Suma: " . ($this->a + $this->b) .
                          "<br>Diferencia: " . ($this->a - $this->b);
        } else {
            $resultado .= "Producto: " . ($this->a * $this->b) .
                          "<br>División: " . ($this->a / $this->b);
        }

        return $resultado;
    }
}

if(isset($_GET['a'], $_GET['b'])){
    $calc = new Calculo($_GET['a'], $_GET['b']);
    echo "<h3>Resultado:</h3>";
    echo $calc->resolver();
}
?>

</body>
</html>