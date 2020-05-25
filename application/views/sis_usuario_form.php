<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<script src="<?= base_url('assets/js/validaUsuario.js')?>"></script>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6"></div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= site_url();?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= site_url('usuarios/Cadastrados');?>">Usuários</a></li>
                        <li class="breadcrumb-item active"><?= $title; ?></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><b><?= $title ?></b></h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <!-- <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fas fa-times"></i>
                    </button> -->
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <!-- <a href="#" class="btn btn-success btn-sm pl-3 pr-3"> <i class="fas fa-plus"></i> Usuário</a> -->
                    </div>
                </div>
                <div class="form-row mt-2">
                    <div class="form-group col-12">
                        <input type="file" name="foto" id="">
                    </div>
                </div>
                <div class="form-row mt-2">
                    <div class="form-group col-md-6 col-lg-3">
                        <label> CPF: </label>
                        <input type="text" name="cpf" class="form-control cpf" id="">
                    </div>
                    <div class="form-group col-md-6 col-lg-3"></div>
                    <div class="form-group col-md-0 col-lg-3"></div>
                    <div class="form-group col-md-6 col-lg-3"></div>
                </div>
                <div class="form-row mt-2">
                    <div class="form-group col-12">
                        <label> Nome: </label>
                        <input type="text" name="nome" class="form-control" id="">
                    </div>
                </div>
                <div class="form-row mt-2">
                    <div class="form-group col-12">
                        <label> E-mail: </label>
                        <input type="email" name="email" class="form-control" id="">
                    </div>
                </div>
                <div class="form-row mt-2">
                    <div class="form-group col-6">
                        <label> Login: </label>
                        <input type="text" name="login" class="form-control" id="">
                    </div>
                    <div class="form-group col-6">
                        <label> Senha: </label>
                        <input type="password" name="senha" class="form-control" id="">
                    </div>
                </div>
                <div class="form-row mt-2">
                    <div class="form-group col-md-0 col-lg-3"></div>
                    <div class="form-group col-md-4 col-lg-3"></div>
                    <div class="form-group col-md-4 col-lg-3"></div>
                    <div class="form-group col-md-4 col-lg-3">
                        <button class="btn btn-success btn-sm btn-block pl-3 pr-3" onclick="validaUsuario()"> <i class="fas fa-save"></i> Salvar</button>
                    </div>
                </div>
            </div>
            <div class="card-footer"></div>
        </div>
    </section>
</div>


