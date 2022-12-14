<html lang="en"><head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard 2</title>

 <!-- Fontfaces CSS-->
 <link href="<?php echo base_url();?>template/css/font-face.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>template/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>template/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>template/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?php echo base_url();?>template/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url();?>template/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>template/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>template/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>template/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>template/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>template/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>template/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url();?>template/css/theme.css" rel="stylesheet" media="all">

 <!-- Jquery JS-->
 <script src="<?php echo base_url();?>template/vendor/jquery-3.2.1.min.js"></script>


<style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style><style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style><style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style>

</head>

<body class="animsition" style="animation-duration: 900ms; opacity: 1;">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar2">
            <div class="logo">
                <a href="#">
                    <img src="<?php echo base_url();?>/template/images/icon/logo-white.png" alt="Cool Admin">
                </a>
            </div>
            <div class="menu-sidebar2__content js-scrollbar1 ps ps--active-y">
                <div class="account2">
                     
                    <div class="image img-cir img-120">
                        <a href="<?php echo base_url();?>user_agent/profile/">  
                        <img src="<?php echo base_url()."/upload/img/foto_user/".$this->session->userdata('foto');?>" alt="<?php echo $this->session->userdata('nama');?>">
                    </div>
                    
                    <h4 class = "name"><?php echo anchor(base_url()."user_agent/profile/",$this->session->userdata('nama')); ?> </h4>
                    <?php echo anchor('auth/logout','Sign Out'); ?>
                </div>
                <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <!--menu dinamis -->
                        <?php
                     
                        $main_menu = $this->db->get_where('tabel_menu',array('is_main_menu'=>0)) ->result();
                        foreach ($main_menu as $main){
                              //cek apakah ada submenu
                            $submenu = $this->db->get_where('tabel_menu',array('is_main_menu'=>$main->id));
                            if($submenu->num_rows()>0){ // untuk cek submenu, apa bila di is_main_menu lebih besar dari 0 maka ada submenunya
                                //tampilkan submenu disini
                                echo "<li>
                                    
                                <a class='js-arrow' href='#'>
                                <i class='".$main->icon."'></i>'".$main->nama_menu."'</a>
                                    <ul class='list-unstyled navbar__sub-list js-sub-list' style='display:none;'>";
                                    foreach ($submenu->result() as $sub){
                                        echo "<li>".anchor($sub->link,$sub->nama_menu)."</li>"; 
                                        
                                    }
                                    echo "</ul>
                                    </li>";
                            }else{
                                //tampilkan main menu
                                echo "<li>".anchor($main->link, '<i class="'.$main->icon.'"></i>'.$main->nama_menu)."</li>"; //icon nya belum nampil, setingannya disini main->icon
                      
                            }
                        }
                         ?>
                        <!--end menu dinamis-->
                </nav>
            </div>
            <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div><div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div><div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 977px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 767px;"></div></div></div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container2">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop2">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap2">
                            <div class="logo d-block d-lg-none">
                                <a href="#">
                                    <img src="<?php echo base_url();?>template/images/icon/logo-white.png" alt="CoolAdmin">
                                </a>
                            </div>
                            <div class="header-button2">
                                <div class="header-button-item js-item-menu">
                                    <i class="zmdi zmdi-search"></i>
                                    <div class="search-dropdown js-dropdown">
                                        <form action="">
                                            <input class="au-input au-input--full au-input--h65" type="text" placeholder="Search for datas &amp; reports...">
                                            <span class="search-dropdown__icon">
                                                <i class="zmdi zmdi-search"></i>
                                            </span>
                                        </form>
                                    </div>
                                </div>
                                <div class="header-button-item has-noti js-item-menu">
                                    <i class="zmdi zmdi-notifications"></i>
                                    <div class="notifi-dropdown js-dropdown">
                                        <div class="notifi__title">
                                            <p>You have 3 Notifications</p>
                                        </div>
                                        <div class="notifi__item">
                                            <div class="bg-c1 img-cir img-40">
                                                <i class="zmdi zmdi-email-open"></i>
                                            </div>
                                            <div class="content">
                                                <p>You got a email notification</p>
                                                <span class="date">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class="notifi__item">
                                            <div class="bg-c2 img-cir img-40">
                                                <i class="zmdi zmdi-account-box"></i>
                                            </div>
                                            <div class="content">
                                                <p>Your account has been blocked</p>
                                                <span class="date">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class="notifi__item">
                                            <div class="bg-c3 img-cir img-40">
                                                <i class="zmdi zmdi-file-text"></i>
                                            </div>
                                            <div class="content">
                                                <p>You got a new file</p>
                                                <span class="date">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class="notifi__footer">
                                            <a href="#">All notifications</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="header-button-item mr-0 js-sidebar-btn">
                                    <i class="zmdi zmdi-menu"></i>
                                </div>
                                <div class="setting-menu js-right-sidebar d-none d-lg-block">
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="<?php echo base_url();?>user_agent/profile/">
                                                <i class="zmdi zmdi-account"></i>Account</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-settings"></i>Setting</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-money-box"></i>Billing</a>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-globe"></i>Language</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-pin"></i>Location</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-email"></i>Email</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-notifications"></i>Notifications</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <aside class="menu-sidebar2 js-right-sidebar d-block d-lg-none">
                <div class="logo">
                    <a href="#">
                        <img src="<?php echo base_url();?>template/images/icon/logo-white.png" alt="Cool Admin">
                    </a>
                </div>
                <div class="menu-sidebar2__content js-scrollbar2 ps">
                <div class="account2">
                     
                     <div class="image img-cir img-120">
                         <a href="<?php echo base_url();?>user_agent/profile/">  
                         <img src="<?php echo base_url()."/upload/img/foto_user/".$this->session->userdata('foto');?>" alt="<?php echo $this->session->userdata('nama');?>">
                     </div>
                     
                     <h4 class = "name"><?php echo anchor(base_url()."user_agent/profile/",$this->session->userdata('nama')); ?> </h4>
                     <?php echo anchor('auth/logout','Sign Out'); ?>
                 </div>
                    <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                        <!--menu dinamis -->
                        <?php
                     
                        $main_menu = $this->db->get_where('tabel_menu',array('is_main_menu'=>0)) ->result();
                        foreach ($main_menu as $main){
                              //cek apakah ada submenu
                            $submenu = $this->db->get_where('tabel_menu',array('is_main_menu'=>$main->id));
                            if($submenu->num_rows()>0){ // untuk cek submenu, apa bila di is_main_menu lebih besar dari 0 maka ada submenunya
                                //tampilkan submenu disini
                                echo "<li>
                                    
                                <a class='js-arrow' href='#'>
                                <i class='".$main->icon."'></i>'".$main->nama_menu."'</a>
                                    <ul class='list-unstyled navbar__sub-list js-sub-list' style='display:none;'>";
                                    foreach ($submenu->result() as $sub){
                                        echo "<li>".anchor($sub->link,$sub->nama_menu)."</li>"; 
                                        
                                    }
                                    echo "</ul>
                                    </li>";
                            }else{
                                //tampilkan main menu
                                echo "<li>".anchor($main->link, '<i class="'.$main->icon.'"></i>'.$main->nama_menu)."</li>"; //icon nya belum nampil, setingannya disini main->icon
                      
                            }
                        }
                         ?>
                        <!--end menu dinamis-->
                </nav>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div><div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div><div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
            </aside>
            <!-- END HEADER DESKTOP-->

            <!-- BREADCRUMB-->
            <section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left">
                                        <span class="au-breadcrumb-span">You are here:</span>
                                        <ul class="list-unstyled list-inline au-breadcrumb__list">
                                            <li class="list-inline-item active">
                                                <a href="#">Home</a>
                                            </li>
                                            <li class="list-inline-item seprate">
                                                <span>/</span>
                                            </li>
                                            <li class="list-inline-item">Dashboard</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->

            <!-- STATISTIC-->
            
            <!-- END STATISTIC-->

            <section>
                
            </section>

            <section>
                <div class="section__content section__content--p30">
                    <?php echo $contents; ?>
                </div>
                </section></div>
            

            <section>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright ?? 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END PAGE CONTAINER-->
        </div>

    
 <!-- Jquery JS-->
 <!-- <script src="<?php echo base_url();?>template/vendor/jquery-3.2.1.min.js"></script> -->
    <!-- Bootstrap JS-->
    <script src="<?php echo base_url();?>template/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?php echo base_url();?>template/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="<?php echo base_url();?>template/vendor/slick/slick.min.js">
    </script>
    <script src="<?php echo base_url();?>template/vendor/wow/wow.min.js"></script>
    <script src="<?php echo base_url();?>template/vendor/animsition/animsition.min.js"></script>
    <script src="<?php echo base_url();?>template/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?php echo base_url();?>template/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url();?>template/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?php echo base_url();?>template/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="<?php echo base_url();?>template/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?php echo base_url();?>template/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="<?php echo base_url();?>template/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="<?php echo base_url();?>template/js/main.js"></script>




<!-- end document-->s</body></html>