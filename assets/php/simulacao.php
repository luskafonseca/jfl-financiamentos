<!DOCTYPE html>
<html lang="pt-br">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

     <!-- favicon -->
  <link rel="shortcut icon" href="assets/images/favicon.png">

    <title>JFL FINANCIAMENTOS</title>

   

    <!-- Bootstrap core CSS -->
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../../assets/css/fontawesome.css">
    <link rel="stylesheet" href="../../assets/css/templatemo-finance-business.css">
    <link rel="stylesheet" href="../../assets/css/owl.css">

  <!-- Bootstrap core JavaScript -->
    <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../js/backtotop.js"></script>
    <script src="../js/custom.js"></script>
    <script src="../js/owl.js"></script>
    <script src="../js/slick.js"></script>
    <script src="../js/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>




  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <div class="sub-header">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-xs-12">
            <ul class="left-info">
              <li><a href="#"><i class="fa fa-clock-o"></i>Seg-Sex 09:00-17:00</a></li>
              <li><a href="#"><i class="fa fa-phone"></i>55 035 99999-9999</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="right-icons">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-behance"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>JFL FINANCIAMENTOS</h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="../../index.html">Inicio
                  <span class="sr-only">(current)</span>
                </a>
              </li>
          </div>
        </div>
      </nav>
    </header>

      <!-- start bem vindo-->
  <section class="jumbotron jumbotron-fluid p-2 no-margin text-light text-center">
    <div class="my-5 py-5">
      <p class="h1 text-center font-weight-bold text-light py-5 my-1 wow animate__animated animate__fadeInDown"> Rápido, fácil e confiável.</p>
    </div>
  </section>

  <?php

    $opt = 0;
    $parcela = 0;
    $juros = 0;
    $parcela2 = 0;
    $juros2 = 0;
    $parcela3 = 0;
    $juros3 = 0;
    $montante = 0;

    function parcelaCalc($valor, $taxa, $opt){
      $montante = $valor * pow((1 + $taxa), $opt);
      return $parcela = number_format($montante / $opt, 2, ",", ".");
    }
    function jurosCalc($valor, $taxa, $opt){
      $montante = $valor * pow((1 + $taxa), $opt);
      return $juros = number_format($montante - $valor, 2, ",", ".");
    }

    if(isset($_POST['valor'])) {
      $opt = intval($_POST['opt']);
      $valor = $_POST['valor'];

      switch($opt){
        case 12:
          $taxa = 0.0098; 
        break;
        case 24:
          $taxa = 0.0218; 
        break;
        case 36:
          $taxa = 0.0398; 
        break;
        case 48:
          $taxa = 0.055; 
        break;
      }
      $parcela = parcelaCalc($valor, $taxa, $opt);
      $juros = jurosCalc($valor, $taxa, $opt);
    }
    else if(isset($_POST['valor2'])) {
      $opt = intval($_POST['opt2']);
      $valor = $_POST['valor2'];

      switch($opt){
        case 12:
          $taxa = 0.0088; 
        break;
        case 24:
          $taxa = 0.02; 
        break;
        case 36:
          $taxa = 0.0388; 
        break;
        case 48:
          $taxa = 0.052; 
        break;
      }
      $parcela2 = parcelaCalc($valor, $taxa, $opt);
      $juros2 = jurosCalc($valor, $taxa, $opt);
    }
    else if(isset($_POST['valor3'])) {
      $opt = intval($_POST['opt3']);
      $valor = $_POST['valor3'];

      switch($opt){
        case 1:
          $taxa = 0.01; 
        break;
        case 3:
          $taxa = 0.02; 
        break;
      }
      $parcela3 = parcelaCalc($valor, $taxa, $opt);
      $juros3 = jurosCalc($valor, $taxa, $opt);
    }
