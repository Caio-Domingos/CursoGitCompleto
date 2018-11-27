<?php
define("TITLE", "Minha Nota");

?>

<!DOCTYPE html>
<html lang="pt-br" class="ls-theme-orange ls-html-nobg ls-main-full">

<?php include_once("head.php"); ?>


<body>
  <div class="ls-topbar">

 

  <!-- Nome do produto/marca -->
    <h1 class="ls-brand-name"><a class="ls-ico-stats" href="#">Minha Nota</a></h1>
</div>

  <main class="ls-main">
    <div class="container-fluid">

      <div class="ls-box ls-no-bg ls-box-error">
        <h1 class="ls-title-intro ls-ico-bars">Cálculo de Notas</h1>
        <p>Digite suas notas das avaliações parciais 1 e 2, oficiais 1 e 2, referentes ao primeiro e segundo bimestre.</p>

        <p><strong>Você dever:</strong></p>
        <ol>
          <li>Para cada nota, preencher o valor entre 0 e 10.</li>
          <li>Ativar a marcação do ponto extra.</li>
        </ol>
      </div>


      <form action="resultado.php" method="post" class="ls-form ls-form-horizontal row">
        <fieldset>
          <label class="ls-label col-sm-4 col-xs-12">
            <b class="ls-label-text">Parcial 1</b>
            <input type="text" name="parcial1" placeholder="Nota da parcial 1 (0 a 10)" class="ls-field" required>
          </label>
          <label class="ls-label col-sm-4 col-xs-12">
            <b class="ls-label-text">Oficial 1</b>
            <input type="text" name="oficial1" placeholder="Nota da oficial 1 (0 a 10)" class="ls-field" required>
          </label>  <label class="ls-label col-sm-4 col-xs-12">
            <b class="ls-label-text">Parcial 2</b>
            <input type="text" name="parcial2" placeholder="Nota da parcial 2 (0 a 10)" class="ls-field" required>
          </label>
          <label class="ls-label col-sm-4 col-xs-12">
            <b class="ls-label-text">Oficial 2</b>
            <input type="text" name="oficial2" placeholder="Nota da oficial 2 (0 a 10)" class="ls-field" required>
          </label>
        </fieldset>

          <hr>

        <fieldset>
          <!-- Exemplo com Checkbox -->
          <div class="ls-label col-md-12">
            <p>01 (um) ponto extra?</p>
             <label class="ls-label-text">
               <div data-ls-module="switchButton" class="ls-switch-btn ls-float-right">
                    <input type="checkbox" id="teste">
                    <label class="ls-switch-label" for="teste" name="label-teste" ls-switch-off="Sem ponto Extra" ls-switch-on="Com ponto extra"><span></span></label>
                </div>
            </label>
         
        </fieldset>

         
        <div class="ls-actions-btn">
          <button name="consulta" class="ls-btn-danger">Calcular</button>
        </div>
      </form>






    </div>
  </main>


  <script src="javascripts/jquery-2.1.0.min.js" type="text/javascript"></script>
  <script src="javascripts/locastyle.js" type="text/javascript"></script>
  <script src="javascripts/example.js" type="text/javascript"></script>
</body>
</html>
