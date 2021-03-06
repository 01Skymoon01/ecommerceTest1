<?php
require_once "../Core/AdminsC.php";
require_once "session.php";
//require_once "mail.php";

$var2 = $_SESSION["username"];
$var =  $_SESSION["role"];

?>
<div class="left-sidebar-pro" >
    <nav id="sidebar" class="" style="width:210px;">
        <div class="sidebar-header">
<!--            <a href="index.html"><img class="main-logo" src="img/lola.jpg" alt="" /></a>
            <strong><img src="img/logo/logosn.png" alt="" /></strong>-->
        </div>
        <div class="nalika-profile" style="" >
            <div class="profile-dtl">
                <a href="afficher_produits.php" class="fa fa-spin"><img class="main-logo" src="img/lola.jpg" alt="" /></a>
                <h2 class="text-uppercase">GeoConcept.</h2>
            </div>
            <div class="profile-social-dtl">
                <ul class="dtl-social">
                    <li><a href="#"><i class="icon nalika-facebook"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="left-custom-menu-adp-wrap comment-scrollbar">
            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu" id="menu1">
                    <?php if ($var=="admin") : ?>
                    <li class="active">
                        <a class="has-arrow" href="admins-edit.php">
                            <i class="icon nalika-paper-plane icon-wrap"></i>
                            <span class="mini-click-non">Admins</span>
                        </a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Ajouter Admins" href="admins-edit.php"><span class="mini-sub-pro">Ajouter Admins</span></a>
                            </li>
                            <li><a title="Liste Admins" href="Afficher_admins.php"><span class="mini-sub-pro">Liste Admins</span></a>
                            </li>
                        </ul>
                    </li>
                    <?php endif; ?>
                    <li>
                        <a class="has-arrow"  aria-expanded="false"><i
                                    class="icon nalika-pie-chart icon-wrap"></i> <span
                                    class="mini-click-non">Produits</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Liste Produits" href="afficher_produits.php"><span class="mini-sub-pro">Liste Produits</span></a>
                            </li>
                            <li><a title="Ajouter Produits" href="product-edit.php"><span class="mini-sub-pro">Ajouter Produits</span></a>
                            </li>
                            <li><a title="Analytics" href="statistiques.php"><span class="mini-sub-pro">Stat Stock</span></a></li>
                            </li>
                        </ul>

                    <li>
                        <a class="has-arrow"  aria-expanded="false" ><i class="icon nalika-table icon-wrap"></i> <span
                                    class="mini-click-non">Commande</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Liste Produits" href="CommandeList.php"><span class="mini-sub-pro">Liste Commandes</span></a>
                            </li>
                            <li><a title="Liste Produits" href="REVENUE.php"><span class="mini-sub-pro">Revenue</span></a>
                            </li>
                          </ul>
                        </li>
                        <li>
                            <a class="has-arrow"  aria-expanded="false" ><i class="icon nalika-home icon-wrap"></i></i> <span
                                        class="mini-click-non">Users</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Liste Produits" href="Users.php"><span class="mini-sub-pro">Liste Users</span></a>
                                </li>
                                <li><a title="Liste Produits" href="SendMailForm.php"><span class="mini-sub-pro">Send Mail</span></a>
                                </li>
                              </ul>
                            </li>
                            <li>
                                <a class="has-arrow"  aria-expanded="false" ><i class="icon nalika-diamond icon-wrap"></i></i> <span
                                            class="mini-click-non">S.A.V</span></a>
                                <ul class="submenu-angle" aria-expanded="false">
                                    <li><a title="Liste Produits" href="demandeBACK.php"><span class="mini-sub-pro">Demandes</span></a>
                                    </li>
                                    <li><a title="Liste Produits" href="RDVBACK.php"><span class="mini-sub-pro">Rendez-vous</span></a>
                                    </li>
                                    <li><a title="Liste Produits" href="reclamationBACK.php"><span class="mini-sub-pro">Reclamations</span></a>
                                    </li>
                                  </ul>
                                </li>
                                <li>
                                    <a class="has-arrow" aria-expanded="false" ><i class="icon nalika-bar-chart icon-wrap"></i> <span
                                                class="mini-click-non">Location</span></a>
                                    <ul class="submenu-angle" aria-expanded="false">
                                        <li><a title="Liste Produits" href="locationBack.php"><span class="mini-sub-pro">Liste des locations</span></a>
                                        </li>

                                      </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow"  aria-expanded="false" ><i class="fa fa-truck icon-wrap"></i> <span
                                                    class="mini-click-non">Livraison</span></a>
                                        <ul class="submenu-angle" aria-expanded="false">
                                            <li><a title="Liste Produits" href="employeBACK.php"><span class="mini-sub-pro">Liste livreurs</span></a>
                                            </li>
                                            <li><a title="Liste Produits" href="AjouterEmployeBACK.php"><span class="mini-sub-pro">Ajouter Livreur</span></a>
                                            </li>
                                            <li><a title="Liste Produits" href="LivraisonBACK.php"><span class="mini-sub-pro">Liste Livraisons</span></a>
                                            </li>
                                            <li><a title="Liste Produits" href="AjouterLivraisonBACK.php"><span class="mini-sub-pro">Ajouter Livraison</span></a>
                                            </li>
                                          </ul>
                                        </li>
                </ul>
            </nav>
        </div>
    </nav>
