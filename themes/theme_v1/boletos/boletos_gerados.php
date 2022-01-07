<?php $this->layout('template', ['title' => 'Vendas Boleto', 'menu' => 'boletosGerados', 'breadcrumb' => $breadcrumb]) ?>

<section>
    <div class="row" id="basic-table">
        <div class="col-12">
            <?php $this->insert('../components/filtros'); ?>
            <div class="card">
                <div class="card-header justify-content-between">
                    <h4 class="card-title d-flex justify-content-start align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-file-pdf-fill" viewBox="0 0 16 16">-->
                            <path d="M5.523 10.424c.14-.082.293-.162.459-.238a7.878 7.878 0 0 1-.45.606c-.28.337-.498.516-.635.572a.266.266 0 0 1-.035.012.282.282 0 0 1-.026-.044c-.056-.11-.054-.216.04-.36.106-.165.319-.354.647-.548zm2.455-1.647c-.119.025-.237.05-.356.078a21.035 21.035 0 0 0 .5-1.05 11.96 11.96 0 0 0 .51.858c-.217.032-.436.07-.654.114zm2.525.939a3.888 3.888 0 0 1-.435-.41c.228.005.434.022.612.054.317.057.466.147.518.209a.095.095 0 0 1 .026.064.436.436 0 0 1-.06.2.307.307 0 0 1-.094.124.107.107 0 0 1-.069.015c-.09-.003-.258-.066-.498-.256zM8.278 4.97c-.04.244-.108.524-.2.829a4.86 4.86 0 0 1-.089-.346c-.076-.353-.087-.63-.046-.822.038-.177.11-.248.196-.283a.517.517 0 0 1 .145-.04c.013.03.028.092.032.198.005.122-.007.277-.038.465z"/>
                            <path fill-rule="evenodd" d="M4 0h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm.165 11.668c.09.18.23.343.438.419.207.075.412.04.58-.03.318-.13.635-.436.926-.786.333-.401.683-.927 1.021-1.51a11.64 11.64 0 0 1 1.997-.406c.3.383.61.713.91.95.28.22.603.403.934.417a.856.856 0 0 0 .51-.138c.155-.101.27-.247.354-.416.09-.181.145-.37.138-.563a.844.844 0 0 0-.2-.518c-.226-.27-.596-.4-.96-.465a5.76 5.76 0 0 0-1.335-.05 10.954 10.954 0 0 1-.98-1.686c.25-.66.437-1.284.52-1.794.036-.218.055-.426.048-.614a1.238 1.238 0 0 0-.127-.538.7.7 0 0 0-.477-.365c-.202-.043-.41 0-.601.077-.377.15-.576.47-.651.823-.073.34-.04.736.046 1.136.088.406.238.848.43 1.295a19.707 19.707 0 0 1-1.062 2.227 7.662 7.662 0 0 0-1.482.645c-.37.22-.699.48-.897.787-.21.326-.275.714-.08 1.103z"/>
                        </svg>
                        <div class="text-left ml-1">
                            <h4 class="mb-0">Lista Boletos Gerados</h4>
                            <small>Aqui estão todas os boletos gerados</small>
                        </div>
                    </h4>
                    <div>
                        <div class="dropdown">
                            <button class="btn btn-success" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                                <span class="mr-1">Exportar Boletos</span>
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
                            <th>Nome Completo</th>
                            <th>E-mail</th>
                            <th>Telefone</th>
                            <th>Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($boletosGerados['boletosGerados'] as $boleto): ?>
                            <tr>
                                <td class="text-purchase">
                                    <?=$boleto->transaction;?>
                                </td>
                                <td>
                                    R$ <?=number_format($boleto->full_price,2,',','.');?>
                                </td>
                                <td>
                                    <?=date('d/m/Y', strtotime($boleto->purchase_date));?>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a href="<?=url('mensagem/boleto/'.$boleto->transaction);?>" target="_blank" class="btn btn-sm btn-success">
                                            <i data-feather="message-circle"></i> Whatsapp
                                        </a>
                                        <a onclick="enviaEmail('<?=url('mensagem/boleto/email/'.$boleto->transaction);?>')" class="btn btn-sm btn-danger">
                                            <i data-feather="send"></i> Enviar E-mail
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <?php $this->insert('../components/paginacao', ['data' => $boletosGerados['paginacaoGerado']]) ?>
            </div>
        </div>
    </div>
</section>