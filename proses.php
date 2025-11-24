<?php
if (isset($_POST['submit'])) {
    $value1 = $_POST['value1'];
    $operator = $_POST['operator'];
    $value2 = $_POST['value2'];
    $result = "";

    switch ($operator) {
        case 'tambah':
            $result = $value1 + $value2;
            break;
        case 'kurang':
            $result = $value1 - $value2;
            break;
        case 'kali':
            $result = $value1 * $value2;
            break;
        case 'bagi':
            if ($value2 != 0) {
                $result = $value1 / $value2;
            } else {
                $result = "Error: Pembagian dengan 0 tidak diperbolehkan!";
            }
            break;

        case 'sin':
            $result = sin(deg2rad($value1));
            break;
        case 'cos':
            $result = cos(deg2rad($value1));
            break;
        case 'tan':
            $result = tan(deg2rad($value1));
            break;

        default:
            $result = "Operator tidak valid!";
    }
} else {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Hasil:</h2>
        <h3><?php 
            echo $value1 . " " . 
            ($operator == 'tambah' ? '+' : 
             ($operator == 'kurang' ? '-' : 
              ($operator == 'kali' ? '*' : 
               ($operator == 'bagi' ? '/' : 
                ($operator == 'sin' ? 'sin' : 
                 ($operator == 'cos' ? 'cos' : 
                  ($operator == 'tan' ? 'tan' : ''))))))) . 
            " " . $value2 . " = " . $result; 
        ?></h3>

        <a href="index.html">Kembali</a>
    </div>
</body>
</html>
