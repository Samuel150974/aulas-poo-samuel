<?php

require_once "src/Conteudo.php";
require_once "src/Serie.php";
require_once "src/Filme.php";

// Importando a classe

// Criando os objetos e passando os dados para o construtor
$filme1 = new Filme('De Volta para o Futuro', 'Ficcão', 1985, 116);
$filme2 = new Filme('Toy Story', 'Animação', 1995, 105);
$filme3 = new Filme('Homem Aranha', 'Ação', 2026, 145);

$serie1 = new Serie('La casa de papel', 'Ação', 2017, 98);

$serie2 = new Serie('The Walking-dead', 'Ficcão', 2014, 55);

// echo "<pre>";
// var_dump($serie1, $serie2);
// echo "</pre>";

$series = [$serie1, $serie2];

// echo "<pre>";
// var_dump($filme1, $filme2, $filme3);
// echo "</pre>";



/* Como a classe Conteudo foi definida como abstrata, a linha abaixo não funcionará pois não é possível criar objetos/instâncias diretamente à partir de classes abstratas*/
// $conteudo = new Conteudo('Senhor dos anéis', 'Fantasia', 2001);
//  var_dump($conteudo);

// Lista com objetos = conteudos
$conteudos = [$filme1, $filme2, $filme3]
?>                                                                                                                                                                                                                                                                                                   
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Coleção de Filmes</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <div class="container">
        <header>
            <p class="destaque">Uma sessão de boas histórias</p>
            <h1>Minha coleção de filmes</h1>
            <p>Três filmes para descobrir, rever e se divertir</p>
        </header>

        <div class="conteudos">

            <?php foreach ($conteudos as $conteudo): ?>
                <article class="card-conteudo">
                    <span class="genero"> <?= $conteudo->getGenero() ?> </span>

                    <h2> <?= $conteudo->getTitulo() ?> </h2>

                    <p class="ano">Lançamento: <?= $conteudo->getAno() ?> </p>

                    <!-- POLIMORFISMO: a mesma chamada (getDescricao) de método, mas usando implementações diferentes -->

                    <p> <?= $conteudo->getDescricao() ?></p>

                    <?php if ($conteudo->ehClassico()): ?>
                        <span class="classico">Clássico</span>
                    <?php endif; ?>

                </article>
            <?php endforeach; ?>

        </div>

        <hr>

        <div class="series">
            <?php foreach ($series as $serie): ?>
                <article class="card-serie">

                    <span class="genero"> <?= $serie->getGenero() ?> </span>
                    <h2><?= $serie->getTitulo() ?> </h2>
                    <p class="ano">Lançamento: <?= $serie->getAno() ?></p>

                    <?php if ($serie->ehClassico()): ?>
                        <span class="classico">Clássico</span>
                    <?php endif; ?>


                </article>

            <?php endforeach; ?>




        </div>

        <div class="assuntos-estudados">
            <h2>Assuntos estudados</h2>
            <ul>
               <li>Classe abstrata: <b>Conteudo</b></li>
               <li>Impossibilidade de instanciar diretamente uma classe abstrata</li>
               <li>Método abstrato: <b>getDescricao()</b></li>
               <li>Obriga a implementação do método abstrato pelas classes filhas Filme e Serie</li>
               <li>Polimorfismo: a mesma chamada a <b>getDescricao()</b> utiliza a implementação de cada classe</li>
            </ul>
        </div>

    </div>
</body>

</html>