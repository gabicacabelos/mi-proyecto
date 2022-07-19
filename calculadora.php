<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculadora</title>
</head>
<body>
    <form action="pagina2.php">
        <input type="number" name="num1" placeholder="Ingrese el primer número">

        <select name="operacion">
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicación</option>
            <option value="division">División</option>
        </select>
        <input type="number" name="num2" placeholder="Ingrese el segundo número">
        <input type="submit" value="Calcular">

    </form>
    
    
</body>
</html>