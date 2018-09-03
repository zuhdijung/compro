<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url('asset/js/bootstrap.min.js')?>"></script>
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
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url('asset/plugin/fancybox/fancybox/jquery.mousewheel-3.0.4.pack.js')?>"></script>
  <script type="text/javascript" src="<?php echo base_url('asset/plugin/fancybox/fancybox/jquery.fancybox-1.3.4.pack.js')?>"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      /*
      *   Examples - images
      */

      $("a#example1").fancybox();

      $("a#example2").fancybox({
        'overlayShow' : false,
        'transitionIn'  : 'elastic',
        'transitionOut' : 'elastic'
      });

      $("a#example3").fancybox({
        'transitionIn'  : 'none',
        'transitionOut' : 'none'  
      });

      $("a#example4").fancybox({
        'opacity'   : true,
        'overlayShow' : false,
        'transitionIn'  : 'elastic',
        'transitionOut' : 'none'
      });

      $("a#example5").fancybox();

      $("a#example6").fancybox({
        'titlePosition'   : 'outside',
        'overlayColor'    : '#000',
        'overlayOpacity'  : 0.9
      });

      $("a#example7").fancybox({
        'titlePosition' : 'inside'
      });

      $("a#example8").fancybox({
        'titlePosition' : 'over'
      });

      $("a[rel=image_group]").fancybox({
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'titlePosition'   : 'over',
        'titleFormat'   : function(title, currentArray, currentIndex, currentOpts) {
          return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
        }
      });

      /*
      *   Examples - various
      */

      $("#various1").fancybox({
        'titlePosition'   : 'inside',
        'transitionIn'    : 'none',
        'transitionOut'   : 'none'
      });

      $("#various2").fancybox();

      $("#various3").fancybox({
        'width'       : '75%',
        'height'      : '75%',
        'autoScale'     : false,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'type'        : 'iframe'
      });

      $("#various4").fancybox({
        'padding'     : 0,
        'autoScale'     : false,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none'
      });
    });
  </script>