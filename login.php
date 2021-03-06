<!DOCTYPE html>
<html>
<head>
  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login - StarBank</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
  <!-- Bulma Version 0.6.0 -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.0/css/bulma.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.0/css/bulma.min.css" integrity="sha256-HEtF7HLJZSC3Le1HcsWbz1hDYFPZCqDhZa9QsCgVUdw=" crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="css/login.css">

</head>
<body>
  <section class="hero is-success is-fullheight">
    <div class="hero-body">
      <div class="container has-text-centered">
        <div class="column is-4 is-offset-4">
          <h3 class="title has-text-grey">
              <i class="fa fa-star" aria-hidden="true"></i>
              StarBank
          </h3>
          <p class="subtitle has-text-grey">Banca en L&iacute;nea.</p>
          <div class="box">
            <figure class="avatar is-128x128">
              <img src="img/LOGO2.png">
            </figure>
            <form name="login" action="metodos/login.php" method="post">
              <div class="field">
                <div class="control">
                  <input class="input is-large" name="rut" type="text" placeholder="Rut usuario" autofocus="">
                </div>
              </div>

              <div class="field">
                <div class="control">
                  <input class="input is-large" name="pass" type="password" placeholder="Clave">
                </div>
              </div>

              <input type="submit" class="button is-block is-info is-large" Value="ROLEJO"  >
            </form>
          </div>
          <p class="has-text-grey">
            <a href="../">¿Problemas con su Clave?</a> &nbsp;·&nbsp;
              <a href="../">Contacto</a> &nbsp;·&nbsp;
            <a href="../">Recomendaciones de Seguridad</a>

          </p>
        </div>
      </div>
    </div>
  </section>
  <script async type="text/javascript" src="../js/bulma.js"></script>
</body>
</html>