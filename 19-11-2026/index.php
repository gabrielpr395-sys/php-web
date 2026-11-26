<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendendo PHP</title>
    <!--  Link do CSS-->
      <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Aprendendo PHP</h1>
        <p>Primeiros passos com programação PHP</p>
    </header>

    <main>

        <div class="card">
            <h2>Primeiro contato com PHP</h2>

            <?php
                echo "Olá Turma!";
            ?>
        </div>

        <div class="card">
            <h2>Variáveis</h2>

            <?php
                // Variável do tipo (string) texto
                $nome = "Kauã";

                // Variável do tipo integer (número inteiro)
                $idade = 18;

                // Variável do tipo float (número decimal)
                $altura = 1.72;
            ?>

            <p>Nome:<strong><?= $nome?></p></strong>
            <p>Idade:<strong><?= $idade?></p></strong>
            <p>Altura:<strong><?= $altura?></p></strong>

        </div>

        <div class="card">
            <h2>Operções matemáticas</h2>

            <?php
                $numero1 = 10;
                $numero2 = 5;

                $soma = $numero1 + $numero2;
                $subtracao = $numero1 - $numero2;
                $multiplicacao = $numero1 * $numero2;
                $divisao = $numero1 / $numero2;

            ?>

            <p>Soma: <strong><?= $soma?></strong></p>
            <p>Soma: <strong><?= $subtracao?></strong></p>
            <p>Soma: <strong><?= $multiplicacao?></strong></p>
            <p>Soma: <strong><?= $divisao?></strong></p>

        </div>

        <div class="card">
            <h2>Condicionais</h2>

            <?php
                $notaAluno = 0.1;
                if ($notaAluno >= 7) {
                    $resultado = "Aprovado";
                } else {
                    $resultado = "Reprovado";
                }

            ?>

            <p>Nota do Aluno: <strong><?= $notaAluno?></strong></p>
            <p>Resultado: <strong><?= $resultado?></strong></p>            

        </div>


    </main>

</body>
</html>