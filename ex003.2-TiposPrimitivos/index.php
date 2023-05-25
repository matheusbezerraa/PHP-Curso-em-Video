<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>

    <?php 

        $num = 0x1A;
        echo "O valor da variavel é $num";
        print"<br>";

        $v=(integer)30.5; //coerção
        var_dump($v);
        
        const valor = 10.5;
        var_dump(valor);

        $vet = [6,4,"Matheus",6,7,8.8];
        var_dump($vet)

    ?>
</body>
</html>