<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Produto da Mirror Fashion</title>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/estilos.css">
        <link rel="stylesheet" href="css/produto.css">
    </head>
    <body>
        <!-- início do header -->
        <header class="container">
            <h1>
                <img src="img/logo.png" alt="Logo da Mirror Fashion">
            </h1>
            <p> Estamos no ano de <?php print date('Y');?>
            <p class="sacola">
                Nenhum item na sacola de compras
            </p>
            <nav class="menu-opcoes">
                <ul>
                    <li>
                        <a href="#">Sua conta</a>
                    </li>
                    <li>
                        <a href="#">Lista de desejos</a>
                    </li>
                    <li>
                        <a href="#">Cartão Fidelidade</a>
                    </li>
                    <li>
                        <a href="sobre.html">Sobre</a>
                    </li>
                    <li>
                        <a href="#">Ajuda</a>
                    </li>
                </ul>
            </nav>
        </header>
        <!-- fim do header -->
        <div class="container">
                <h2>Camiseta Ecko Caveira Bad to The Bone</h2>
                <p>por apenas R$48,95</p>
            <section class="produto">
            <form action="checkout.html" method="POST">
                <fieldset class="cores">
                    <legend>Escolha a cor:</legend>

                    <input type="radio" name="cor" value="verde" id="verde" checked>
                    <label for="verde">
                        <img src="img/produtos/foto2-verde.png" alt="Produto na cor verde"/>
                    </label>

                    <input type="radio" name="cor" value="rosa" id="rosa">
                    <label for="rosa">
                        <img src="img/produtos/foto2-rosa.png" alt="Produto na cor rosa"/>
                    </label>

                    <input type="radio" name="cor" value="azul" id="azul">
                    <label for="azul">
                        <img src="img/produtos/foto2-azul.png" alt="Produto na cor azul"/>
                    </label>
                </fieldset>
                <fieldset class="tamanhos">
                    <legend>Escolha o tamanho:</legend>
                    <input type="range" min="36" max="46" value="42" step="2" name="tamanho" id="tamanho">
                    <output for="tamanho" name="valortamanho">42</output>
                </fieldset>
                <button class="comprar">Comprar</button>
            </form>
            </section>
            <section class="detalhes">
                <h2>Detalhes do Produto</h2>
                <p>Camiseta confortável ideal para eventos casuais!</p>
                <p>Camiseta manga curta, gola redonda. Possui estampa de Caveira e descritivo frontal e lisa nas costas.</p>

                <table>
                    <thead>
                        <tr>
                            <th>Característica</th>
                            <th>Detalhe</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Modelo</td>
                            <td>Camiseta Ecko Caveira</td>
                        </tr>
                        <tr>
                            <td>Material</td>
                            <td>Algodao e poliester</td>
                        </tr>
                        <tr>
                            <td>Cores</td>
                            <td>Verde, Rosa e Azul</td>
                        </tr>
                        <tr>
                            <td>Lavagem</td>
                            <td>Lavar a mao</td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </div>
        <!-- início do footer -->
        <footer>
            <div class="container">
                <img src="img/logo-rodape.png" alt="Logo da Mirror Fashion">
                <ul class="social">
                    <li><a href="http://facebook.com/mirrofashion">Facebook</a></li>
                    <li><a href="http://twitter.com/mirrofashion">Twitter</a></li>
                    <li><a href="http://plus.google.com/mirrofashion">Google+</a></li>
                </ul>
            </div>
        </footer>
        <!-- fim do footer -->
        <script type="text/javascript" src="js/produto.js"></script>
    </body>
</html>