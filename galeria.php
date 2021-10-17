<?php include "cabecalho.php" ?>
<?php

$bd=new SQLite3("filmes.db");
$sql="SELECT * FROM filmes";
$filmes=$bd->query($sql);

$filme1 = [
    "titulo" => "Vingadores",
    "nota" => 9.7,
    "sinopse"=>"Após os eventos devastadores de 'Vingadores: Guerra Infinita', o universo está em ruínas devido aos esforços do Titã Louco, Thanos. Com a ajuda de aliados remanescentes, os Vingadores devem se reunir mais uma vez a fim de desfazer as ações de Thanos e restaurar a ordem no universo de uma vez por todas, não importando as consequências.",
    "poster"=>"https://www.themoviedb.org/t/p/w300/q6725aR8Zs4IwGMXzZT8aC8lh41.jpg"
];
$filme2 = [
    "titulo" => "Vingadores:End Game",
    "nota" => 9.1,
    "sinopse"=>"Após os eventos devastadores de 'Vingadores: Guerra Infinita', o universo está em ruínas devido aos esforços do Titã Louco, Thanos. Com a ajuda de aliados remanescentes, os Vingadores devem se reunir mais uma vez a fim de desfazer as ações de Thanos e restaurar a ordem no universo de uma vez por todas, não importando as consequências.",
    "poster"=>"https://www.themoviedb.org/t/p/w300/q6725aR8Zs4IwGMXzZT8aC8lh41.jpg"
];





//$filmes=[$filme1,$filme2];
?>

<body>

    <nav class="nav-extended purple lighten-3">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right">
                <li class="active"><a href="galeria.php">Galeria</a></li>
                <li><a href="cadastrar.php">Cadastrar</a></li>
            </ul>
        </div>
        <div class="nav-header center">
            <h1>CLOROCINE</h1>
        </div>
        <div class="nav-content">
            <ul class="tabs tabs-transparent purple darken-1">
                <li class="tab"><a class="active" href="#test1">Todos</a></li>
                <li class="tab"><a href="#test3">Favoritos</a></li>
            </ul>
        </div>
    </nav>
    <div class="row">
        <?php while($filme=$filmes->fetchArray()): ?>
        <div class="col s3">
            <div class="card hoverable">
                <div class="card-image">
                    <img src=<?= $filme["poster"] ?>>

                    <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">favorite_border</i></a>
                </div>
                <div class="card-content">
                    <p class="valign-wrapper"><i class="material-icons amber-text">star</i><?= $filme["nota"] ?></p>
                    <span class="card-title"><?= $filme["titulo"] ?></span>
                    <p><?= $filme["sinopse"] ?></p>
                </div>
            </div>
        </div>
        <?php endwhile ?> 
    </div>

</body>

</html>