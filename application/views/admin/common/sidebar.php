
    <!--
        Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
        Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
    -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="<?php echo base_url('administrator')?>" class="simple-text">
                    <?php
                        $result = $this->mod->getDataWhere('setting','id_setting',1);
                        echo $result['title_website'];
                    ?>
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="<?php echo base_url('administrator'); ?>">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="active">
                    <a href="<?php echo base_url('administrator/user/manage-user');?>">
                        <i class="ti-user"></i>
                        <p>Data Siswa</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('administrator/article/manage');?>">
                        <i class="ti-user"></i>
                        <p>Data User</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('administrator/article/manage');?>">
                        <i class="ti-list"></i>
                        <p>Keuangan</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('administrator/article/manage');?>">
                        <i class="ti-list"></i>
                        <p>Absensi</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('administrator/article/manage');?>">
                        <i class="ti-clipboard"></i>
                        <p>Laporan</p>
                    </a>
                </li>
                <!-- <li>
                    <a href="<?php echo base_url('administrator/article/manage');?>">
                        <i class="ti-text"></i>
                        <p>Artcile</p>
                    </a>
                </li> --><!-- 
                <li>
                    <a href="<?php echo base_url('administrator/article/manage-category');?>">
                        <i class="ti-list"></i>
                        <p>Category</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('administrator/article/manage-page');?>">
                        <i class="ti-clipboard"></i>
                        <p>Page</p>
                    </a>
                </li>
                 <li>
                    <a href="<?php echo base_url('administrator/gallery/manage');?>">
                        <i class="ti-gallery"></i>
                        <p>Gallery</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('administrator/menu/manage-menu');?>">
                        <i class="ti-menu"></i>
                        <p>Menu</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('administrator/dashboard/setting');?>">
                        <i class="ti-settings"></i>
                        <p>Setting</p>
                    </a>
                </li> -->

                <!--<li>
                    <a href="<?php echo base_url('administrator/dashboard/user');?>">
                        <i class="ti-user"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('administrator/dashboard/table');?>">
                        <i class="ti-view-list-alt"></i>
                        <p>Table List</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('administrator/dashboard/typography');?>">
                        <i class="ti-text"></i>
                        <p>Typography</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('administrator/dashboard/icons');?>">
                        <i class="ti-pencil-alt2"></i>
                        <p>Icons</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('administrator/dashboard/maps');?>">
                        <i class="ti-map"></i>
                        <p>Maps</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('administrator/dashboard/notifications');?>">
                        <i class="ti-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>
                <li class="active-pro">
                    <a href="upgrade.html">
                        <i class="ti-export"></i>
                        <p>Upgrade to PRO</p>
                    </a>
                </li>-->
            </ul>
        </div>