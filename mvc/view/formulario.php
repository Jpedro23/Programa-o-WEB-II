<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Formulario</title>
</head>
<body>
    <H1>Formulario</H1>
    
    <form method="get"  action="../controller/controller.php">

            <label for="">N1</label>
            <br>
            <input type="text" name="n1">
            <br>
            <label for="">N2</label>
            <br>
            <input type="text" name="n2">
            <br>
            <label type="text">Resultado</label>
            <br>
            

            <h5>Operações</h5>
            <select name="funcao">
                <option value="soma">Soma</option>
                <option value="subtrair">Subtrair</option>
                <option value="multiplicar">Multiplicar</option>
            </select>


            <input type="submit" value="Calcular">

            <br>
            <br>
        </form>
</body>
</html>