</div>
<!-- Start Welcome area -->
<div class="all-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="logo-pro">
                    <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                </div>
            </div>
        </div>
    </div>
    <div class="header-advance-area">
        <div class="header-top-area">
            <div class="container-fluid">
                <div class="row" style="">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="header-top-wraper">
                            <div class="row">
                                <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                    <div class="menu-switcher-pro">
                                        <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                            <i class="icon nalika-menu-task"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                    <div class="header-top-menu tabl-d-n">
                                        <div class="breadcome-heading">

                                        </div></div>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                    <div class="header-right-info">
                                        <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                            <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="icon nalika-alarm" aria-hidden="true"></i><span class="indicator-nt"></span></a>
                                                <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                    <div class="notification-single-top">
                                                        <h1>Notifications</h1>
                                                    </div>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                    <i class="icon nalika-user nalika-user-rounded header-riht-inf" aria-hidden="true"></i>

                                                    <span class="admin-name" style="font-size: 20px;text-decoration: underline;"><?php echo $var2; ?></span>

                                                </a>
                                                <a href="logout.php" class="fa fa-sign-out fa-2x "><!--<span class="icon nalika-unlocked author-log-ic"></span>--> </a>

                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu start -->
        <div class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul class="mobile-menu-nav">
                                    <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                        <ul class="collapse dropdown-header-top">

                                            <li><a href="product-list.html">Liste Produits</a></li>
                                            <li><a href="../Nalika/product-edit.html">Edition Produits</a></li>
                                            <li><a href="product-detail.php">Product Detail</a></li>
                                            <li><a href="product-cart.html">Product Cart</a></li>
                                            <li><a href="product-payment.html">Product Payment</a></li>
                                            <li><a href="statistiques.php">Analytics</a></li>
                                            <li><a href="widgets.html">Widgets</a></li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#demo" href="#">Mailbox <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                        <ul id="demo" class="collapse dropdown-header-top">
                                            <li><a href="mailbox.html">Inbox</a>
                                            </li>
                                            <li><a href="mailbox-view.html">View Mail</a>
                                            </li>
                                            <li><a href="mailbox-compose.html">Compose Mail</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#others" href="#">Miscellaneous <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                        <ul id="others" class="collapse dropdown-header-top">
                                            <li><a href="file-manager.html">File Manager</a></li>
                                            <li><a href="contacts.html">Contacts Client</a></li>
                                            <li><a href="projects.html">Project</a></li>
                                            <li><a href="project-details.html">Project Details</a></li>
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                            <li><a href="404.html">404 Page</a></li>
                                            <li><a href="500.html">500 Page</a></li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">Interface <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                        <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                            <li><a href="google-map.html">Google Map</a>
                                            </li>
                                            <li><a href="data-maps.html">Data Maps</a>
                                            </li>
                                            <li><a href="pdf-viewer.html">Pdf Viewer</a>
                                            </li>
                                            <li><a href="x-editable.html">X-Editable</a>
                                            </li>
                                            <li><a href="code-editor.html">Code Editor</a>
                                            </li>
                                            <li><a href="tree-view.html">Tree View</a>
                                            </li>
                                            <li><a href="preloader.html">Preloader</a>
                                            </li>
                                            <li><a href="images-cropper.html">Images Cropper</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#Chartsmob" href="#">Charts <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                        <ul id="Chartsmob" class="collapse dropdown-header-top">
                                            <li><a href="bar-charts.html">Bar Charts</a>
                                            </li>
                                            <li><a href="line-charts.html">Line Charts</a>
                                            </li>
                                            <li><a href="area-charts.html">Area Charts</a>
                                            </li>
                                            <li><a href="rounded-chart.html">Rounded Charts</a>
                                            </li>
                                            <li><a href="c3.html">C3 Charts</a>
                                            </li>
                                            <li><a href="sparkline.html">Sparkline Charts</a>
                                            </li>
                                            <li><a href="peity.html">Peity Charts</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#Tablesmob" href="#">Tables <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                        <ul id="Tablesmob" class="collapse dropdown-header-top">
                                            <li><a href="static-table.html">Static Table</a>
                                            </li>
                                            <li><a href="data-table.html">Data Table</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#formsmob" href="#">Forms <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                        <ul id="formsmob" class="collapse dropdown-header-top">
                                            <li><a href="basic-form-element.html">Basic Form Elements</a>
                                            </li>
                                            <li><a href="advance-form-element.html">Advanced Form Elements</a>
                                            </li>
                                            <li><a href="password-meter.html">Password Meter</a>
                                            </li>
                                            <li><a href="multi-upload.html">Multi Upload</a>
                                            </li>
                                            <li><a href="tinymc.html">Text Editor</a>
                                            </li>
                                            <li><a href="dual-list-box.html">Dual List Box</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#Appviewsmob" href="#">App views <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                        <ul id="Appviewsmob" class="collapse dropdown-header-top">
                                            <li><a href="basic-form-element.html">Basic Form Elements</a>
                                            </li>
                                            <li><a href="advance-form-element.html">Advanced Form Elements</a>
                                            </li>
                                            <li><a href="password-meter.html">Password Meter</a>
                                            </li>
                                            <li><a href="multi-upload.html">Multi Upload</a>
                                            </li>
                                            <li><a href="tinymc.html">Text Editor</a>
                                            </li>
                                            <li><a href="dual-list-box.html">Dual List Box</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                        <ul id="Pagemob" class="collapse dropdown-header-top">
                                            <li><a href="login.html">Login</a>
                                            </li>
                                            <li><a href="register.html">Register</a>
                                            </li>
                                            <li><a href="lock.html">Lock</a>
                                            </li>
                                            <li><a href="password-recovery.html">Password Recovery</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu end -->
    </div>
