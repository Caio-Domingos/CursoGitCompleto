<?php

define("TITLE", "Minha Nota");
  if(isset($_POST['consulta']))
  {

   $parcial1 = trim($_POST["parcial1"]);
   $parcial2 = trim($_POST["parcial2"]);
   $oficial1 = trim($_POST["oficial1"]);
   $oficial2 = trim($_POST["oficial2"]);

   $notabimestre1 = (($parcial1*0.3)+($oficial1*0.7));
   $notabimestre2 = (($parcial2*0.3)+($oficial2*0.7));
   $notafinal = ($notabimestre1*0.4)+($notabimestre2*0.6);




  }


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
        <h1 class="ls-title-intro ls-ico-bars">Resultado</h1>
        <p><strong>Suas notas:</strong></p>
        <ol>
          <li>Parcial 1: <b><?php echo "$parcial1";?></b> pontos;</li>
          <li>Oficial 1: <b><?php echo "$oficial1";?></b> pontos;</li>

          <li>Oficial 2: <b><?php echo "$oficial2";?></b> pontos;</li>
          <li>Parcial 2: <b><?php echo "$parcial2";?></b> pontos;</li>
        </ol>

        <p><strong>Nota do Primeiro Bimestre:</strong> <b><?php echo "$notabimestre1";?></b> pontos.</p>
        <p><strong>Nota do Segundo Bimestre:</strong> <b><?php echo "$notabimestre1";?></b> pontos.</p>
        <hr>

      <h4 class="ls-ico-dashboard">Nota final:  <b><?php echo "$notafinal";?></b> pontos. </h4>

      <?php

      if($notafinal >=6) 
      {
       echo "<hr> <div class='ls-alert-success'><strong>Sucesso!</strong> Você foi aprovado, parabéns!</div>";
      }

      if($notafinal >=4 and $notafinal <6) 
      {
       echo "<hr> <div class='ls-alert-warning'><strong>Atenção!</strong> Você está em exame especial!</div>";
      }

      if($notafinal <4) 
      {
       echo "<hr> <div class='ls-alert-danger'><strong>Atenção!</strong> Você está em exame especial!</div>";
      }



      ?>



      </div>


<a href="index.php" class="ls-btn">Nova Consulta</a>






    </div>
  </main>


  <script src="javascripts/jquery-2.1.0.min.js" type="text/javascript"></script>
  <script src="javascripts/locastyle.js" type="text/javascript"></script>
  <script src="javascripts/example.js" type="text/javascript"></script>
</body>
</html>

