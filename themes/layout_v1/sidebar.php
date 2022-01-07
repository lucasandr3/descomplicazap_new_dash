<div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="navigation-header" style="margin-top: 10px;"><span>Seção Home</span><i data-feather="more-horizontal"></i>
                <li class="nav-item <?=($menu === 'painel') ? 'active' : '';?>" >
                    <a class="d-flex align-items-center" href="<?=url('')?>">
                        <i data-feather="layout"></i>
                        <span class="menu-title text-truncate">Painel</span>
                    </a>
                </li>

                <li class=" navigation-header"><span>Seção Produtos</span><i data-feather="more-horizontal"></i>
                </li>

                <li class=" navigation-header"><span>Seção Vendas</span><i data-feather="more-horizontal"></i>
                </li>

                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="shopping-cart"></i><span class="menu-title text-truncate">Vendas</span></a>
                    <ul class="menu-content">
                        <li class="has-sub" style=""><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Second Level">Vendas Boleto</span></a>
                            <ul class="menu-content">
                                <li class="<?=($menu === 'boletosGerados') ? 'active' : '';?>">
                                    <a class="d-flex align-items-center <?=($menu === 'boletosGerados') ? 'active' : '';?>" href="<?=url('vendas/boleto_gerados');?>"
                                       data-toggle="tooltip" data-placement="right" title="" data-original-title="Boletos Gerados">
                                        <i data-feather="circle"></i>
                                        <span class="menu-item text-truncate" data-i18n="Third Level">
                                            Boletos Gerados
                                        </span>
                                    </a>
                                </li>
                                <li class="<?=($menu === 'boletosAprovados') ? 'active' : '';?>">
                                    <a class="d-flex align-items-center <?=($menu === 'boletosAprovados') ? 'active' : '';?>" href="<?=url('vendas/boleto_aprovados');?>"
                                       data-toggle="tooltip" data-placement="right" title="" data-original-title="Boletos Aprovados">
                                        <i data-feather="circle"></i>
                                        <span class="menu-item text-truncate" data-i18n="Third Level">
                                            Boletos Aprovados
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="<?=($menu === 'cartoes') ? 'active' : '';?>">
                            <a class="d-flex align-items-center" href="<?=url('vendas/cartao');?>"
                                data-toggle="tooltip" data-placement="right" title="" data-original-title="Vendas Cartão">
                                <i data-feather="circle"></i>
                                <span class="menu-title text-truncate">Vendas Cartão</span>
                            </a>
                        </li>
