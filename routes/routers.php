<?php
//use Support\Route;
//
//Route::get('login','LoginController@index');
//Route::post('login/entrar','LoginController@signin');

global $routes;
$routes = array();

/*
*   Rotas do APP
*/

// rota home
$routes['/'] = '/home';

// rotas login
$routes['/login'] = '/login';
$routes['/login/entrar'] = '/login/signin';
$routes['/login/cadastro'] = '/login/signup';
$routes['/cadastro'] = '/login/cadastro';
$routes['/sair'] = '/login/logout';

// rotas configuracao
$routes['/conta'] = '/conta/dados';
$routes['/editar/conta'] = '/conta/editarDados';
$routes['/editar/dados_email'] = '/conta/editarDadosEmail';
$routes['/editar/senha'] = '/conta/editarSenha';

// rotas despesas
$routes['/despesas'] = '/expense/expenses';
$routes['/despesa/{expense}'] = '/expense/expenseById';
$routes['/despesa/installments/{expense}'] = '/expense/installments';
$routes['/nova/despesa'] = '/expense/newExpense';
$routes['apagar/despesa/{expense}'] = '/expense/deleteExpense';
$routes['editar/despesa/{expense}'] = '/expense/editExpense';

// rotas receitas
$routes['/receitas'] = '/revenue/revenues';
$routes['/receitas/{revenue}'] = '/revenue/revenueById';
$routes['/receitas/edit/{revenue}'] = '/revenue/editRevenue';
$routes['/receitas/installments/{revenue}'] = '/revenue/installments';
$routes['/receitas/new'] = '/revenue/newRevenue';
$routes['/receitas/delete/{revenue}'] = '/revenue/deleteRevenue';

// despesas relacionadas
$routes['/gastos/relacionada'] = '/spending/spendings';
$routes['/despesas/relacionada/{spending}'] = '/spending/spendingById';
$routes['/despesas/gastos/{spending}'] = '/spending/expenses';
$routes['/nova/despesa_relacionada'] = '/spending/newSpending';
$routes['/cadastrar/gasto/expense'] = '/spending/newExpenseSpending';

// rotas estoque
$routes['/estoque'] = '/estoque/saldo';
$routes['/estoque/entrada'] = '/estoque/entrada';
$routes['/estoque/saida'] = '/estoque/saida';
$routes['/estoque/saida_manual'] = '/estoque/saida_manual';
$routes['/estoque/saidas'] = '/estoque/saidas';

// rotas categorias
$routes['/categorias'] = '/categoria/ativas';
$routes['/categorias/inativas'] = '/categoria/inativas';
$routes['/categoria/{id}'] = '/categoria/one';
$routes['/nova/categoria'] = '/categoria/nova';
$routes['/nova/categoria/acao'] = '/categoria/novaAcao';
$routes['/editar/categoria'] = '/categoria/editar';
$routes['/editar/categoria/acao'] = '/categoria/editarAcao';
$routes['/status/categoria'] = '/categoria/status';

// rotas unidades
$routes['/unidades'] = '/unidade/ativas';
$routes['/unidades/inativas'] = '/unidade/inativas';
$routes['/unidade/{id}'] = '/unidade/one';
$routes['/nova/unidade'] = '/unidade/nova';
$routes['/nova/unidade/acao'] = '/unidade/novaAcao';
$routes['/editar/unidade'] = '/unidade/editar';
$routes['/editar/unidade/acao'] = '/unidade/editarAcao';
$routes['/status/unidade'] = '/unidade/status';

// rotas marcas
$routes['/marcas'] = '/marca/ativas';
$routes['/marcas/inativas'] = '/marca/inativas';
$routes['/marca/{id}'] = '/marca/one';
$routes['/nova/marca'] = '/marca/nova';
$routes['/nova/marca/acao'] = '/marca/novaAcao';
$routes['/editar/marca'] = '/marca/editar';
$routes['/editar/marca/acao'] = '/marca/editarAcao';
$routes['/status/marca'] = '/marca/status';

// rotas clientes
$routes['/leads'] = '/cliente/ativos';
$routes['/clientes/inativos'] = '/cliente/inativos';
$routes['/cliente/{id}'] = '/cliente/one';
$routes['/novo/cliente'] = '/cliente/novo';
$routes['/novo/cliente/acao'] = '/cliente/novoAcao';
$routes['/editar/cliente'] = '/cliente/editar';
$routes['/editar/cliente/acao'] = '/cliente/editar/editarAcao';
$routes['/status/cliente'] = '/cliente/status';

// rotas parceiros
$routes['/parceiros'] = '/parceiro/ativos';
$routes['/parceiro/{id}'] = '/parceiro/one';
$routes['/novo/parceiro'] = '/parceiro/novo';
$routes['/novo/parceiro/acao'] = '/parceiro/novoAcao';
$routes['/editar/parceiro'] = '/parceiro/editar';
$routes['/editar/parceiro/acao'] = '/parceiro/editar/editarAcao';
$routes['/parceiro/comissao'] = '/parceiro/comissao';
$routes['/excluir/parceiro'] = '/parceiro/deletar';

