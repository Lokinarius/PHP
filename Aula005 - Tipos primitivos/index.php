<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos</title>
</head>
<body>
    <h1>Tipos primitivos</h1>
    <?php 

        // 0x = hexadecimal
        // 0b = binario
        // 0 = octal

        $num1 = 300;
        $num2 = 0x1A;
        $num3 = -18;

        echo "Os valores $num1, $num2, e $num3 são exemplos de numeros inteiros <br>";

        $v = 45.2;
        var_dump($v);

        echo "O comanado var_dump é util para destacar o valor e o tipo primitivo da variável <br>";
        
        $num4 = (float) 5;
        // coerção

        echo "Variaveis boleanas o 'true' tem o valor de '1', e o 'false' tem o valor vazio <br> ";


        // ARRAYS
        $vet =[6,2,4,5,5,6];
        var_dump($vet);

        //OBJECT
        class Pessoa{
            private string $nome;
        }

        $P = new Pessoa;
        var_dump($p);





    ?>
    
</body>
</html>