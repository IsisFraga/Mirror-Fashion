<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width">
        <meta charset="utf-8">
        <title>
            Mirror Fashion
        </title>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/estilos.css">
    </head>
    <body>
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
        <main class="container destaque">
            <section class="busca">
                <h2>Busca</h2>
                <form>
                    <input type="search">
                    <button>Buscar</button>
                </form>
            </section>
            <!-- fim busca -->
            <section class="menu-departamentos">
                <h2>Departamentos</h2>
                <nav>
                    <ul>
                        <li>
                            <a href="#">Blusas e Camisas</a>
                            <ul>
                                <li><a href="#">Manga curta</a></li>
                                <li><a href="#">Manga comprida</a></li>
                                <li><a href="#">Camisa social</a></li>
                                <li><a href="#">Camisa casual</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Calças</a></li>
                        <li><a href="#">Saias</a></li>
                        <li><a href="#">Vestidos</a></li>
                        <li><a href="#">Sapatos</a></li>
                        <li><a href="#">Bolsas e Carteiras</a></li>
                        <li><a href="#">Acessórios</a></li>
                    </ul>
                </nav>
            </section>
            <!-- fim .menu-departamentos -->
            <section class="banner-destaque">
                <img src="img/destaque-home.png" alt="Promoção: Big City Night">
            </section>
            <!-- fim .banner-destaque -->
        </main>
        <!-- fim .container .destaque -->
        <article class="container paineis">
            <!-- os paineis de novidades e mais vendidos estarão aqui dentro -->
            <section class="painel novidades">
                <h2>Novidades</h2>
                <nav>
                    <ol>
                        <!-- primeiro produto -->
                        <li>
                            <a href="produto.html">
                                <figure>
                                    <img src="img/produtos/miniatura1.png" alt="miniatura1">
                                    <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                                </figure>
                            </a>
                        </li>
                        <!-- fim do primeiro produto -->
                        <!-- segundo produto -->
                         <li>
                            <a href="produto.html">
                                <figure>
                                    <img src="img/produtos/miniatura2.png" alt="miniatura2">
                                    <figcaption>T-Shirt por R$ 59,90</figcaption>
                                </figure>
                            </a>
                        </li>
                        <!-- fim do segundo produto -->
                        <!-- terceiro produto -->
                         <li>
                            <a href="produto.html">
                                <figure>
                                    <img src="img/produtos/miniatura3.png" alt="miniatura3">
                                    <figcaption>Regata por R$ 39,90</figcaption>
                                </figure>
                            </a>
                        </li>
                        <!-- fim do terceiro produto -->
                        <!-- quarto produto -->
                        <li>
                            <a href="produto.html">
                                <figure>
                                    <img src="img/produtos/miniatura4.png" alt="miniatura4">
                                    <figcaption>Casaco por R$ 139,90</figcaption>
                                </figure>
                            </a>
                        </li>
                        <!-- fim do quarto produto -->
                        <!-- quinto produto -->
                        <li>
                            <a href="produto.html">
                                <figure>
                                    <img src="img/produtos/miniatura5.png" alt="miniatura5">
                                    <figcaption>Regata básica por R$ 29,90</figcaption>
                                </figure>
                            </a>
                        </li>
                        <!-- fim do quinto produto -->
                        <!-- sexto produto -->
                        <li>
                            <a href="produto.html">
                                <figure>
                                    <img src="img/produtos/miniatura6.png" alt="miniatura6">
                                    <figcaption>Regata básica por R$ 29,90</figcaption>
                                </figure>
                            </a>
                        </li>
                        <!-- fim do sexto produto -->
                        <!-- sétimo produto -->
                        <li>
                            <a href="produto.html">
                                <figure>
                                    <img src="img/produtos/miniatura7.png" alt="miniatura7">
                                    <figcaption>blabla por R$ 19,90</figcaption>
                                </figure>
                            </a>
                        </li>
                        <!-- fim do sétimo produto -->
                        <!-- oitavo produto -->
                         <li>
                            <a href="produto.html">
                                <figure>
                                    <img src="img/produtos/miniatura8.png" alt="miniatura8">
                                    <figcaption>T-Shirt por R$ 59,90</figcaption>
                                </figure>
                            </a>
                        </li>
                        <!-- fim do oitavo produto -->
                        <!-- nono produto -->
                         <li>
                            <a href="produto.html">
                                <figure>
                                    <img src="img/produtos/miniatura9.png" alt="miniatura9">
                                    <figcaption>Regata por R$ 19,90</figcaption>
                                </figure>
                            </a>
                        </li>
                        <!-- fim do nono produto -->
                        <!-- décimo produto -->
                        <li>
                            <a href="produto.html">
                                <figure>
                                    <img src="img/produtos/miniatura10.png" alt="miniatura10">
                                    <figcaption>blabla por R$ 139,90</figcaption>
                                </figure>
                            </a>
                        </li>
                        <!-- fim do décimo produto -->
                        <!-- décimo primeiro produto -->
                        <li>
                            <a href="produto.html">
                                <figure>
                                    <img src="img/produtos/miniatura11.png" alt="miniatura11">
                                    <figcaption>Regata básica por R$ 29,90</figcaption>
                                </figure>
                            </a>
                        </li>
                        <!-- fim do décimo primeiro produto -->
                        <!-- décimo segundo produto -->
                        <li>
                            <a href="produto.html">
                                <figure>
                                    <img src="img/produtos/miniatura12.png" alt="miniatura12">
                                    <figcaption>bla bla por R$ 29,90</figcaption>
                                </figure>
                            </a>
                        </li>
                        <!-- fim do décimo segundo produto -->
                        <!-- coloque mais produtos aqui -->
                    </ol>
                </nav>
                <button type="button">Mostrar Mais</button>
            </section>
            <section class="painel mais-vendidos">
                <h2>Mais Vendidos</h2>
                <nav>
                    <ol>
                        <!-- primeiro produto -->
                        <li>
                            <a href="produto.html">
                                <figure>
                                    <img src="img/produtos/miniatura7.png" alt="miniatura7">
                                    <figcaption>Camiseta por R$ 29,90</figcaption>
                                </figure>
                            </a>
                        </li>
                        <!-- fim do primeiro produto -->
                        <!-- segundo produto -->
                         <li>
                            <a href="produto.html">
                                <figure>
                                    <img src="img/produtos/miniatura8.png" alt="miniatura8">
                                    <figcaption>Camiseta por R$ 59,90</figcaption>
                                </figure>
                            </a>
                        </li>
                        <!-- fim do segundo produto -->
                        <!-- terceiro produto -->
                         <li>
                            <a href="produto.html">
                                <figure>
                                    <img src="img/produtos/miniatura9.png" alt="miniatura9">
                                    <figcaption>Camisa xadrez por R$ 139,90</figcaption>
                                </figure>
                            </a>
                        </li>
                        <!-- fim do terceiro produto -->
                        <!-- quarto produto -->
                        <li>
                            <a href="produto.html">
                                <figure>
                                    <img src="img/produtos/miniatura10.png" alt="miniatura10">
                                    <figcaption>Camisa por R$ 119,90</figcaption>
                                </figure>
                            </a>
                        </li>
                        <!-- fim do quarto produto -->
                        <!-- quinto produto -->
                        <li>
                            <a href="produto.html">
                                <figure>
                                    <img src="img/produtos/miniatura11.png" alt="miniatura11">
                                    <figcaption>Short por R$ 59,90</figcaption>
                                </figure>
                            </a>
                        </li>
                        <!-- fim do quinto produto -->
                        <!-- sexto produto -->
                        <li>
                            <a href="produto.html">
                                <figure>
                                    <img src="img/produtos/miniatura12.png" alt="miniatura12">
                                    <figcaption>Blusa básica por R$ 79,90</figcaption>
                                </figure>
                            </a>
                        </li>
                        <!-- fim do sexto produto -->
                        <!-- sétimo produto -->
                        <li>
                            <a href="produto.html">
                                <figure>
                                    <img src="img/produtos/miniatura7.png" alt="miniatura7">
                                    <figcaption>blabla por R$ 19,90</figcaption>
                                </figure>
                            </a>
                        </li>
                        <!-- fim do sétimo produto -->
                        <!-- oitavo produto -->
                         <li>
                            <a href="produto.html">
                                <figure>
                                    <img src="img/produtos/miniatura8.png" alt="miniatura8">
                                    <figcaption>T-Shirt por R$ 59,90</figcaption>
                                </figure>
                            </a>
                        </li>
                        <!-- fim do oitavo produto -->
                        <!-- nono produto -->
                         <li>
                            <a href="produto.html">
                                <figure>
                                    <img src="img/produtos/miniatura9.png" alt="miniatura9">
                                    <figcaption>Regata por R$ 19,90</figcaption>
                                </figure>
                            </a>
                        </li>
                        <!-- fim do nono produto -->
                        <!-- décimo produto -->
                        <li>
                            <a href="produto.html">
                                <figure>
                                    <img src="img/produtos/miniatura10.png" alt="miniatura10">
                                    <figcaption>blabla por R$ 139,90</figcaption>
                                </figure>
                            </a>
                        </li>
                        <!-- fim do décimo produto -->
                        <!-- décimo primeiro produto -->
                        <li>
                            <a href="produto.html">
                                <figure>
                                    <img src="img/produtos/miniatura11.png" alt="miniatura11">
                                    <figcaption>Regata básica por R$ 29,90</figcaption>
                                </figure>
                            </a>
                        </li>
                        <!-- fim do décimo primeiro produto -->
                        <!-- décimo segundo produto -->
                        <li>
                            <a href="produto.html">
                                <figure>
                                    <img src="img/produtos/miniatura12.png" alt="miniatura12">
                                    <figcaption>bla bla por R$ 29,90</figcaption>
                                </figure>
                            </a>
                        </li>
                        <!-- fim do décimo segundo produto -->
                        <!-- coloque mais produtos aqui -->
                    </ol>
                </nav>
                <button type="button">Mostrar Mais</button>
            </section>
        </article>
        <!-- fim .container .paineis -->
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
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/banner.js"></script>
        <script type="text/javascript" src="js/home.js"></script>
      </body>
</html>

