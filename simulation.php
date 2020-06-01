<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">


<meta http-equiv="cache-control" content="max-age=0" />
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="expires" content="0" />
<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
<meta http-equiv="pragma" content="no-cache" />

    <title>DigiPrev</title>
    
    <!-- Loading Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Template CSS -->
    <link href="css/style.css?<?echo time(); ?>" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="css/pe-icon-7-stroke.css">
    <link href="css/style-magnific-popup.css" rel="stylesheet">

    <!-- Awsome Fonts -->
    <link rel="stylesheet" href="css/all.min.css">
    

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway|Cabin:700" rel="stylesheet">

    <!-- Font Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">
    
</head>

<body>

    <!--begin header -->
    <header class="header">

        <!--begin navbar-fixed-top -->
        <nav class="navbar navbar-default navbar-fixed-top">
            
            <!--begin container -->
            <div class="container">

                <!--begin navbar -->
                <nav class="navbar navbar-expand-lg">

                    <!--begin logo -->
                    <a class="navbar-brand" href="index.html">
                        <img src="images/logo-1.png" height="40" alt="DigiPrev">
                    </a>
                    <!--end logo -->

                    <!--begin navbar-toggler -->
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                    </button>
                    <!--end navbar-toggler -->

                    <!--begin navbar-collapse -->
                    <div class="navbar-collapse collapse"  >
                    
                        <!--begin navbar-nav -->
                        <ul class="navbar-nav ml-auto" >
                        
                            <li><a href="index.html#home">Home</a></li>

                            <li><a href="index.html#about">Sobre</a></li>

                            <li><a href="index.html#showcase">resgate</a></li>

                            <li><a href="index.html#testimonials">Depoimentos</a></li>

                            <li><a href="index.html#features">Recursos</a></li>

                            <li ><a href="index.html#contact">Fale Conosco</a></li>

                            <li class="discover-link"><a href="simulation.php" class="external discover-btn">Simule e contrate</a></li>
                            
                        </ul>
                        <!--end navbar-nav -->
                       
                    </div>
                    <!--end navbar-collapse -->

                </nav>
                <!--end navbar -->

            </div>
    		<!--end container -->
            
        </nav>
    	<!--end navbar-fixed-top -->
        
    </header>
    <!--end header -->

    <!--begin home section -->
 
   
  	<!--begin contact -->
    <section class="section-grey" id="" >
        
        <!--begin container-->
        <div class="container" style="margin-top: 100px;">
    
            <!--begin row-->
            <div class="row" id="contrato_operacional">
         
                <!--begin col-md-6 -->
				<div class="col-md-6">

					<h4>Simule e Contrate</h4>

	                
	                <!--begin contact form -->
	                <form id="form-1" name="form-1" class="contact" action="" method="post" enctype="multipart/form-data">
                    
                        <div class="form-check">
                        <input class="form-check-input" type="Checkbox" name="prevComplFechada" id="complFechada" value="Fechada" onclick='exibeOpcoesPrevAbertaFechada()'>
                          <label class="form-check-label" for="" >
                            Previdencia Complementar Fechada (EFPC)
                          </label>

             <div id="efpc">
                      <label class="labelPrev">Selecione uma opção abaixo</label> 
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="prevComplFechOpt" id="EFPC1" value="EFPC1">
                          <label class="form-check-label" for="">
                            EFPC 1 (Empregador)
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="prevComplFechOpt" id="EFPC2" value="EFPC2">
                          <label class="form-check-label" for="">
                            EFPC 2 (Instituidor)
                          </label>
                        </div>
                        </div>

                        </div>








                        <div class="form-check">
                          <input class="form-check-input" type="Checkbox" name="prevComplAberta" id="complAberta" value="Aberta" onclick='exibeOpcoesPrevAbertaFechada()'>
                          <label class="form-check-label" for="" >
                            Previdencia Complementar Aberta
                          </label>

                          <div id="bancos">
                          <label class="labelPrev">Selecione uma opção abaixo</label>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="prevComplAberOpt" id="abc" value="Banco Parceiro ABC">
                            <label class="form-check-label" for="">
                              Banco Parceiro ABC
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="prevComplAberOpt" id="xyz" value="Banco Parceiro XYZ">
                            <label class="form-check-label" for="">
                              Banco Parceiro XYZ
                            </label>
                          </div>
                        </div>                        
                        </div>
         
                        


                          <div class="form-group valorContribuacao">
                            <label for="">Definir valor da contribuição</label>
                            <input type="text" name="valorcontrib" class="form-control" id="valorcontrib" placeholder="Digite o valor">
                          </div>

                            <input value="Próximo" id="submit-button" onclick="nextform(1)" class="contact-submit" type="button"> 


              <a href="#" class="external discover-btn">
                <i class="fas fa-info-circle"></i> Mais opções de contrato</a>  

	                </form>
	                <!--end contact form -->
                    <form id="form-2" class="contact" style="display:none;" action="" method="post">
                    
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="corretoras" id="corretora1" value="corretora 1">
                          <label class="form-check-label" for="" >
                            Corretora Parceira 1
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="corretoras" id="corretora2" value="corretora 2">
                          <label class="form-check-label" for="" >
                          Corretora Parceira 2
                          </label>
                        </div>

                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="corretoras" id="corretora3" value="Dolar">
                          <label class="form-check-label" for="" >
                          Corretora Parceira 3
                          </label>
                        </div>

                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="corretoras" id="corretora4" value="Bitcoin">
                          <label class="form-check-label" for="" >
                          Corretora Parceira 4
                          </label>
                        </div>

                          <div class="form-group valorContribuicao">
                            <label for="">Percentual da contribuição</label>
                            <input type="text" class="form-control" name="percentual" id="valorCorretora" placeholder="Digite o valor">
                          </div>

         

                      
                      <input value="Voltar" id="submit-button2"  onclick="backform(2)" class="contact-submit" type="button"> 
             <input value="Próximo" id="submit-button" onclick="nextform(2)" class="contact-submit" type="button"> 


                    </form>        	                   
                    <form id="form-3" class="contact" style="display:none;" action="" method="post">
                    <div class="form-group">
                        <label class="labelPrev">Imposto de renda</label>
                        <select name="ir" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                            <option selected>Selecione...</option>
                            <option value="Progressivo">Progressiva</option>
                            <option value="Regressivo">Regressiva</option>
                          </select>
                        </div>
                          <div class="form-group">
                          <label class="labelPrev">Tarifa de plano</label>
                        <select name="tarifa" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                            <option selected>Selecione...</option>
                            <option value="Carregamento">Carregamento</option>
                            <option value="Administração">Administração</option>
                            <option value="Resgate">Resgate</option>
                          </select>
                          </div>

                              <input value="Voltar" id="submit-button2"  onclick="backform(3)" class="contact-submit" type="button"> 
             <input value="Próximo" id="submit-button" onclick="nextform(3)" class="contact-submit" type="button"> 
                     

                    </form>

                    <form id="form-4" class="contact" style="display:none;" action="" method="post">
                    
                  
                    <div class="form-group">
                    <label class="">Nome</label>
                    <input type="text" name="nome" class="form-control" placeholder="Seu nome">
                    </div>
                    <div class="form-group">
                    <label class="" >Sobrenome</label>
                    <input type="text" name="sobrenome" class="form-control" placeholder="Seu sobrenome">
                    </div>
                    <div class="form-group">
                    <label class="">CPF</label>
                    <input type="text" name="cpf" class="form-control" placeholder="xxx.xxx.xxx-xx">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Endereço de email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
                        <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Senha</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
                    </div>
                  
                    <div style="display: flex; justify-content: space-around;">
                    

                      
                     <input value="Voltar" id="submit-button" onclick="backform(4)" class="contact-submit" type="button"> 
                      <input value="Atualizar" id="submit-button3" onclick="update()" class="contact-submit" type="button">
                        <input value="Enviar" id="submit-button2" onclick="send()" class="contact-submit" type="button">
                    </div>
                    </form> 

                    <div style="display:none;" id="validation">

                    </div>                 

				</div>
				<!--end col-md-6 -->

                <!--begin col-md-6 -->
				<div class="col-md-6 responsive-bottom-margins" id="details">
                    
                    <h4>Detalhes</h4>

                    <h5>Previdência Complementar Fechada</h5>
                        <p>Veja quais parceiros podem oferecer planos.</p>
                    <h5>Previdência Complementar Aberta</h5>
                     <p>Esses são os parceiros que sugerimos para compor sua carteira.</p>
                     <h5>Imposto de Renda</h5>
                     <p>Lembre do prazo para escolha do Imposto de Renda. Pode voltar pra jornada se estiver com dúvida.</p>
                     <h5>Taxa de plano</h5>
                     <p>Podemos ajudar se tiver dúvida.</p>


				</div>
				<!--end col-md-6 -->

            </div>
            <!--end row-->
            
      </div>
      <!--end container-->
            
    </section>
    <!--end contact-->
    
      <!--begin footer -->
      <div class="footer">
            
            <!--begin container -->
            <div class="container-fluid px-0">
            
                <!--begin row -->
                <div class="row no-gutters mx-0">
                
                    <!--begin col-md-4 -->
                    <div class="col-md-4 footer-white-box text-center">
                       
                        <i class="pe-7s-map-2"></i>
    
                        <h5>Com um toque</h5>
    
                        <p>10 Oxford Street, London, UK, E1 1EC</p>
                        
                        <p><a href="mailto:contact@youremail.com">the-office@nexus.co.uk</a></p>
                        
                        <p>+44 987 654 321</p>
                        
                    </div>
                    <!--end col-md-4 -->
                    
                    <!--begin col-md-4 -->
                    <div class="col-md-4 footer-blue-box text-center">
                       
                        <i class="pe-7s-comment"></i>
    
                        <h5>Redes Sociais</h5>
    
                        <p>Veja abaixo aonde você pode nos encontrar.</p>
                                             
                        <!--begin footer_social -->
                        <ul class="footer_social">
    
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
    
                            <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
    
                            <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
    
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
    
                            <li><a href="#"><i class="fab fa-skype"></i></a></li>
    
                            <li><a href="#"><i class="fab fa-dribble"></i></a></li>
    
                        </ul>
                        <!--end footer_social -->
                        
                    </div>
                    <!--end col-md-4 -->
                    
                    <!--begin col-md-4 -->
                    <div class="col-md-4 footer-grey-box text-center">
                       
                        <i class="pe-7s-link"></i>
    
                        <h5>Links Úteis</h5>
    
                        <a href="#" class="footer-links">Nossa Politica</a>
    
                        <a href="#" class="footer-links">Fale com o Time</a>
    
                        <a href="#" class="footer-links">Termos e Condições</a>
                        
                    </div>
                    <!--end col-md-4 -->
                    
                </div>
                <!--end row -->
                
                <!--begin row -->
                <div class="row">
                
                    <!--begin col-md-12 -->
                    <div class="col-md-12 footer-bottom text-center">
                       
                        <p>Copyright © 2019 <strong>PREVNOW</strong></p>
                        
                    </div>
                    <!--end col-md-6 -->
                    
                </div>
                <!--end row -->
                
            </div>
            <!--end container -->
                    
        </div>
        <!--end footer -->


<!-- Load JS here for greater good =============================-->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.scrollTo-min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.nav.js"></script>
<script src="js/wow.js"></script>
<script src="js/plugins.js"></script>
<script src="js/custom.js?<?echo time(); ?>"></script> 
<script src="js/script.js?<?echo time(); ?>"></script> 


</body>
</html>