<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>
<body>
    <h1>Strings</h1>
    <?php 
    $nome = "William";
    //DOUBLE QUOTED
    echo "Olá $nome!"; //Olá William!

    //SINGLE QUOTED
    echo 'Olá $nome!'; //Olá $nome!
    // Nas strings single quoted não há interpretação de conteúdo

    const CIDADE = "SOBRAL";
    echo "Odeio CIDADE"; //Odeio CIDADE
    echo 'Odeio CIDADE'; //Odeio CIDADE
    echo "Odeio ".CIDADE; //Odeio SOBRAL
    //No caso de constantes deve se usar a concatenação

    // Sequencias de escapes
    $nom = "Rodrigo";
    $snom = "Nogueira";
    echo "$nom \"Minotauro\" $snom";
    // \n Nova linha
    // \t Tabulação horizontal
    // \\ Barra invertida
    // \$ Sinal de cifrão
    // \u{} Codepoint Unicode


    ?>
    
    

</body>
</html>