<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendendo PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Aprendendo PHP</h1>
        <p>Variáveis, condicionais e arrays</p>
    </header>
    
    <main>
        <!-- EXEMPLO: VARIÁVEIS E TIPOS DE DADOS-->
        <div class="card">
            <h2>Variáveis e tipos de dados</h2>

            <?php
            // Variável do tipo stint
            $nome = "João";
            
            // Variável do tipo inteiro
            $idade = 20;
            
            // Variável do tipo float
            $altura = 1.75;

            // Variável do tipo boolen
            $estudante = false;
            ?>

            <p>
                <strong>Nome: </strong>
                <?=$nome ?>
            </p>

            <p>
                <strong>Idade: </strong>
                <?=$idade ?> Anos
            </p>

            <p>
                <strong>Altura: </strong>
                <?=$altura ?> metros
            </p>

            <p>
                <strong>É estudande? </strong>
                <?=$estudante ? "Sim" : "Não, é VAGABUNDO!!!"  ?>
            </p>


        </div>

        <!-- EXEMPLO IF E ELSE -->
        <div class="card">
            <h2>Condicional IF e ELSE</h2>

            <?php
                //Entrada da nota do Aluno
                $nota = 8;

            ?>


            <?= $nota ?>
            <?= ?>

        </div>

    </main>
    
    




</body>
</html>