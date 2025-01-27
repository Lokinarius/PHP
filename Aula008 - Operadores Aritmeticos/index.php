<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritmeticos</title>
</head>
<body>
    <head>
        <h1>Operadores Aritmeticos</h1>
    </head>
    <main>
        <?php 
            $r1 = 2 + 2;
            var_dump($r1);
            $r2 = "2" + "2"; // concatena characteres
            var_dump($r2);
            $r3 = "William"."Galvão"; // Concatena Strings
            var_dump($r3);

            //Adição
            $r4 = 5 + 2;
            var_dump($r4);
            
            //Subtração
            $r5 = 5 - 2;
            var_dump($r5);
            
            //Multiplicação
            $r6 = 5 * 2;
            var_dump($r6);
            
            //Divisão
            $r7 = 5 / 2;
            var_dump($r7);
            
            //Resto da divisão
            $r8 = 5 % 2;
            var_dump($r8);

            //Potencia
            $r9 = 5 ** 2;
            var_dump($r9);

            // Conversor de bases
            $r10 =  base_convert(64,10,2); // binario
            var_dump($r10);
            $r11 = base_convert(254,10,8); // octal
            var_dump($r11);
            $r12 = base_convert(2058,10,16); // hexadecimal
            var_dump($r12);
            
            //
        ?>
    </main>
</body>
</html>