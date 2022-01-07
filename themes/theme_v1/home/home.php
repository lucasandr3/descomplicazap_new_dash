<?php $this->layout('template', ['title' => 'Painel | Home', 'menu' => 'painel', 'breadcrumb' => $breadcrumb]) ?>

<section>
    <div class="row">
        <?php foreach ($totais as $total): ?>
        <div class="col-lg-6 col-sm-6 col-12">
            <div class="card">
                <div class="card-header">
                    <div>
                        <h2 class="font-weight-bolder mb-0"><?=$total['total_vendido'];?></h2>
                        <p class="card-text"><?=$total['forma'];?></p>
                    </div>
                    <div class="avatar bg-light-success p-50 m-0">
                        <div class="avatar-content">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart-check-fill" viewBox="0 0 16 16">
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<section>
    <div class="row" id="basic-table">
        <div class="col-12">
            <div class="card">
                <div class="card-header justify-content-between">
                    <h4 class="card-title d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart-x-fill" viewBox="0 0 16 16">
                            <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM7.354 5.646 8.5 6.793l1.146-1.147a.5.5 0 0 1 .708.708L9.207 7.5l1.147 1.146a.5.5 0 0 1-.708.708L8.5 8.207 7.354 9.354a.5.5 0 1 1-.708-.708L7.793 7.5 6.646 6.354a.5.5 0 1 1 .708-.708z"/>
                        </svg>
                        <div class="text-left ml-1">
                            <h4 class="mb-0">Abandono de Carrinho</h4>
                            <small>Aqui estão os 10 últimos carrinhos abandonados</small>
                        </div>
                    </h4>
                    <div>
                        <div class="dropdown">
                            <button class="btn btn-success" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                                <span class="mr-1">Exportar Leads</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                    <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                    <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                                </svg>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a href="<?=url('exportar/carrinhos_abandonados/txt');?>" class="dropdown-item d-flex justify-content-between">
                                    <span class="mr-1">Gerar TXT</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                        <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                                    </svg>
                                </a>
                                <a href="<?=url('exportar/carrinhos_abandonados/csv');?>" class="dropdown-item d-flex justify-content-between">
                                    <span class="mr-1">Gerar CSV</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                        <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Produto</th>
                            <th>Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($abandonados['abandonado'] as $abandonado): ?>
                            <tr>
                                <td>
                                    <?=$abandonado['product'];?>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a href="<?=url('mensagem/abandono/'.$abandonado['id']);?>" class="btn btn-sm btn-danger">
                                            <i data-feather="send"></i> Enviar E-mail
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer d-flex justify-content-sm-between align-items-center p-2 pl-2 pr-2">
                    <div>
                        <span>Total de <strong><?=$abandonados['paginacao']['qtdTotal'];?></strong> Registros</span>
                    </div>
                    <a href="<?=url('vendas/carrinhos_abandonados');?>">
                        Ir para Carrinhos Abandonados
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="row" id="basic-table">
        <div class="col-12">
            <div class="card">
                <div class="card-header justify-content-start">
                    <h4 class="card-title d-flex justify-content-start align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-file-pdf-fill" viewBox="0 0 16 16">-->
                            <path d="M5.523 10.424c.14-.082.293-.162.459-.238a7.878 7.878 0 0 1-.45.606c-.28.337-.498.516-.635.572a.266.266 0 0 1-.035.012.282.282 0 0 1-.026-.044c-.056-.11-.054-.216.04-.36.106-.165.319-.354.647-.548zm2.455-1.647c-.119.025-.237.05-.356.078a21.035 21.035 0 0 0 .5-1.05 11.96 11.96 0 0 0 .51.858c-.217.032-.436.07-.654.114zm2.525.939a3.888 3.888 0 0 1-.435-.41c.228.005.434.022.612.054.317.057.466.147.518.209a.095.095 0 0 1 .026.064.436.436 0 0 1-.06.2.307.307 0 0 1-.094.124.107.107 0 0 1-.069.015c-.09-.003-.258-.066-.498-.256zM8.278 4.97c-.04.244-.108.524-.2.829a4.86 4.86 0 0 1-.089-.346c-.076-.353-.087-.63-.046-.822.038-.177.11-.248.196-.283a.517.517 0 0 1 .145-.04c.013.03.028.092.032.198.005.122-.007.277-.038.465z"/>
                            <path fill-rule="evenodd" d="M4 0h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm.165 11.668c.09.18.23.343.438.419.207.075.412.04.58-.03.318-.13.635-.436.926-.786.333-.401.683-.927 1.021-1.51a11.64 11.64 0 0 1 1.997-.406c.3.383.61.713.91.95.28.22.603.403.934.417a.856.856 0 0 0 .51-.138c.155-.101.27-.247.354-.416.09-.181.145-.37.138-.563a.844.844 0 0 0-.2-.518c-.226-.27-.596-.4-.96-.465a5.76 5.76 0 0 0-1.335-.05 10.954 10.954 0 0 1-.98-1.686c.25-.66.437-1.284.52-1.794.036-.218.055-.426.048-.614a1.238 1.238 0 0 0-.127-.538.7.7 0 0 0-.477-.365c-.202-.043-.41 0-.601.077-.377.15-.576.47-.651.823-.073.34-.04.736.046 1.136.088.406.238.848.43 1.295a19.707 19.707 0 0 1-1.062 2.227 7.662 7.662 0 0 0-1.482.645c-.37.22-.699.48-.897.787-.21.326-.275.714-.08 1.103z"/>
                        </svg>
                    </h4>
                    <div class="text-left ml-1">
                        <h4 class="mb-0">Vendas no Boleto</h4>
                        <small>Aqui estão os 10 últimos vendas no boleto</small>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>ID Venda</th>
                            <th>Comissão</th>
                            <th>Data Venda</th>
                            <th>Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($boletos['boletosGerados'] as $boleto): ?>
                            <tr>
                                <td class="text-purchase">
                                    <?=$boleto->transaction;?>
                                </td>
                                <td>
                                    R$ <?=number_format($boleto->cms_aff,2,',','.');?>
                                </td>
                                <td>
                                    <?=date('d/m/Y', strtotime($boleto->purchase_date));?>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a href="<?=url('mensagem/boleto/'.$boleto->transaction);?>" class="btn btn-sm btn-success">
                                            <i data-feather="message-circle"></i> Whatsapp
                                        </a>
                                        <a href="javascript:void(0)" onclick="enviaEmail('<?=url('mensagem/boleto/email/'.$boleto->transaction);?>')" class="btn btn-sm btn-danger">
                                            <i data-feather="send"></i> Enviar E-mail
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer d-flex justify-content-sm-between align-items-center p-2 pl-2 pr-2">
                    <div>
                        <span>Total de <strong><?=$boletos['paginacaoGerado']['qtdTotal'];?></strong> Registros</span>
                    </div>
                    <a href="<?=url('vendas/boleto');?>">
                        Ir para Boletos
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="row" id="basic-table">
        <div class="col-12">
            <div class="card">
                <div class="card-header justify-content-start">
                    <h4 class="card-title d-flex justify-content-start align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-credit-card-2-back-fill" viewBox="0 0 16 16">
                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5H0V4zm11.5 1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-2zM0 11v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1H0z"/>
                        </svg>
                    </h4>
                    <div class="text-left ml-1">
                        <h4 class="mb-0">Vendas no Cartao</h4>
                        <small>Aqui estão os 10 últimos vendas no Cartão</small>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>ID Venda</th>
                            <th>Comissão</th>
                            <th>Data Venda</th>
                            <th>Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($cartoes['cartoes'] as $cartao): ?>
                            <tr>
                                <td class="text-purchase">
                                    <?=$cartao->transaction;?>
                                </td>
                                <td>
                                    R$ <?=number_format($cartao->cms_aff,2,',','.');?>
                                </td>
                                <td>
                                    <?=date('d/m/Y', strtotime($cartao->purchase_date));?>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a href="<?=url('mensagem/cartao/'.$cartao->transaction);?>" class="btn btn-sm btn-success">
                                            <i data-feather="message-circle"></i> Whatsapp
                                        </a>
                                        <a href="<?=url('mensagem/cartao/email/'.$cartao->transaction);?>" class="btn btn-sm btn-danger">
                                            <i data-feather="send"></i> Enviar E-mail
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer d-flex justify-content-sm-between align-items-center p-2 pl-2 pr-2">
                    <div>
                        <span>Total de <strong><?=$cartoes['paginacao']['qtdTotal'];?></strong> Registros</span>
                    </div>
                    <a href="<?=url('vendas/cartao');?>">
                        Ir para Venda Cartões
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--<section>-->
<!--    <div class="row" id="basic-table">-->
<!--        <div class="col-12">-->
<!--            <div class="card">-->
<!--                <div class="card-header">-->
<!--                    <h4 class="card-title d-flex justify-content-center align-items-center">-->
<!--                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-file-pdf-fill" viewBox="0 0 16 16">-->
<!--                            <path d="M5.523 10.424c.14-.082.293-.162.459-.238a7.878 7.878 0 0 1-.45.606c-.28.337-.498.516-.635.572a.266.266 0 0 1-.035.012.282.282 0 0 1-.026-.044c-.056-.11-.054-.216.04-.36.106-.165.319-.354.647-.548zm2.455-1.647c-.119.025-.237.05-.356.078a21.035 21.035 0 0 0 .5-1.05 11.96 11.96 0 0 0 .51.858c-.217.032-.436.07-.654.114zm2.525.939a3.888 3.888 0 0 1-.435-.41c.228.005.434.022.612.054.317.057.466.147.518.209a.095.095 0 0 1 .026.064.436.436 0 0 1-.06.2.307.307 0 0 1-.094.124.107.107 0 0 1-.069.015c-.09-.003-.258-.066-.498-.256zM8.278 4.97c-.04.244-.108.524-.2.829a4.86 4.86 0 0 1-.089-.346c-.076-.353-.087-.63-.046-.822.038-.177.11-.248.196-.283a.517.517 0 0 1 .145-.04c.013.03.028.092.032.198.005.122-.007.277-.038.465z"/>-->
<!--                            <path fill-rule="evenodd" d="M4 0h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm.165 11.668c.09.18.23.343.438.419.207.075.412.04.58-.03.318-.13.635-.436.926-.786.333-.401.683-.927 1.021-1.51a11.64 11.64 0 0 1 1.997-.406c.3.383.61.713.91.95.28.22.603.403.934.417a.856.856 0 0 0 .51-.138c.155-.101.27-.247.354-.416.09-.181.145-.37.138-.563a.844.844 0 0 0-.2-.518c-.226-.27-.596-.4-.96-.465a5.76 5.76 0 0 0-1.335-.05 10.954 10.954 0 0 1-.98-1.686c.25-.66.437-1.284.52-1.794.036-.218.055-.426.048-.614a1.238 1.238 0 0 0-.127-.538.7.7 0 0 0-.477-.365c-.202-.043-.41 0-.601.077-.377.15-.576.47-.651.823-.073.34-.04.736.046 1.136.088.406.238.848.43 1.295a19.707 19.707 0 0 1-1.062 2.227 7.662 7.662 0 0 0-1.482.645c-.37.22-.699.48-.897.787-.21.326-.275.714-.08 1.103z"/>-->
<!--                        </svg>-->
<!--                        <span class="ml-1">Venda Boleto</span>-->
<!--                    </h4>-->
<!--                </div>-->
<!--                <div class="table-responsive">-->
<!--                    <table class="table table-striped table-bordered">-->
<!--                        <thead>-->
<!--                        <tr>-->
<!--                            <th>ID Venda</th>-->
<!--                            <th>Comissão</th>-->
<!--                            <th>Data</th>-->
<!--                            <th>Ações</th>-->
<!--                        </tr>-->
<!--                        </thead>-->
<!--                        <tbody>-->
<!--                        <tr>-->
<!--                            <td>-->
<!--                                <img src="../../../app-assets/images/icons/react.svg" class="mr-75" height="20" width="20" alt="React">-->
<!--                                <span class="font-weight-bold">React Project</span>-->
<!--                            </td>-->
<!--                            <td>Ronald Frest</td>-->
<!--                            <td><span class="badge badge-pill badge-light-success mr-1">Completed</span></td>-->
<!--                            <td><span class="badge badge-pill badge-light-success mr-1">Completed</span></td>-->
<!--                        </tr>-->
<!--                        </tbody>-->
<!--                    </table>-->
<!--                </div>-->
<!--                <div class="card-footer d-flex justify-content-center p-0">-->
<!--                    <nav aria-label="Page navigation example">-->
<!--                        <ul class="pagination mt-1">-->
<!--                            <li class="page-item prev-item"><a class="page-link" href="javascript:void(0);"></a></li>-->
<!--                            <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>-->
<!--                            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>-->
<!--                            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>-->
<!--                            <li class="page-item active" aria-current="page">-->
<!--                                <a class="page-link" href="javascript:void(0);">4</a>-->
<!--                            </li>-->
<!--                            <li class="page-item"><a class="page-link" href="javascript:void(0);">5</a></li>-->
<!--                            <li class="page-item"><a class="page-link" href="javascript:void(0);">6</a></li>-->
<!--                            <li class="page-item"><a class="page-link" href="javascript:void(0);">7</a></li>-->
<!--                            <li class="page-item next-item"><a class="page-link" href="javascript:void(0);"></a></li>-->
<!--                        </ul>-->
<!--                    </nav>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!---->
<!--<section>-->
<!--    <div class="row" id="basic-table">-->
<!--        <div class="col-12">-->
<!--            <div class="card">-->
<!--                <div class="card-header">-->
<!--                    <h4 class="card-title d-flex justify-content-center align-items-center">-->
<!--                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-credit-card-2-back-fill" viewBox="0 0 16 16">-->
<!--                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5H0V4zm11.5 1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-2zM0 11v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1H0z"/>-->
<!--                        </svg>-->
<!--                        <span class="ml-1">Venda Cartão</span>-->
<!--                    </h4>-->
<!--                </div>-->
<!--                <div class="table-responsive">-->
<!--                    <table class="table table-striped table-bordered">-->
<!--                        <thead>-->
<!--                        <tr>-->
<!--                            <th>ID Venda</th>-->
<!--                            <th>Comissão</th>-->
<!--                            <th>Data</th>-->
<!--                            <th>Ações</th>-->
<!--                        </tr>-->
<!--                        </thead>-->
<!--                        <tbody>-->
<!--                        <tr>-->
<!--                            <td>-->
<!--                                <img src="../../../app-assets/images/icons/react.svg" class="mr-75" height="20" width="20" alt="React">-->
<!--                                <span class="font-weight-bold">React Project</span>-->
<!--                            </td>-->
<!--                            <td>Ronald Frest</td>-->
<!--                            <td><span class="badge badge-pill badge-light-success mr-1">Completed</span></td>-->
<!--                            <td><span class="badge badge-pill badge-light-success mr-1">Completed</span></td>-->
<!--                        </tr>-->
<!--                        </tbody>-->
<!--                    </table>-->
<!--                </div>-->
<!--                <div class="card-footer d-flex justify-content-center p-0">-->
<!--                    <nav aria-label="Page navigation example">-->
<!--                        <ul class="pagination mt-1">-->
<!--                            <li class="page-item prev-item"><a class="page-link" href="javascript:void(0);"></a></li>-->
<!--                            <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>-->
<!--                            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>-->
<!--                            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>-->
<!--                            <li class="page-item active" aria-current="page">-->
<!--                                <a class="page-link" href="javascript:void(0);">4</a>-->
<!--                            </li>-->
<!--                            <li class="page-item"><a class="page-link" href="javascript:void(0);">5</a></li>-->
<!--                            <li class="page-item"><a class="page-link" href="javascript:void(0);">6</a></li>-->
<!--                            <li class="page-item"><a class="page-link" href="javascript:void(0);">7</a></li>-->
<!--                            <li class="page-item next-item"><a class="page-link" href="javascript:void(0);"></a></li>-->
<!--                        </ul>-->
<!--                    </nav>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->