<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

  <title>
    ZeZeBeauty
  </title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="Anasayfa.php">
          <span>
            ZeZeBeauty
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""></span>
        </button>

        <div class="collapse navbar-collapse innerpage_navbar" id="navbarSupportedContent">
          <ul class="navbar-nav  ">
            <li class="nav-item ">
              <a class="nav-link" href="Anasayfa.php">Anasayfa <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="Alışveriş.php">
                Alışveriş
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="NedenBiz.php">
                Neden Biz
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Referans.php">
                Referans
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="İletişim.php">İletişim</a>
            </li>
          </ul>
          <div class="user_option">
          <?php
              session_start();
              if (isset($_SESSION['username'])) {
                  echo '<span>Hoş geldin '  . $_SESSION['username'] .  '</span>';
                  echo '<a href="">   </a>';
                  echo '<a href="cikis.php">  Çıkış Yap </a>';
              } else {
                  echo '<a href="index.php"><i class="fa fa-user" aria-hidden="true"></i><span>Giriş</span></a>';
                  echo '<a href="uyeol.php"><i class="fa fa-user" aria-hidden="true"></i><span>Üye Ol</span></a>';
              }
              ?>
            <a href="Sepet.php">
              <i class="fa fa-shopping-bag" aria-hidden="true"></i>
            </a>
            
          </div>
        </div>
      </nav>
    </header>
    <!-- end header section -->

  </div>
  <!-- end hero area -->

  <!-- client section -->
  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Referanslarımız
        </h2>
      </div>
    </div>
    <div class="container px-0">
      <div id="customCarousel2" class="carousel  carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="box">
              <div class="client_info">
                <div class="client_name">
                  <h5>
                    Şeyda Erdoğan
                  </h5>
                  <h6>
                    İnfluencer
                  </h6>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>
                Son derece yüksek kalitede ve titizlikle işlerini yürüten bir firma. Kendilerinden on yılı aşkın süredir araştırma projelerim için referans malzeme aldım ve hiçbir aşamada sorun yaşamadık. Kendilerine teşekkür ederim, keşke her firma işini onlar kadar iyi yapmaya çalışsa.              </p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="client_info">
                <div class="client_name">
                  <h5>
                    Duygu Özaslan
                  </h5>
                  <h6>
                    İnfluencer
                  </h6>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>
                irmanızın karşılaştığımız sorunlarda hızlı dönüşleri, ihtiyaçlarımız kapsamında yönlendirmeleri güleryüzlü hizmeti oldukça başarılı. İsteklerimiz kapsamında hızlı dönüşleriniz, tecrübeleriniz ile doğru noktalara yönlendirmeleriniz, güler yüzlü hizmetiniz ile sektörde çok farklı bir konumda yer alıyorsunuz. Başarılarınızın devamını dilerim.
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="client_info">
                <div class="client_name">
                  <h5>
                    Serenay Sarıkaya
                  </h5>
                  <h6>
                    Oyuncu
                  </h6>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>
                Kesinlikle malzeme konusunda portföyü geniş ve hizmet konusunda hızlı bir şekilde yanıt alabildiğim firma.
              </p>
            </div>
          </div>
        </div>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- end client section -->

  <!-- info section -->

  <section class="info_section  layout_padding2-top">
    <div class="social_container">
      <div class="social_box">
        <a href="">
          <i class="fa fa-facebook" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-twitter" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-instagram" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-youtube" aria-hidden="true"></i>
        </a>
      </div>
    </div>
    <div class="info_container ">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3">
            <h6>
              Hakkımızda
            </h6>
            <p>
              Fransa’da 1969’da Dominique Mandonnaud tarafından kuruldu.
            </p>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="info_form ">
              <h5>
                Bülten
              </h5>
              <form action="#">
                <input type="email" placeholder=" e-mailinizi giriniz">
                <button>
                  Onayla
                </button>
              </form>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <h6>
             YARDIM EKİBİ
            </h6>
            <p>
              Güncel stok ve indirimlerimiz ile bir numaralı kozmetik bayisiyiz
            </p>
          </div>
          <div class="col-md-6 col-lg-3">
            <h6>
              BİZE ULAŞIN
            </h6>
            <div class="info_link-box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span> 12.sk 6.cd manolya </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>+90 547 369 4560</span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span> Kozmozey@gmail.com</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- footer section -->
    <footer class=" footer_section">
      <div class="container">
      
      </div>
    </footer>
    <!-- footer section -->

  </section>

  <!-- end info section -->


  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="js/custom.js"></script>

</body>

</html>