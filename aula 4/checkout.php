<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Mirror Fashion</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/checkout.css">
</head>
    <body>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1>Ótima escolha!</h1>
                <p>Obrigado por comprar na Mirror Fashion!
                    Preencha seus dados para efetivar a compra.
                </p>
            </div>
        <div class="container">
            <div class="row">

                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h2>Sua compra</h2>
                        </div>
                        <div class="card-body">
                            <img src="img/produtos/foto2-verde.png" alt="Camiseta Ecko Caveira na cor verde" class="img-thumbnail mb-3">
                            <dl>
                                <dt>Produto</dt>
                                <dd>Camiseta Ecko Caveira</dd>

                                <dt>Cor</dt>
                                <dd>Verde</dd>

                                <dt>Tamanho</dt>
                                <dd>42</dd>

                                <dt>Preço</dt>
                                <dd id="preco">R$ 48,95</dd>
                            </dl>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="qtd">Quantidade:</label>
                                <input type="number" id="qtd" min="1" max="99" value="1" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="total">Total:</label>
                                <output for="qtd preco" id="total" class="form-control">R$ 48,95</output>
                            </div>
                        </div>
                    </div>
                </div>
                <form class="col-md-8">
                    <div class="row">
                        <div class="col-lg-6">
                            <fieldset>
                                <legend>Dados pessoais</legend>
                                <div class="form-group">
                                    <label for="nome">Nome completo</label>
                                    <input type="text" class="form-control" id="nome" name="nome" autofocus required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">@</span>
                                        </div>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="cpf">CPF</label>
                                    <input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" data-mask="999.999.999-99">
                                </div>
                                <div class="form-group custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="newsletter" value="sim" checked>
                                    <label class="custom-control-label" for="newsletter">
                                        Quero receber Newsletter da Mirror Fashion
                                    </label>
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-lg-6">
                            <button type="submit" class="btn btn-primary mb-3">
                            <span class="oi oi-thumb-up"></span>
                            <span class="btn-lg">
                            Confirmar Pedido
                            </button>
                            <fieldset>
                                <legend>Cartão de crédito</legend>
                                <div class="form-group">
                                    <label for="numero-cartao">Número - CVV</label>
                                    <input type="text" class="form-control" id="numero-cartao" name="numero-cartao" data-mask="9999 9999 9999 9999 - 999">
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="bandeira-cartao">Bandeira</label>
                                        </div>
                                    <select class="custom-select" id="bandeira-cartao">
                                        <option disabled selected>Selecione uma opção...</option>
                                        <option value="master">MasterCard</option>
                                        <option value="visa">VISA</option>
                                        <option value="amex">American Express</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="validade-cartao">Validade</label>
                                    <input type="month" class="form-control" id="validade-cartao" name="validade-cartao">
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/inputmask-plugin.js"></script>
        <script type="text/javascript" src="js/total.js"></script>
    </body>
</html>