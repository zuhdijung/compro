<!DOCTYPE html>
<html>
<head>
    <title>Konsultasi Pajak</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/default.css');?>">
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
            <div class="logo">
                <a class="navbar-brand" href="#">
                   <img src="<?php echo base_url('asset/images/logo.png');?>" alt="Logo Konsultasi Pajak">
                </a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
        </div> <!-- end of navbar-header -->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-left">
            <li><a href="#top" class="active" id="nav-beranda">BERANDA</a></li>
            <li><a href="#tentang" id="nav-tentang">TENTANG KAMI</a></li>
            <li><a href="#layanan" id="nav-layanan">LAYANAN</a></li>
            <li><a href="#testimoni" id="nav-testimoni">TESTIMONI</a></li>
            <li><a href="#kontak" id="nav-hubungi">HUBUNGI</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div>
    </nav>
    <div class="header">
        <div class="overlay">
            <span id="top"></span>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-8 col-md-offset-2">
                        <h1>Orang Bijak Bayar Pajak</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="brand-portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-md-offset-1 col-xs-6">
                    <img src="asset/images/client-1.png" class="img-responsive">
                </div>
                <div class="col-md-2 col-xs-6">
                    <img src="asset/images/client-2.png" class="img-responsive">
                </div>
                <div class="col-md-2 col-xs-6">
                    <img src="asset/images/client-3.png" class="img-responsive">
                </div>
                <div class="col-md-2 col-xs-6">
                    <img src="asset/images/client-4.png" class="img-responsive">
                </div>
                <div class="col-md-2 col-xs-6">
                    <img src="asset/images/client-5.png" class="img-responsive">
                </div>
            </div>
        </div>
    </div>
    <div id="tentang"></div>
    <div class="featured">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Tentang Kami</h2>
                    <div class="border-blue"></div>
                    <p>
                        Dengan bantuan kami, semua urusan pajak perusahaan Anda kami jamin beres. Anda hanya perlu konsen ke bisnis anda, urusan pajak biar percayakan pada kami. Jaminan layanan profeesional, murah dan bergaransi.
                    </p>
                    <div class="text-left" style="margin-top: 30px;">
                        <button class="btn-blued">KONTAK KAMI</button>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="asset/images/graph.jpg" class="img-responsive" style="margin-top: 80px;">
                </div>
            </div>
        </div>
    </div> <!-- end of featured -->
    <div id="layanan"></div>
    <div class="service">
        <div class="container">
            <div class=" text-center">
                <h2>Layanan Kami</h2>
                <div class="bordered"></div>
                <p class="service-text">
                   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                   tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                   quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                   consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                   cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                   proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
            <div class="row" style="margin-top: 50px;">
                <div class="col-md-4">
                    <div class="detail-service">
                        <div class="text-center">
                            <img src="asset/images/up-arrow.png">
                            <h3>Pembuatan Laporan SPT</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="detail-service">
                        <div class="text-center">
                            <img src="asset/images/contract.png">
                            <h3>Pindah Buku Pajak</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="detail-service">
                        <div class="text-center">
                            <img src="asset/images/bank.png">
                            <h3>Pembuatan e-faktur</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                </div>
            </div> <!-- end of row-->
        </div> <!-- end of container -->
    </div> <!-- end of service -->
    <div id="testimoni"></div>
    <div class="testimoni">
        <div class="container-fluid-full">
            <div class="col-md-4">
                <div class="testimoni-left">
                    <div class="overlay">
                        <h2>TESTIMONIAL</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6">
                        <div class="testimoni-client">
                            <p>
                            "Belajar Pajak is a fantastic service! It is so easy to use and the customer support is the best around. This payment option is my number one choice. I always recommend it."
                            </p>
                            <div>
                                <img src="asset/images/client-1.png">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="testimoni-client">
                            <p>
                            "Belajar Pajak is a fantastic service! It is so easy to use and the customer support is the best around. This payment option is my number one choice. I always recommend it."
                            </p>
                            <div>
                                <img src="asset/images/client-2.png">
                            </div>
                        </div>
                    </div>
                </div> <!-- end of row -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="testimoni-client">
                            <p>
                            "Belajar Pajak is a fantastic service! It is so easy to use and the customer support is the best around. This payment option is my number one choice. I always recommend it."
                            </p>
                            <div>
                                <img src="asset/images/client-3.png">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="testimoni-client">
                            <p>
                            "Belajar Pajak is a fantastic service! It is so easy to use and the customer support is the best around. This payment option is my number one choice. I always recommend it."
                            </p>
                            <div>
                                <img src="asset/images/client-4.png">
                            </div>
                        </div>
                    </div>
                </div> <!-- end of row -->
            </div>
            <div class="clearfix"></div>
        </div>
    </div> <!-- end of testimoni -->
    <div id="kontak"></div>
    <div class="kontak">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <center>
                            <h2>HUBUNGI KAMI</h2>
                        </center>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-md-offset-2">
                        <div class="form-group">
                            <input type="text" name="nama" placeholder="Nama" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" name="email" placeholder="Email" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="form-group">
                            <input type="text" name="subjek" placeholder="Subjek" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Pesan" name="pesan"></textarea>
                        </div>
                        <div style="margin-top: 25px">
                            <button class="btn-blued">KIRIM</button>
                        </div>
                    </div>
                </div>
            </div> <!-- end of container -->
        </div> <!-- end of overlay -->
    </div> <!-- end of kontak -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        &copy;2018 Bayar Pajak All Right Reserved. | Developed By <a href="#">Solusi Data</a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end of footer -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script>
    $(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});

   /* var scroll_start = 0;
    var idtentang = $('#tentang');
    var idberanda = $('#beranda');
    var idlayanan = $('#layanan');
    var idtestimoni = $('#testimoni');
    var idkontak = $('#kontak');
    var offset_idberanda = idberanda.offset();
    var offset_idtentang = idtentang.offset();
    var offset_idlayanan = idlayanan.offset();
    var offset_idtestimoni = idtestimoni.offset();
    var offset_idkontak = idkontak.offset();

        $(document).ready(function(){

    if (idtentang.length){
        $(document).scroll(function() {
            scroll_start = $(document).scrollTop();
            if(scroll_start > offset_idtentang.top) {
                $("#nav-tentang").addClass("active");
                $("#nav-beranda").removeClass("active");
            } else {
                $("#nav-tentang").removeClass("active");
                $("#nav-layanan").removeClass("active");
            }
        });
    }
 });
    $(document).ready(function(){
        if (idlayanan.length){
        $(document).scroll(function() {
            scroll_start = $(document).scrollTop();
             if(scroll_start > offset_idlayanan.top) {
                $("#nav-layanan").addClass("active");
            } else {
                $("#nav-tentang").removeClass("active");
                $("#nav-testimoni").removeClass("active");
            }
        });
    }
    })*/
  </script>
</body>
</html>
