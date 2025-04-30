<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>GUARDIASHOP</title>

  <link rel="icon" href="./img/core-img/logoguardiashop.ico">
  <link rel="stylesheet" href="css/core-styleff.css">
  <link rel="stylesheet" href="style.css">

  <style>
    @font-face {
      font-family: 'Bernier';
      src: url('fonts/Bernier-Regular.ttf') format('truetype');
    }

    body {
      font-family: 'Bernier', Arial, sans-serif;
      background-color: #ffffff;
      color: #444242;
      margin: 0;
      padding: 0;
    }

    .page-title h2 {
      font-size: 48px;
      color: #000 !important;
      font-weight: bold;
    }

    .breadcumb_area {
      background-image: url('img/bg-img/breadcumb2.jpg');
      background-size: cover;
      background-position: center;
      height: 300px;
      position: relative;
    }

    .breadcumb_area .page-title {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

    .blog-wrapper {
      padding: 60px 0;
    }

    .blog-wrapper .row {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 30px 20px;
    }

    .post-card {
      background: #fff;
      border: 2px solid #B78732; /* línea de color dorado */
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      transition: transform .3s, box-shadow .3s;
      display: flex;
      flex-direction: column;
      height: 400px; /* Tamaño fijo más grande */
    }

    .post-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    }

    .post-card img {
      width: 100%;
      height: 200px; /* Imagen ocupa la mitad */
      object-fit: cover;
    }

    .post-text {
      padding: 20px;
      color: #6c584c;
      font-size: 16px;
      line-height: 1.4;
      text-align: center;
      flex-grow: 1;
      font-weight: bold; /* Texto en negrita */
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
    }
  </style>
</head>

<body>

  <!-- Header -->
  <?php include './arc/nav.php'; ?>

  <!-- Breadcrumb -->
  <div class="breadcumb_area">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12 text-center page-title">
          <h2>SOBRE NOSOTROS</h2>
        </div>
      </div>
    </div>
  </div>

  <!-- Blog Grid -->
  <div class="blog-wrapper">
    <div class="container">
      <div class="row">
        <?php
        $posts = [
          "En un mundo donde todo se repite, elegir moda y exclusividad es una forma de expresar quién eres sin decir una palabra.",
          "No se trata solo de vestir bien, sino de vestir con intención: cada prenda que eliges cuenta tu historia de estilo único e irrepetible.",
          "La verdadera elegancia nace cuando combinas diseño, actitud y ese toque exclusivo que nadie más puede imitar.",
          "Cuando eliges una prenda exclusiva, no solo estás comprando ropa, estás apostando por tu identidad, por lo que te hace diferente.",
          "Nuestro compromiso no es seguir tendencias pasajeras, sino ofrecerte piezas que te hagan sentir especial cada vez que las uses.",
          "No sigas la corriente. Tu estilo merece destacar con prendas que hablen por ti, sin que digas una sola palabra."
        ];
        for ($i = 1; $i <= 6; $i++) {
          echo '
          <div class="col">
            <div class="post-card">
              <img src="img/bg-img/blog'.$i.'.jpg" alt="Blog '.$i.'">
              <div class="post-text">'.$posts[$i-1].'</div>
            </div>
          </div>';
        }
        ?>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <?php include './arc/footer.php'; ?>

  <!-- Scripts -->
  <script src="js/jquery/jquery-2.2.4.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/classy-nav.min.js"></script>
  <script src="js/active.js"></script>

</body>

</html>
