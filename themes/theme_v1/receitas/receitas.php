<?php $this->layout('template', ['title' => 'Receitas', 'menu' => 'receitas', 'breadcrumb' => $breadcrumb]) ?>

<section>
    <div class="row" id="basic-table">
        <div class="col-12">
            <div class="card">
                <div class="card-header justify-content-start">
                    <h4 class="card-title d-flex justify-content-start align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 11.5a.5.5 0 0 0 .5.5h11.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 11H1.5a.5.5 0 0 0-.5.5zm14-7a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H14.5a.5.5 0 0 1 .5.5z"/>
                        </svg>
                    </h4>
                    <div class="text-left ml-1">
                        <h4 class="mb-0">Receitas</h4>
                        <small>Aqui estão todas as receitas separadas por mês</small>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Mês</th>
                            <th>Total de Receitas</th>
                            <th class="text-right">Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($revenues['revenues'] as $mes => $revenue): ?>
                            <tr>
                                <td>
                                    <?=$mes;?>
                                </td>
                                <td class="text-success">
                                    <strong>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-short" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z"/>
                                        </svg>
                                        <?=$revenues['totais'][$mes][0]->total_mes; ?>
                                    </strong>
                                </td>
                                <td class="text-right">
                                    <div>
                                        <a href="<?=url('mensagem/abandono/'.$revenue[0]->id);?>" class="btn btn-sm btn-facebook">
                                            <i data-feather='arrow-right'></i> Receitas
                                        </a>
                                        <a href="<?=url('mensagem/abandono/'.$revenue[0]->id);?>" class="btn btn-sm btn-facebook">
                                            <i data-feather='printer'></i> Relatório
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>