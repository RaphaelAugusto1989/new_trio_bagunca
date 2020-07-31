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
                        <li class="breadcrumb-item active">Financeiro</li>
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
                        <a href="<?= site_url('financeiro/NovaConta')?>" class="btn btn-success btn-sm pl-3 pr-3"> <i class="fas fa-plus"></i> Conta</a>
                    </div>
                </div>
                <div class="row">
                    <table class="table table-hover mt-4">
                        <thead>
                            <tr>
                                <th scope="col">A Receber/A Pagar </th>
                                <th scope="col">Vencimento</th>
                                <th scope="col">Valor</th>
                                <th scope="col">Pago/Recebido?</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Salario</td>
                                <td>10/07/2020</td>
                                <td>R$ 3.000,00</td>
                                <td>Não</td>
                                <td>
                                    <button class="btn btn-warning btn-sm text-white" title="ALTERAR"><i class="fas fa-pen"></i></button>
                                    <button class="btn btn-danger btn-sm" title="EXCLUIR"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>Internet </td>
                                <td>10/07/2020</td>
                                <td>R$ 99,99</td>
                                <td>Não</td>
                                <td>
                                    <button class="btn btn-warning btn-sm text-white" title="ALTERAR"><i class="fas fa-pen"></i></button>
                                    <button class="btn btn-danger btn-sm" title="EXCLUIR"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4" class="text-right text-danger"> <b>Total a Pagar: </b></td>
                                <td class="text-danger"> R$ 99,99</td>
                            </tr>
                            <tr>
                                <td colspan="4" class="text-right text-success"> Total Pago: </td>
                                <td class="text-success"> R$ 99,99</td>
                            </tr>
                            <tr>
                                <td colspan="4" class="text-right"> Saldo: </td>
                                <td> R$ 2.899,99</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer"></div>
        </div>
    </section>
</div>
			
