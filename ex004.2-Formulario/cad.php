<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Envio com sucesso!</h1>
    </header>
    <main>

        <?php 
        $n = $_REQUEST["nome"] ?? "sem nome";  //junção de $_GET $_POST $_COOKIES
        $s = $_GET["sobrenome"]?? "desconhecido";
        echo"<p>Prazer te conhecer $n $s </p> ";
        ?>

        <p><a href="javascript:history.go(-1)">Voltar.</a></p>
        
    </main>
    
</body>
</html>