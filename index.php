<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="./public/css/home.css">
  <link rel="apple-touch-icon" href="./public/icon/favicon.ico">
  <link rel="apple-touch-startup-image" href="./public/icon/favicon.ico">
  <link rel="icon" href="./public/icon/favicon.ico">

  <title>Mario Bros | Fernando Perez</title>
</head>

<body>


  <!-- Menu de Navegacion - Header -->
  <?php
  require_once "./comons/nav.php";
  require_once "./comons/header.php";
  ?>

  <!-- About -->
  <div class="container">
    <div class="content">
      <section class="about">
        <header>
          <h2>About</h2>
        </header>
        <p>Mario is a blockchain game running on Binance Smart Chain. Collect Ultra-rare digital monsters, play with them, experience an adventure, trade and earn.</p>
        <div class="btn">
          <a href=""><strong>LAUNCH APP</strong></a>
        </div>
      </section>
    </div>
  </div>

  <!-- Feature -->
  <div class="container">
    <div class="content">
      <header class="feature_title">
        <h2>Features</h2>
      </header>
      <div class="feature">


        <div class="feature_box">
          <section>
            <picture class="picture-defer">
              <!-- <source type='image/webp' srcset="/public/img/mario_bros_home.png" media="(max-width: 700px)"> -->
              <source class="image source" type='image/webp' srcset="./public/img/default.png" data-img="/public/img/mario_bros_home_hongo_rojo.webp">
              <img class="image" src="./public/img/default.png" data-img="/public/img/mario_bros_home_hongo_rojo.webp" alt="Mario Bros" title="Mario Bros" width="100" height="100">
            </picture>

            <header>
              <h2>True Ownership</h2>
            </header>

            <div>
              <p>Every item or character you own in the game is 100% yours and stored on the blockchain</p>
            </div>
          </section>
        </div>


        <div class="feature_box --show">
          <section>
            <picture class="picture-defer">
              <!-- <source type='image/webp' srcset="/public/img/mario_bros_home.png" media="(max-width: 700px)"> -->
              <source class="image source" type='image/webp' srcset="./public/img/default.png" data-img="/public/img/mario_bros_home_moneda.webp">
              <img class="image" src="./public/img/default.png" data-img="/public/img/mario_bros_home_moneda.webp" alt="Mario Bros" title="Mario Bros" width="100" height="100">
            </picture>

            <header>
              <h2>Marketplace</h2>
            </header>

            <div class="btn">
              <p>you will be able to trade on any marketplaces that support NFT's.</p><br>
              <a href=""><strong>LEARN MORE</strong></a>
            </div>
          </section>
        </div>


        <div class="feature_box">
          <section>
            <picture class="picture-defer">
              <!-- <source type='image/webp' srcset="/public/img/mario_bros_home.png" media="(max-width: 700px)"> -->
              <source class="image source" type='image/webp' srcset="./public/img/default.png" data-img="/public/img/mario_bros_home_estrella.webp">
              <img class="image" src="./public/img/default.png" data-img="/public/img/mario_bros_home_estrella.webp" alt="Mario Bros" title="Mario Bros" width="100" height="100">
            </picture>

            <header>
              <h2>Learderboard</h2>
            </header>

            <div>
              <p>Grow your beasties and move up in the player rankings.</p>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>



  <!-- Targetas -->
  <div class="container">
    <div class="content">
      <section class="tarjetas_title">
        <header>
          <h2>Super Mario</h2>
        </header>
      </section>

      <div class="tarjetas">


        <div class="tarjetas_box">
          <div class="tarjeta_box_img">
            <picture class="picture-defer">
              <source class="image source" type='image/webp' srcset="./public/img/default.png" data-img="/public/img/mario_bros_home_bola_fuego_clasico.webp">
              <img class="image" src="./public/img/default.png" data-img="/public/img/mario_bros_home_bola_fuego_clasico.webp" alt="Mario Bros" title="Mario Bros Classic" width="100" height="100">
            </picture>
          </div>

          <div class="tarjeta_box_content">
            <div class="tarjeta_box_content_top">
              <div class="tarjeta_box_content_top_let">
                <p class="p1">#111</p>
                <p class="p2">Mario Bros</p>
              </div>
              <div class="tarjeta_box_content_top_right">
                <p class="p1">Supply</p>
                <p class="p2">10</p>
              </div>
            </div>
            <div class="tarjeta_box_content_bottom">
              <div class="tarjeta_box_content_bottom_let">
              It is one of the main skills in games. This ability grants Mario the ability to use pyrokinesis by launching Fireballs from his hand, You can defeat various enemies.
              </div>
              <div class="tarjeta_box_content_bottom_right">
                <div class="tarjeta_box_icon">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z" />
                  </svg>
                </div>
              </div>
            </div>

          </div>
        </div>

        
        <div class="tarjetas_box">
          <div class="tarjeta_box_img">
            <picture class="picture-defer">
              <!-- <source type='image/webp' srcset="/public/img/mario_bros_home.png" media="(max-width: 700px)"> -->
              <source class="image source" type='image/webp' srcset="./public/img/default.png" data-img="/public/img/mario_bros_home_bola_fuego_blanco.webp">
              <img class="image" src="./public/img/default.png" data-img="/public/img/mario_bros_home_bola_fuego_blanco.webp" alt="Mario Bros" title="Mario Bros Fire" width="100" height="100">
            </picture>
          </div>

          <div class="tarjeta_box_content">
            <div class="tarjeta_box_content_top">
              <div class="tarjeta_box_content_top_let">
                <p class="p1">#151</p>
                <p class="p2">Mario Bros Fire</p>
              </div>
              <div class="tarjeta_box_content_top_right">
                <p class="p1">Supply</p>
                <p class="p2">120</p>
              </div>
            </div>
            <div class="tarjeta_box_content_bottom">
              <div class="tarjeta_box_content_bottom_let">
              It is one of the main skills in games. This ability grants Mario the ability to use pyrokinesis by launching Fireballs from his hand, You can defeat various enemies.
              </div>
              <div class="tarjeta_box_content_bottom_right">
                <div class="tarjeta_box_icon">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z" />
                  </svg>
                </div>
              </div>
            </div>

          </div>
        </div>


      </div>




      <div class="tarjetas">


        <div class="tarjetas_box">
          <div class="tarjeta_box_img">
            <picture class="picture-defer">
              <!-- <source type='image/webp' srcset="/public/img/mario_bros_home.png" media="(max-width: 700px)"> -->
              <source class="image source" type='image/webp' srcset="./public/img/default.png" data-img="/public/img/mario_bros_home_mapache.webp">
              <img class="image" src="./public/img/default.png" data-img="/public/img/mario_bros_home_mapache.webp" alt="Mario Bros" title="Mario Bros" width="100" height="100">
            </picture>
          </div>

          <div class="tarjeta_box_content">
            <div class="tarjeta_box_content_top">
              <div class="tarjeta_box_content_top_let">
                <p class="p1">#111</p>
                <p class="p2">Mario Bros</p>
              </div>
              <div class="tarjeta_box_content_top_right">
                <p class="p1">Supply</p>
                <p class="p2">10</p>
              </div>
            </div>
            <div class="tarjeta_box_content_bottom">
              <div class="tarjeta_box_content_bottom_let">
              It is one of the main skills in games. This ability grants Mario the ability to use pyrokinesis by launching Fireballs from his hand, You can defeat various enemies.
              </div>
              <div class="tarjeta_box_content_bottom_right">
                <div class="tarjeta_box_icon">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z" />
                  </svg>
                </div>
              </div>
            </div>

          </div>
        </div>

        
        <div class="tarjetas_box">
          <div class="tarjeta_box_img">
            <picture class="picture-defer">
              <!-- <source type='image/webp' srcset="/public/img/mario_bros_home.png" media="(max-width: 700px)"> -->
              <source class="image source" type='image/webp' srcset="./public/img/default.png" data-img="/public/img/mario_bros_home_bola_fuego_clasico.webp">
              <img class="image" src="./public/img/default.png" data-img="/public/img/mario_bros_home_bola_fuego_clasico.webp" alt="Mario Bros" title="Mario Bros" width="100" height="100">
            </picture>
          </div>

          <div class="tarjeta_box_content">
            <div class="tarjeta_box_content_top">
              <div class="tarjeta_box_content_top_let">
                <p class="p1">#111</p>
                <p class="p2">Mario Bros</p>
              </div>
              <div class="tarjeta_box_content_top_right">
                <p class="p1">Supply</p>
                <p class="p2">10</p>
              </div>
            </div>
            <div class="tarjeta_box_content_bottom">
              <div class="tarjeta_box_content_bottom_let">
              It is one of the main skills in games. This ability grants Mario the ability to use pyrokinesis by launching Fireballs from his hand, You can defeat various enemies.
              </div>
              <div class="tarjeta_box_content_bottom_right">
                <div class="tarjeta_box_icon">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z" />
                  </svg>
                </div>
              </div>
            </div>

          </div>
        </div>


      </div>


    </div>
  </div>



  <script src="./public/js/carga_diferida.js"></script>
</body>

</html>