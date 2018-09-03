<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
            <div class="logo">
                <a class="navbar-brand" href="#" title="{title}">
                   <img src="<?php echo base_url('');?>/{logo}" alt="Logo {title}" style="width:120px;">
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
            {menu_list}
                <li><a href="{link_menu}" class="active" id="nav-beranda">{menu}</a></li>
            {/menu_list}
            <!-- <li><a href="#top" class="active" id="nav-beranda">BERANDA</a></li>
            <li><a href="#tentang" id="nav-tentang">TENTANG KAMI</a></li>
            <li><a href="#layanan" id="nav-layanan">LAYANAN</a></li>
            <li><a href="#testimoni" id="nav-testimoni">TESTIMONI</a></li>
            <li><a href="#kontak" id="nav-hubungi">HUBUNGI</a></li> -->
          </ul>
        </div><!-- /.navbar-collapse -->
      </div>
    </nav>