?>

  <!-- start simulacao -->
  <section class="container my-5 controle-fin2">
    <h2 class="text-uppercase text-center font-weight-bold textocontrole pb-5"><br>Simulação</h2>

    <ul class="nav nav-pills justify-content-center mb-4">
      <li class="nav-item"><a href="#nav-item-01" class="nav-link active m-2" data-toggle="pill">Automoveis</a></li>
      <li class="nav-item"><a href="#nav-item-02" class="nav-link m-2" data-toggle="pill" >Residencias</a></li>
      <li class="nav-item"><a href="#nav-item-03" class="nav-link m-2" data-toggle="pill">Crédito Pessoal</a></li>
    </ul>

    <div class="tab-content">
      <div class="tab-pane active fade show pb-5" id="nav-item-01">
        <div class="row">
          <div class="col-md-6 embed-responsive-16by9">
            <form class="formulario" method="post"> 
        <p class="textosimulacao"> Faça sua simulação aqui.</p>
         <div class="field radiobox">
            <span class="textosimulacao">Juros e Parcelamento:<br></span>
            <input type="radio" name="opt" id="opt" value="12" checked><label for="opt" class="textosimulacao">12x com juros de 0.98% a.a.</label><br>
            <input type="radio" name="opt" id="opt" value="24"><label for="opt" class="textosimulacao">24x com juros de 2.18% a.a</label><br>
            <input type="radio" name="opt" id="opt" value="36"><label for="opt" class="textosimulacao">36x com juros de 3.98% a.a.</label><br>
            <input type="radio" name="opt" id="opt" value="48"><label for="opt" class="textosimulacao">48x com juros de 5.5% a.a</label>
          </div>
        <div class="field textosimulacao" >
            <label for="valor">Valor do Carro:</label>
            <input type="text" id="valor" name="valor" placeholder="Digite o valor:">
        </div>       
     
        <input type="submit" name="acao" class="bg-info" value="Simular">
    </form>
          </div>
          <div class="col-md-6 textotaxas controle-fin text-justify">
            <h5><br><br><br><?php echo "O financiamento será em: ". $opt ."x de R$" . $parcela ."<br>"; echo "O total de juros a ser pago é: R$" . $juros; ?></h5>
          </div>
        </div>
      </div>

      <div class="tab-pane fade pb-5" id="nav-item-02">
        <div class="row">
          <div class="col-md-6 embed-responsive-16by9">
             <form class="formulario textoform" method="post"> 
        <h4 class="textosimulacao"> Faça sua simulação aqui.</h2>
         <div class="field radiobox">
            <span class="textosimulacao">Juros e Parcelamento:<br></span>
            <input type="radio" name="opt2" id="opt" value="12" checked><label for="opt" class="textosimulacao">12x com juros de 0.88% a.a.</label><br>
            <input type="radio" name="opt2" id="opt" value="24"><label for="opt" class="textosimulacao">24x com juros de 2% a.a</label><br>
            <input type="radio" name="opt2" id="opt" value="36"><label for="opt" class="textosimulacao">36x com juros de 3.88% a.a.</label><br>
            <input type="radio" name="opt2" id="opt" value="48"><label for="opt" class="textosimulacao">48x com juros de 5.2% a.a</label>
          </div>
        <div class="field textosimulacao">
            <label for="valor">Valor do Casa:</label>
            <input type="text" id="valor2" name="valor2" placeholder="Digite o valor">
        </div>      

        <input type="submit" name="acao2" class="bg-info" value="Simular">
    </form>
          </div>
          <div class="col-md-6 textotaxas controle-fin text-justify">
            <h5><br><br><br><?php echo "O financiamento será em: ". $opt ."x de R$" . $parcela2 ."<br>"; echo "O total de juros a ser pago é: R$" . $juros2; ?></h5>
          </div>
        </div>
      </div>

      <div class="tab-pane fade pb-5" id="nav-item-03">
        <div class="row">
          <div class="col-md-6 embed-responsive-16by9">
             <form class="formulario textoform" method="post"> 
        <h4 class="textosimulacao"> Faça sua simulação aqui.</h2>
         <div class="field radiobox">
            <span class="textosimulacao">Juros e Parcelamento:<br></span>
            <input type="radio" name="opt3" id="opt" value="1" checked><label for="opt" class="textosimulacao">1x com juros de 1% a.a.</label><br>
            <input type="radio" name="opt3" id="opt" value="3"><label for="opt" class="textosimulacao">3x com juros de 2% a.a</label><br>
          </div>
        <div class="field textosimulacao">
            <label for="valor">Valor do Crédito:</label>
            <input type="text" id="valor3" name="valor3" placeholder="Digite o valor">
        </div>      

        <input type="submit" name="acao3" class="bg-info" value="Simular">
    </form>
          </div>
          <div class="col-md-6 textotaxas controle-fin text-justify">
            <h5><br><br><br><?php echo "O financiamento será em: ". $opt ."x de R$" . $parcela3 ."<br>"; echo "O total de juros a ser pago é: R$" . $juros3; ?></h5>
          </div>
        </div>
      </div>
    </div>
  </section>

    <!-- start rodape -->
  <footer class="mt-5 mb-0 py-5 no-margin rodape">
    <div class="text-center text-dark">
      <p>&copy; JFL Company </p>
    </div>
  </footer>
</div>

  </body>
</html>