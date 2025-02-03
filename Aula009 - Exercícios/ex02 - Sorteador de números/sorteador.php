<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1></h1>
        <p>
            <?php 
                $min = 0;
                $max = 0;

                $num = rand($min,$max);

                echo "Gerando um número aletório entre $min e $max... \n";

                echo "O número gerado foi $num";
            ?>
        </p>
    </main>
</body>
</html>