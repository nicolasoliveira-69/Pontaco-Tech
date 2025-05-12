<html>

<head>
    <meta charset=utf-8" />
    <title> Pontaço Tech </title>
    <link href="../css/estilo_Contato.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div id="container">
        <div id="topo"> </div> <!--fim da div topo-->
      <div id="menu">
        <div id="link1"><a href="../html/principal.html">Início</a></div>
        <div id="link2"><a href="../html/produtos.html">Produtos</a> </div>
        <div id="link3"><a href="../html/videos.html">Vídeos</a> </div>
        <div id="link4"><a href="../html/acessorios.html">Acessorios</a> </div>
        <div id="link5"><a href="../php/contato.php">Contato</a> </div>

      </div>
        <div id="conteudo">
            <div class="formulario">
                <h2> Fale conosco: </h2>
                <form name="faleConosco" action="envia.php" method="post">
                    <label for="nome" id="nome">
                        <span>Nome: </span> <input type="text" name="nome" id="nome" />
                    </label>
                    <label for="email" id="email">
                        <span>E-mail: </span> <input type="text" name="email" id="email" />
                    </label>
                    <label for="cidade" id="cidade">
                        <span>Cidade: </span> <input type="text" name="cidade" id="cidade" />
                    </label>
                    <label for="estado" id="estado">
                        <span>Estado: </span>
                        <select name="estado" id="estado">
                            <option>RS</option>
                            <option>SC</option>
                            <option>PR</option>
                            <option>SP</option>
                            <option>RJ</option>
                        </select> </label>
                    <label for="assunto" id="assunto">
                        <span>Assunto: </span>
                        <input type="text" name="assunto" id="assunto" />
                    </label>
                    <label for="mensagem" id="mensagem">
                        <span>Mensagem: </span>
                        <textarea name="mensagem" id="mensagem"> </textarea>
                    </label>
                    <button type="submit" id="enviar">Enviar </button>
                </form>
            </div> <!--fim da div class formulario-->
            <div class="mapa"> <iframe width="320" height="320" frameborder="0" scrolling="no" marginheight="0"
                    marginwidth="0"
                    src="http://maps.google.com.br/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=&amp;q=Avenida+7+de+Setembro+800+,+Passo+Fundo+-+Rio+Grande+do+Sul&amp;aq=&amp;sll=-28.262118,-52.410381&amp;sspn=0.021281,0.038581&amp;ie=UTF8&amp;hq=&amp;hnear=Av.+Sete+de+Setembro,+800+-+Vila+Vera+Cruz,+Passo+Fundo+-+Rio+Grande+do+Sul,+99010-121&amp;t=m&amp;z=14&amp;ll=-28.248604,-52.424999&amp;output=embed"></iframe><br /><small><a
                        href="http://maps.google.com.br/maps?f=q&amp;source=embed&amp;hl=pt-BR&amp;geocode=&amp;q=Avenida+7+de+Setembro+800+,+Passo+Fundo+-+Rio+Grande+do+Sul&amp;aq=&amp;sll=-28.262118,-52.410381&amp;sspn=0.021281,0.038581&amp;ie=UTF8&amp;hq=&amp;hnear=Av.+Sete+de+Setembro,+800+-+Vila+Vera+Cruz,+Passo+Fundo+-+Rio+Grande+do+Sul,+99010-121&amp;t=m&amp;z=14&amp;ll=-28.248604,-52.424999"
                        style="color:#0000FF;text-align:left">Exibir mapa ampliado</a></small> </div>
            <!--fim da div class mapa-->
 <div class="container-redes">
    <div class="redes">
        <h2>Redes Sociais:</h2>
        <a href="https://github.com/nicolasoliveira-69" target="_blank">
            <img src="github.jpg" alt="github" height="70px" width="70px" />
        </a>
    </div>
    <div class="redes">
        <a href="https://www.instagram.com/nicolass.arthur/" target="_blank">
            <img src="instagram.jpg" alt="instagram" height="70px" width="70px" />
        </a>
    </div>
</div>

        </div> <!--fim da div conteudo-->
       
        <div id="rodape">
            <h3>Webmaster: Nicolas Arthur Monteiro Oliveira</h3>
        </div> <!--fim da div rodape-->
    </div> <!--fim da div container-->
</body>

</html>