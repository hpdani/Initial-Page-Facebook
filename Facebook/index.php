<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="../Facebook/css/syle.css" >
    <title>Login Facebook</title>
    <style type="text/css">
        @font-face h2{
            font-family:"klavika-bold";
            src:url("https://dafonttop.com/wp-data/k/756/11756/file/klavika-bold.otf") format("woff"),
            url("https://dafonttop.com/wp-data/k/756/11756/file/klavika-bold.otf") format("opentype"),
            url("https://dafonttop.com/wp-data/k/756/11756/file/klavika-bold.otf") format("truetype");
        }
        span.font1{font-family:"klavika-bold";font-size:80px;text-transform:none;}
        </style>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="center">
            <div class="logo">
                <span class="font1"><h2 style="color:white;">facebook</h2></span>
            </div><!--logo-->
            <form method="POST" class="form-login">
               <div class="form-element">
               <p>E-mail ou telefone</p>
               <input type="email" />
               </div><!--form-element-->

               <div class="form-element">
               <p>Senha</p>
               <input type="password" />
               </div><!--form-element-->

               <div class="form-element">
               <input type="submit" name="acao" value="Enviar" />
               </div><!--form-element-->

            </form><!--form-login-->
        </div><!--center-->
    </header><!--header-->

    <section class="main">
        <div class="center">
            <div class="img-pessoas">
                <img src="../Facebook/img/fb.png" />

            </div><!--img-pessoas-->

            <div class="abrir-conta">
                <h3>Abra uma conta</h3>
                <h4>É rápido e fácil</h4>

                <form class="create-accont">

                    <div class="w50">
                        <input placeholder="Nome" type="text">
                    </div><!--W50-->
                    <div class="w50">
                        <input placeholder="Sobrenome" type="text">
                    </div><!--W50-->

                    <div class="w100">
                        <input placeholder="Celular ou email" type="email">
                    </div><!--W100-->
                    <div class="w100">
                        <input placeholder="Nova senha" type="password">
                    </div><!--W100-->

                    <div class="w100">
                        <h5>Data de Nascimento</h5>
                        <select name="nascimento-dia" class="nascimento">
                            <?php 
                                   for($i = 1; $i <= 31; $i++){
                            ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option><?php } ?>
                            
                        </select>
                        <select name="nascimento-mes" class="nascimento">
                            <option value="0">Janeiro</option>
                            <option value="1">Fevereiro</option>
                            <option value="2">Março</option>
                            <option value="3">Abril</option>
                            <option value="4">Maio</option>
                            <option value="5">Junho</option>
                            <option value="6">Julho</option>
                            <option value="7">Agosto</option>
                            <option value="8">Setembro</option>
                            <option value="9">Outubro</option>
                            <option value="10">Novembro</option>
                            <option value="11">Dezembro</option>
                        </select>
                        <select name="nascimento-ano" class="nascimento">
                        <?php 
                                   for($i = 1940; $i <= 2020; $i++){
                            ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option><?php } ?>
                        </select>
                        <div class="clear"></div>
                    </div><!--w100-->
                    <div class="w100">
                    <h5>Gênero</h5>
                        <div class="input-radio">
                        <input type="radio" name="sexo" value="feminino">
                        <h4>Feminino</h4>
                        </div><!--input-radio-->
                        <div class="input-radio">
                        <input type="radio" name="sexo" value="masculino">
                        <h4>Masculino</h4>
                        </div><!--input-radio-->
                        <div class="clear"></div>
                    
                    </div><!--w100-->

                    <div class="w100">
                        <input type="submit" name="acao" value="Cadastre-se">

                    </div><!--w100-->
                <div class="clear"></div>
                </form><!--create-accont-->
            </div><!--abrir-conta-->
        <div class="clear"></div>
        </div><!--center-->
    </section><!--main-->
    
    <section class="linguas">
        <div class="center">
            <a class="selected-lingua" href="">Português (Brasil)</a>
            <a href="">English (US)</a>
            <a href="">Español</a>
            <a href="">Français (France)</a>
            <a href="">Italiano</a>
            <a href="">العربية</a>
            <a href="">Deutsch</a>
            <a href="">हिन्दी</a>
            <a href="">中文(简体)</a>
            <a href="">日本語</a>
        </div><!--center-->
        <br/> <br/>

        <div style=" border:0; padding-top:10px;" class="center">
            <a href="">Cadastre-se</a>
            <a href="">Entrar</a>
            <a href="">Messenger</a>
            <a href="">Facebook Lite</a>
            <a href="">Watch</a>
            <a href="">Pessoas</a>
            <a href="">Páginas</a>
            <a href="">Categorias de Página</a>
            <a href="">Locais</a>
            <a href="">Jogos</a>
            <a href="">Locais</a>
            <a href="">Marketplace</a>
            <a href="">Facebook Pay</a>
            <a href="">Grupos</a>
            <a href="">Oculus</a>
            <a href="">Portal</a>
            <a href="">Instagram</a>
            <a href="">Local</a>
            <a href="">Campanhas de arrecadação de fundos</a>
            <a href="">Serviços</a>
            <a href="">Sobre</a>
            <a href="">Criar anúncio</a>
            <a href="">Criar Página</a>
            <a href="">Desenvolvedores</a>
            <a href="">Carreiras</a>
            <a href="">Privacidade</a>
            <a href="">Cookies</a>
            <a href="">Opções de anúncio</a>
            <a href="">Termos</a>
            <a href="">Ajuda</a>
        </div><!--center-->

    </section><!--Linguas-->
</body>
</html>