<!--                        <li>-->
<!--                            <a class="d-flex align-items-center" href="--><?//=url('vendas');?><!--"-->
<!--                               data-toggle="tooltip" data-placement="right" title="" data-original-title="Vendas Cartão de Débito">-->
<!--                                <i data-feather="circle"></i>-->
<!--                                <span class="menu-title text-truncate">Vendas Cartão de Dédito</span>-->
<!--                            </a>-->
<!--                        </li>-->
                        <li class="has-sub" style=""><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Second Level">Vendas Pix</span></a>
                            <ul class="menu-content">
                                <li class="<?=($menu === 'pixAguardando') ? 'active' : '';?>">
                                    <a class="d-flex align-items-center <?=($menu === 'pixAguardando') ? 'active' : '';?>" href="<?=url('vendas/pix_aguardando');?>"
                                       data-toggle="tooltip" data-placement="right" title="" data-original-title="Aguardando Pagamento">
                                        <i data-feather="circle"></i>
                                        <span class="menu-item text-truncate" data-i18n="Third Level">
                                            Aguardando Pgto
                                        </span>
                                    </a>
                                </li>
                                <li class="<?=($menu === 'pixAprovado') ? 'active' : '';?>">
                                    <a class="d-flex align-items-center <?=($menu === 'pixAprovado') ? 'active' : '';?>" href="<?=url('vendas/pix_aprovados');?>"
                                       data-toggle="tooltip" data-placement="right" title="" data-original-title="Pagamento Aprovado">
                                        <i data-feather="circle"></i>
                                        <span class="menu-item text-truncate" data-i18n="Third Level">
                                            Pagamento Aprovado
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="<?=($menu === 'wallet') ? 'active' : '';?>">
                            <a class="d-flex align-items-center" href="<?=url('vendas/wallet');?>"
                               data-toggle="tooltip" data-placement="right" title="" data-original-title="Vendas Wallet">
                                <i data-feather="circle"></i>
                                <span class="menu-title text-truncate">Wallet</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="radio"></i><span class="menu-title text-truncate">Eventos Carrinho</span></a>
                    <ul class="menu-content">
                        <li class="<?=($menu === 'abandonados') ? 'active' : '';?>">
                            <a class="d-flex align-items-center" href="<?=url('evento/carrinhos_abandonados');?>"
                                data-toggle="tooltip" data-placement="right" title="" data-original-title="Abandono de Carrinho">
                                <i data-feather="circle"></i>
                                <span class="menu-title text-truncate">Abandono de Carrinho</span>
                            </a>
                        </li>
                        <li class=" nav-item <?=($menu === 'trocaPlano') ? 'active' : '';?>">
                            <a class="d-flex align-items-center" href="<?=url('evento/troca_plano');?>"
                                data-toggle="tooltip" data-placement="right" title="" data-original-title="Troca de Plano">
                                <i data-feather="circle"></i>
                                <span class="menu-title text-truncate">Troca de Plano</span>
                            </a>
                        </li>
                        <li class=" nav-item <?=($menu === 'cancelamentoAssinatura') ? 'active' : '';?>">
                            <a class="d-flex align-items-center" href="<?=url('evento/cancelamento_assinatura');?>"
                                data-toggle="tooltip" data-placement="right" title="" data-original-title="Cancelamento de Assinatura">
                                <i data-feather="circle"></i>
                                <span class="menu-title text-truncate">Cancelamento de Assinatura</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class=" navigation-header"><span>Seção Cadastro</span><i data-feather="more-horizontal"></i>
                </li>

                <li class=" nav-item <?=($menu === 'leads') ? 'active' : '';?>">
                    <a class="d-flex align-items-center" href="<?=url('leads');?>">
                        <i data-feather="user"></i>
                        <span class="menu-title text-truncate">Leads</span>
                    </a>
                </li>

                <li class=" navigation-header"><span>Seção Financeiro</span><i data-feather="more-horizontal"></i>
                </li>

                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-plus"></i><span class="menu-title text-truncate">Receitas</span></a>
                    <ul class="menu-content">
                        <li>
                            <a class="d-flex align-items-center" href="<?=url('receitas');?>">
                                <i data-feather="circle"></i>
                                <span class="menu-item">Ver Receitas</span>
                            </a>
                        </li>
                        <li>
                            <a class="d-flex align-items-center" href="<?=url('receitas');?>">
                                <i data-feather="circle"></i>
                                <span class="menu-item">Contas a Receber</span>
                            </a>
                        </li>
                        <li><a class="d-flex align-items-center" href=""><i data-feather="circle"></i><span class="menu-item">Receber Parcelado</span></a>
                        </li>
                    </ul>
                </li>

                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-minus"></i><span class="menu-title text-truncate">Despesas</span></a>
                    <ul class="menu-content">
                        <li>
                            <a class="d-flex align-items-center" href="<?=url('despesas');?>">
                                <i data-feather="circle"></i>
                                <span class="menu-item">Ver Despesas</span>
                            </a>
                        </li>
                        <li><a class="d-flex align-items-center" href="<?=url('despesas');?>"><i data-feather="circle"></i><span class="menu-item">Contas a Pagar</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href=""><i data-feather="circle"></i><span class="menu-item">Pagar Parcelado</span></a>
                        </li>
                    </ul>
                </li>

                <li class=" nav-item <?=($menu === 'leads') ? 'active' : '';?>">
                    <a class="d-flex align-items-center" href="<?=url('leads');?>">
                        <i data-feather="file-minus"></i>
                        <span class="menu-title text-truncate">Despesas Relacionadas</span>
                    </a>
                </li>

                <li class=" nav-item">
                    <a class="d-flex align-items-center" href="#">
                        <i data-feather="percent"></i>
                        <span class="menu-title text-truncate">Comissão</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="d-flex align-items-center" href="<?=url('');?>">
                        <i data-feather="file-text"></i>
                        <span class="menu-item">Relatório Diário</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex align-items-center" href="<?=url('');?>">
                        <i data-feather="file-text"></i>
                        <span class="menu-item">Relatório Mensal</span>
                    </a>
                </li>

                <li class=" navigation-header"><span>Seção Histórico</span><i data-feather="more-horizontal"></i>
                </li>

                <li class="nav-item <?=($menu === 'notificacao') ? 'active' : '';?>">
                    <a class="d-flex align-items-center" href="<?=url('notificacao');?>">
                        <i data-feather="send"></i>
                        <span class="menu-item">Envio de Mensagens</span>
                    </a>
                </li>

                <li class="nav-item <?=($menu === 'conta') ? 'active' : '';?>">
                    <a class="d-flex align-items-center" href="<?=url('conta');?>">
                        <i data-feather="settings"></i>
                        <span class="menu-item">Minha Conta</span>
                    </a>
                </li>

                <li class=" nav-item"><a class="d-flex align-items-center" href="<?=url('sair')?>"><i data-feather="log-out"></i><span class="menu-title text-truncate">Sair do sistema</span></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->