// rotas usuarios
$routes['/usuarios'] = '/usuario/ativos';
$routes['/usuarios/inativos'] = '/usuario/inativos';
$routes['/usuario/{id}'] = '/usuario/one';
$routes['/novo/usuario'] = '/usuario/novo';
$routes['/novo/usuario/acao'] = '/usuario/novoAcao';
$routes['/editar/usuario'] = '/usuario/editar';
$routes['/editar/usuario/acao'] = '/usuario/editar/editarAcao';
$routes['/status/usuario'] = '/usuario/status';

// rotas taxas
$routes['/taxas'] = '/taxa/ativas';
$routes['/taxa/{id}'] = '/taxa/one';
$routes['/nova/taxa'] = '/taxa/nova';
$routes['/nova/taxa/acao'] = '/taxa/novaAcao';
$routes['/editar/taxa'] = '/taxa/editar';
$routes['/editar/taxa/acao'] = '/taxa/editar/editarAcao';
$routes['/apagar/taxa'] = '/taxa/deletar';

// rotas produtos
$routes['/produtos'] = '/produto/ativos';
$routes['/produtos/inativos'] = '/produto/inativos';
$routes['/produtos/vencidos'] = '/produto/vencidos';
$routes['/produtos/validade'] = '/produto/validade';
$routes['/produto/{id}'] = '/produto/one';
$routes['/novo/produto'] = '/produto/novo';
$routes['/novo/produto/acao'] = '/produto/novoAcao';
$routes['/editar/produto'] = '/produto/editar';
$routes['/editar/produto/acao'] = '/produto/editar/editarAcao';
$routes['/status/produto'] = '/produto/status';

// rotas ajax
$routes['/ajax/produtos'] = '/ajax/busca_prods';
$routes['/ajax/taxas'] = '/ajax/taxas';
$routes['/ajax/taxa/{id}'] = '/ajax/taxas_op';
$routes['/ajax/relatorio/dia'] = '/ajax/relDia';
$routes['/ajax/relatorio/caixa_dia'] = '/ajax/caixaRelDia';
$routes['/ajax'] = '/taxa/editar/editarAcao';
$routes['/ajax'] = '/taxa/deletar';
$routes['/ajax/abrir_caixa'] = '/ajax/open_day';
$routes['/ajax/abandonados'] = '/ajax/abandonados';

// rotas ponto de venda
$routes['/pdv'] = '/pontoVenda';

// rotas venda
$routes['/vendas'] = '/vendas';
$routes['/vendas/boleto_gerados'] = '/boleto/boletosGerados';
$routes['/vendas/boleto_aprovados'] = '/boleto/boletosAprovados';
$routes['/vendas/cartao'] = '/cartao/cartao';
$routes['/vendas/pix'] = '/pix/pix';
$routes['/vendas/pix_aguardando'] = '/pix/pixAguardando';
$routes['/vendas/pix_aprovados'] = '/pix/pixAprovados';
$routes['/vendas/wallet'] = '/wallet/wallets';
$routes['/excluir/venda/{id}'] = '/vendas/excluir/:id';
$routes['/nova/venda'] = '/vendas/nova';
$routes['/relatorio/venda/diario'] = '/relatorioVenda/diario';

// eventos
$routes['/evento/carrinhos_abandonados'] = '/abandonado/abandonado';
$routes['/evento/troca_plano'] = '/plano/planos';
$routes['/evento/cancelamento_assinatura'] = '/cancelamento/assinatura';

// exporte
$routes['/exportar/carrinhos_abandonados/txt'] = '/abandonado/exportDataTxt';
$routes['/exportar/carrinhos_abandonados/csv'] = '/abandonado/exportDataCsv';

// impressao
$routes['/imprimir/venda/diario/{filtro}/{who}'] = '/impressao/vendaDiario/:filtro/:who';
$routes['/nova/venda'] = '/vendas/nova';
$routes['/relatorio/venda/diario'] = '/relatorioVenda/diario';
$routes['/relatorio/venda/mensal'] = '/relatorioVenda/mensal';

// messages
$routes['/mensagem/boleto/{sale}'] = '/message/messageBoleto/:sale';
$routes['/mensagem/boleto/email/{sale}'] = '/message/messageBoletoEmail/:sale';
$routes['/mensagem/cartao/{sale}'] = '/message/messageCartao/:sale';
$routes['/mensagem/cartao/email/{sale}'] = '/message/messageCartaoEmail/:sale';
$routes['/mensagem/abandono/{sale}'] = '/message/messageAbandono/:sale';
$routes['/notificacao'] = '/message/notificacao';

// webhook
$routes['/webhook/vendas/{uuid}'] = '/webhook/vendas/:uuid';
$routes['/webhook/carrinho_abandonado/{uuid}'] = '/webhook/carrinhoAbandonado/:uuid';
$routes['/webhook/troca_plano/{uuid}'] = '/webhook/trocaPlano/:uuid';
$routes['/webhook/cancelamento_assinatura/{uuid}'] = '/webhook/cancelamentoAssinatura/:uuid';
/*
*  Fim das rotas do app
*/


