<!doctype html>

<html lang="pt-br">
    <head>
        <title>ACME FILMES</title>
        <link rel="stylesheet" href="css/style.css">
        <script src="js/jQuery.js"></script>
        <script>
            $(document).ready(function(){
               $('.detalhes_produtos').click(function(){
                
                   $('#container').toggle(800)
                   
               });
                
            });
            
        </script>
    </head>
    <body>
        
                <!--Cabecalho-->
        <header>
            <!--CABECALHO LOGO-->
            <div id="header_logo">
                <div id="div_imagem_logo">
                    <a href="index.php">
                        <img src="imagens/logo.png" class="imagem_logo">
                    </a>    
                </div>
            </div>
            
                <!--CABECALHO MENU-->
                <nav id="header_menu">
                    <ul id="menu_lista">
                        <li class="menu_lista_itens">atores em destaque</li>
                        <li class="menu_lista_itens">sobre a locadora</li>
                        <li class="menu_lista_itens">promoções</li>
                        <li class="menu_lista_itens">nossas lojas</li>
                        <li class="menu_lista_itens">filme do mês</li>
                        <li class="menu_lista_itens">fale conosco</li>
                    </ul>
                </nav>

                <!--CABECALHO LOGIN-->
            <div id="header_login">
                <form method="post" action="">
                    <div id='header_login_caixas'>
                        <div class='login_caixas_input'>
                            Usuario: <br><input type="text" name="txt_usuario">
                        </div>
                        <div class='login_caixas_input'>
                            Senha:<br><input type="text" name="txt_senha">
                        </div>
                        <div id='login_caixas_botao'>
                            <input type="submit" name="btn_login">
                        </div>
                    </div>
                </form>    
            </div>           
        </header>
        
        <div id="container">
            <div id="modal"></div>
        </div>
        
    <div id="centralizar">
        <div id="corpo">
            <div id="espaco"></div>
            <div id="corpo_slider">
                
                <div id="slider_imagem">
                    <img class="mySlides" src="imagens/img1.png">
                    <img class="mySlides" src="imagens/img2.jpg">
                    <img class="mySlides" src="imagens/img3.jpg">
                    <img class="mySlides" src="imagens/img4.jpg">
                </div>
                
            </div>
            
            <div id="corpo_menu">
                <ul id="lista2">
                    <li class="item_lista2">Item</li>
                    <li class="item_lista2">Item</li>
                </ul>
            </div>
            
            <div id="corpo_produtos">
                <div class="produtos">
                    <div class="imagem_produto">
                        <figure class="imagem_icone">
                            <img src="imagens/icone.jpg" class="imagem_icone">
                            </figure>
                    </div>
                    <div class="texto_conteudo">
                        <table class="tabela_produtos">
                            <tr class="linha_tabela_produtos">
                                <td>Nome:</td>
                            </tr>
                            <tr class="linha_tabela_produtos">
                                <td> Descrição</td>
                            </tr>
                            <tr class="linha_tabela_produtos">
                                <td>Preço:</td>
                            </tr>
                            <tr class="linha_tabela_produtos">
                                <td> <span class = "detalhes_produtos">Detalhes:</span></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="produtos">
                    <div class="imagem_produto">
                        <figure class="imagem_icone">
                            <img src="imagens/icone.jpg" class="imagem_icone">
                        </figure>
                    </div>
                    <div class="texto_conteudo">
                        <table class="tabela_produtos">
                            <tr class="linha_tabela_produtos">
                                <td>Nome:</td>
                            </tr>
                            <tr class="linha_tabela_produtos">
                                <td> Descrição</td>
                            </tr>
                            <tr class="linha_tabela_produtos">
                                <td>Preço:</td>
                            </tr>
                            <tr class="linha_tabela_produtos">
                                <td> <span class = "detalhes_produtos">Detalhes:</span></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="produtos">
                    <div class="imagem_produto">
                        <figure  class="imagem_produto">
                            <img src="imagens/icone.jpg" class="imagem_icone">
                        </figure>
                    </div>
                    <div class="texto_conteudo">
                        <table class="tabela_produtos">
                            <tr class="linha_tabela_produtos">
                                <td>Nome:</td>
                            </tr>
                            <tr class="linha_tabela_produtos">
                                <td> Descrição</td>
                            </tr>
                            <tr class="linha_tabela_produtos">
                                <td>Preço:</td>
                            </tr>
                            <tr class="linha_tabela_produtos">
                                <td> <span class = "detalhes_produtos">Detalhes:</span></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="produtos">
                    <div class="imagem_produto">
                        <figure  class="imagem_produto">
                            <img src="imagens/icone.jpg" class="imagem_icone">
                        </figure>
                    </div>
                    <div class="texto_conteudo">
                        <table class="tabela_produtos">
                            <tr class="linha_tabela_produtos">
                                <td>Nome:</td>
                            </tr>
                            <tr class="linha_tabela_produtos">
                                <td> Descrição</td>
                            </tr>
                            <tr class="linha_tabela_produtos">
                                <td>Preço:</td>
                            </tr>
                            <tr class="linha_tabela_produtos">
                                <td> <span class = "detalhes_produtos">Detalhes:</span></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="produtos">
                    <div class="imagem_produto">
                        <figure  class="imagem_produto">
                            <img src="imagens/icone.jpg" class="imagem_icone">
                        </figure>
                    </div>
                    <div class="texto_conteudo">
                        <table class="tabela_produtos">
                            <tr class="linha_tabela_produtos">
                                <td>Nome:</td>
                            </tr>
                            <tr class="linha_tabela_produtos">
                                <td> Descrição</td>
                            </tr>
                            <tr class="linha_tabela_produtos">
                                <td>Preço:</td>
                            </tr>
                            <tr class="linha_tabela_produtos">
                                <td> <span class = "detalhes_produtos">Detalhes:</span></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="produtos">
                    <div class="imagem_produto">
                        <figure  class="imagem_produto">
                        <img src="imagens/icone.jpg" class="imagem_icone">
                        </figure>
                    </div>
                     <div class="texto_conteudo">
                         <table class="tabela_produtos">
                            <tr class="linha_tabela_produtos">
                                <td>Nome:</td>
                            </tr>
                            <tr class="linha_tabela_produtos">
                                <td> Descrição</td>
                            </tr>
                            <tr class="linha_tabela_produtos">
                                <td>Preço:</td>
                            </tr>
                            <tr class="linha_tabela_produtos">
                                <td> <span class = "detalhes_produtos">Detalhes:</span></td>
                            </tr>
                        </table>
                    </div>
                </div>
                </div>
            </div>
    
            
        <div id="redes_sociais">
            <a href="">
                <img src="imagens/facebook.png" class="imagens_redes_sociais" id="facebook">
            </a>
            
            <a href="">
                <img src="imagens/snap.png" class="imagens_redes_sociais">
            </a>
            
            <a href="">
                <img src="imagens/intagram.png" class="imagens_redes_sociais">
            </a>
            
            <a href="">
                <img src="imagens/twitter.png" class="imagens_redes_sociais">
            </a>
        </div>    
        </div>
        
        <footer id="rodape">
        </footer>
        
        
        <script src="js/script.js"></script>
    </body>
</html>

