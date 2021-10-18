<?php include "cabecalho.php" ?>

<nav class="nav-extended purple lighten-3">
  <div class="nav-wrapper">
    <ul id="nav-mobile" class="right">
      <li><a href="galeria.php">Galeria</a></li>
      <li class="active"><a href="cadastrar.php">Cadastrar</a></li>
    </ul>
  </div>
  <div class="nav-header center">
    <h1>CLOROCINE</h1>
  </div>
</nav>
<div class="row">
  <form action="inserirFilme.php" method="POST">
    <div class="col s6 offset-s3">
      <div class="card ">
        <div class="card-content">
          <span class="card-title">Cadastrar Filme</span>
          <div class="row">
            <div class="input-field col s12">
              <input id="titulo" type="text" class="validate" name="titulo" required>
              <label for="titulo">Titulo do Filme</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s12">
              <textarea id="sinopse"  name="sinopse" class="materialize-textarea"></textarea>
              <label for="sinopse">Sinopse</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s4">
              <input id="nota" name="nota" type="number" step=".1" min=0 max=10 class="validate" required >
              <label for="nota">Nota</label>
            </div>
          </div>

          <div class="file-field input-field">
              <div class="btn purple lighten-2 ">
                <span>Capa</span>
                <input type="file" name="poster_file" accept="image/*">
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text" name="poster">
              </div>
            </div>

          <div class="card-action">
            <a class="btn waves-effect waves-light grey" href="galeria.php">Cancelar</a>
            <button type="submit" class="waves-effect waves-light btn purple">Confirmar</button>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>

</body>

</html>