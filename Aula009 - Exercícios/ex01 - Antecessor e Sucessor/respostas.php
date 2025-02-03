<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antecessor e Sucessor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <p>
            <?php 
                $num = $_REQUEST["num"] ?? 0;

                echo "O antecessor de $num é ". ($num - 1) . "\n";
                echo "O sucessor de $num é ". ($num + 1) ."\n";
            ?>
        </p>
        <button onclick="javascript:window.location.href ='index.html'">Voltar</button>
    </main>
    
</body>
</html>