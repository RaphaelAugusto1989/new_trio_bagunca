<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>		
<div class="content-wrapper" >
     <!-- Content Header (Page header) -->
     <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6"></div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= site_url();?>">Home</a></li>
                        <li class="breadcrumb-item active">Usuários</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    
    <section class="content" >
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><?= $title ?></h3>
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
                        <a href="<?= site_url('usuarios/NovoUsuario')?>" class="btn btn-success btn-sm pl-3 pr-3"> <i class="fas fa-plus"></i> Usuário</a>
                    </div>
                </div>
                <div class="row">
                    <table class="table table-hover mt-4">
                        <thead>
                            <tr>
                                <th scope="col">CPF</th>
                                <th scope="col">Nome</th>
                                <th scope="col">E-mail</th>
                                <th scope="col">Login</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>023.486.491-52</td>
                                <td>Raphael Augusto Almeida Pereira</td>
                                <td>raphael.a.a.p@gmail.com</td>
                                <td>raphael1989</td>
                                <td>
                                    <button class="btn btn-warning btn-sm text-white" title="ALTERAR"><i class="fas fa-pen"></i></button>
                                    <button class="btn btn-danger btn-sm" title="EXCLUIR"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>023.486.491-52</td>
                                <td>Raphael Augusto Almeida Pereira</td>
                                <td>raphael.a.a.p@gmail.com</td>
                                <td>raphael1989</td>
                                <td>
                                    <button class="btn btn-warning btn-sm text-white" title="ALTERAR"><i class="fas fa-pen"></i></button>
                                    <button class="btn btn-danger btn-sm" title="EXCLUIR"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer"></div>
        </div>
    </section>
</div>
			
