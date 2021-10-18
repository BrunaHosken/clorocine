<?php
$bd = new SQLite3("filmes.db");

$sql = "DROP TABLE IF EXISTS filmes";

if ($bd->exec($sql)) echo "tabela apagada com sucesso";
else echo "erro ao apagar tabela";


$sql = "CREATE TABLE filmes(
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        titulo VARCHAR (200) NOT NULL,
        poster VARCHAR (200),
        sinopse TEXT,
        nota DECIMAL (2,1)
    )";

if ($bd->exec($sql)) echo "tabela filmes criada";
else echo "erro ao criar tabela filmes";

$titulo= 'Vingadores'; 
$sinopse= 'Após os eventos devastadores de "Vingadores: Guerra Infinita", o universo está em ruínas devido aos esforços do Titã Louco, Thanos. Com a ajuda de aliados remanescentes, os Vingadores devem se reunir mais uma vez a fim de desfazer as ações de Thanos e restaurar a ordem no universo de uma vez por todas, não importando as consequências.'; 
$nota= 9.7; 
$poster= 'https://www.themoviedb.org/t/p/w300/q6725aR8Zs4IwGMXzZT8aC8lh41.jpg'; 

$bd = new SQLite3("filmes.db");

$sql = "INSERT INTO filmes(titulo,poster,sinopse,nota) 
VALUES (:titulo,:poster,:sinopse,:nota)";
//echo $nota;
$stmt=$bd->prepare($sql);

$stmt->bindValue(':titulo',$titulo, SQLITE3_TEXT);
$stmt->bindValue(':poster',$poster, SQLITE3_TEXT);
$stmt->bindValue(':sinopse',$sinopse, SQLITE3_TEXT);
$stmt->bindValue(':nota',$nota, SQLITE3_FLOAT);


if ($stmt->execute()) echo "filmes inseridos com sucesso";
else echo "erro ao inserir filmes.".$bd->lastErrorMsg();



?>
