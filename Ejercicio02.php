<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio B</title>
</head>
<body>

<h2>Suma y Producto</h2>
<form method="GET">
    N1: <input type="number" name="n1"><br>
    N2: <input type="number" name="n2"><br>
    N3: <input type="number" name="n3"><br>
    N4: <input type="number" name="n4"><br>
    <input type="submit" value="Calcular">
</form>

<?php
class Operaciones {
    public $n1, $n2, $n3, $n4;

    public function __construct($n1, $n2, $n3, $n4){
        $this->n1 = $n1;
        $this->n2 = $n2;
        $this->n3 = $n3;
        $this->n4 = $n4;
    }

    public function calcular(){
        return "La suma de los numeros:   $this->n1 , $this->n2 , $this->n3 , $this->n4  es   " . ($this->n1 + $this->n2 + $this->n3 + $this->n4) .
               "<br>El producto de los numeros:  $this->n1 , $this->n2 , $this->n3 , $this->n4  es   " . ($this->n1 * $this->n2 *$this->n3 * $this->n4);
    }
}

if(isset($_GET['n1'], $_GET['n2'], $_GET['n3'], $_GET['n4'])){
    $op = new Operaciones($_GET['n1'], $_GET['n2'], $_GET['n3'], $_GET['n4']);
    echo "<h3>Resultado:</h3>";
    echo $op->calcular();
}
?>

</body>
</html>