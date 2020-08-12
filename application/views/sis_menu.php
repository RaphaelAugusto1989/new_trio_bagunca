<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<header class="main-header" style="border-bottom:linear-gradient(to right, rgb(0,92,169), rgb(0,181,229));">
    <!-- Logo -->
    <a href="#" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">
            <img src="<?php echo base_url('images/logo-caixa-x.png');?>" title="" />
        </span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">
            <img src="<?php echo base_url('images/logo-caixa.png');?>" />            
        </span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="" data-toggle="offcanvas" role="button">
            <i class="nav-icon fas fa-bars"></i>
        </a>

        <!-- <span class="navbar-brand">SIGAP</span> -->

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="<?php echo site_url("Home/logout"); ?>" class="" >
                        <span class="hidden-xs"><i class="nav-icon fas fa-user"></i> <span style="text-transform:uppercase">
                            <span style="display:inline-block;">
                                Raphael Augusto Almeida Pereira          								
                            </span>
                            <span style="display:inline-block;height:30px;margin-top: -5px;margin-bottom: -10px;">
                                <img src="<?php echo base_url("images/dev.png");?>" style="height: 100%">														
                            </span>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<!-- MENU PRINCIPAL -->
<aside class="main-sidebar navbar-bg">
    <section class="sidebar">
        <ul class="sidebar-menu">
            <li class="treeview">
                <a href="#">
                    <i class="nav-icon fas fa-users mr-2"></i>
                    <span> Clientes</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="nav-icon fas fa-credit-card mr-2"></i>
                    <span> Financeiro <i class="right fas fa-angle-left"></i></span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <!--  sub-menus -->
                <ul class="treeview-menu">
                    <li class="ml-3">
                        <a href="<?= site_url('Financeiro/ContasPagar');?>">
                        <i class="fas fa-smile-beam mr-2"></i>
                            <span>Contas à pagar</span>
                        </a>
                        <a href="<?= site_url('Financeiro/ContasReceber');?>">
                        <i class="fas fa-frown mr-2"></i>
                          <span>Contas à Receber</span>
                        </a>
                    </li>						
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="nav-icon fas fa-comments-dollar mr-2"></i>
                    <span> Chamados</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="nav-icon fas fa-cog mr-2"></i>
                    <span> Configurações <i class="right fas fa-angle-left"></i></span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <!--  sub-menus -->
                <ul class="treeview-menu">
                    <li class="ml-3">
                        <a href="<?= site_url('Usuarios/Cadastrados');?>">
                            <i class="nav-icon fas fa-user-cog mr-2"></i>
                            <span>Usuários</span>
                        </a>
                    </li>						
                </ul>
            </li>
        </ul>
    </section>
</aside>	
