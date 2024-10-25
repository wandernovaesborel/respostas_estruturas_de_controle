<!DOCTYPE html>
<html lang="pt-BR">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Array Associativo</title>
</head>
<body>
 <h2>Lista de Pessoas:</h2>
 <?php

            // Array associativo com os registros simulados
        $pessoas = array(
            array("Nome" => "Ana", "Idade" => 25),
            array("Nome" => "Carlos", "Idade" => 30),
            array("Nome" => "Pedro", "Idade" => 40),
        );

        foreach ($pessoas as $pessoa) {
            echo "Nome: " . $pessoa['Nome'] . ", Idade: " . $pessoa['Idade'] . "<br>";
        }
?>

</body>
</html>