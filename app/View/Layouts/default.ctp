<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version());

$user = $this->Session->read('Auth');

?>

<html lang="br">
<head>
	<meta charset="utf-8">
	<meta name="keywords" content="HTML5 Template" />
	<meta name="description" content="Flatize - Shop HTML5 Responsive Template">
	<meta name="author" content="pixelgeeklab.com">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>BelaMares Construtora e Incorporadora</title>

	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Rochester' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>

	<!-- Bootstrap -->
	<link href="<?php echo $this->webroot ?>bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Libs CSS -->
	<link href="<?php echo $this->webroot ?>css/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo $this->webroot ?>vendor/owl-carousel/owl.carousel.css" media="screen">
	<link rel="stylesheet" href="<?php echo $this->webroot ?>vendor/owl-carousel/owl.theme.css" media="screen">
	<link rel="stylesheet" href="<?php echo $this->webroot ?>vendor/flexslider/flexslider.css" media="screen">
	<link rel="stylesheet" href="<?php echo $this->webroot ?>vendor/chosen/chosen.css" media="screen">

	<!-- Theme -->
	<link href="<?php echo $this->webroot ?>css/theme-animate.css" rel="stylesheet">
	<link href="<?php echo $this->webroot ?>css/theme-elements.css" rel="stylesheet">
	<link href="<?php echo $this->webroot ?>css/theme-blog.css" rel="stylesheet">
	<link href="<?php echo $this->webroot ?>css/theme-map.css" rel="stylesheet">
	<link href="<?php echo $this->webroot ?>css/theme.css" rel="stylesheet">
	<link href="<?php echo $this->webroot ?>css/jquery.autocomplete.css" rel="stylesheet">

	<!-- Style Switcher-->
	<link rel="stylesheet" href="<?php echo $this->webroot ?>style-switcher/css/style-switcher.css">
	<link href="<?php echo $this->webroot ?>css/colors/red/style.html" rel="stylesheet" id="layoutstyle">

	<!-- Theme Responsive-->
	<link href="<?php echo $this->webroot ?>css/theme-responsive.css" rel="stylesheet">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div id="page">
		<header>
			<div id="top">
				<div class="container">
					<p class="pull-left text-note hidden-xs"><i class="fa fa-phone"></i> Precisa de Ajuda? (61)3625-1616</p>
					<ul class="nav nav-pills nav-top navbar-right">
						<li class="login"><a href="javascript:void(0);"><i class="fa fa-user"></i></a></li>
						<li><a href="#" title="" data-placement="bottom" data-toggle="tooltip" data-original-title="Email"><i class="fa fa-envelope-o"></i></a></li>
						<li><a href="#" title="" data-placement="bottom" data-toggle="tooltip" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" title="" data-placement="bottom" data-toggle="tooltip" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" title="" data-placement="bottom" data-toggle="tooltip" data-original-title="Google+"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
			<nav class="navbar navbar-default pgl-navbar-main" role="navigation">
				<div class="container">

					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
						<a class="logo" href="index-2.html"><img src="<?php echo $this->webroot ?>images/vendors/logo2.png" alt="Flatize"></a> </div>
					
					<div class="navbar-collapse collapse width">
						<ul class="nav navbar-nav pull-right">
							
							<li class="dropdown"><a href="<?php echo $this->webroot ?>pages" class="dropdown-toggle" data-toggle="dropdown">Home</a>
								<ul class="dropdown-menu">
									<li><a href="<?php echo $this->webroot ?>pages/strato">Strato</a></li>
									<li><a href="<?php echo $this->webroot ?>users/login">Administração</a></li>
								</ul>
							</li>
							<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Institucional</a>
								<ul class="dropdown-menu">
									<li><a href="<?php echo $this->webroot ?>pages/quemsomos">Quem Somos</a></li>
									<li><a href="<?php echo $this->webroot ?>pages/servicos">Serviços</a></li>
									<li><a href="<?php echo $this->webroot ?>pages/ideologia">Ideologia</a></li>
									<li><a href="<?php echo $this->webroot ?>pages/diferencial">Diferencial</a></li>
									<li><a href="<?php echo $this->webroot ?>pages/seguranca">Invista com Segurança</a></li>
								</ul>
							</li>
							<?php if ( isset( $user['User']) && $user['User']['role'] == 'admin'): ?>
							<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuários</a>
								<ul class="dropdown-menu">
									<li><a href="<?php echo $this->webroot ?>users/add">Adicionar</a></li>
									<li><a href="<?php echo $this->webroot ?>users/index">Listar</a></li>
								</ul>
							</li>								
							<?php endif; ?>
							<?php if ( isset( $user['User'])): ?>
							<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Boletos</a>
								<ul class="dropdown-menu">
									<li><a href="<?php echo $this->webroot ?>billets/add">Adicionar</a></li>
								</ul>
							</li>								
							<?php endif; ?>							
							<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Clientes</a>
								<ul class="dropdown-menu">
								<?php if ( isset( $user['User'])): ?>
									<li><a href="<?php echo $this->webroot ?>clients/add">Adicionar</a></li>
								<?php endif; ?>
									<li><a href="<?php echo $this->webroot ?>billets/find">Boletos</a></li>
									<li><a href="<?php echo $this->webroot ?>pages/comofinanciar">Como Financiar</a></li>
									<li><a href="<?php echo $this->webroot ?>pages/fgts">Como Usar o FGTS</a></li>
									<li><a href="<?php echo $this->webroot ?>pages/minhacasa">Minha Casa Minha Vida</a></li>
									<li><a href="<?php echo $this->webroot ?>pages/construcard">ConstruCard</a></li>
								</ul>
							</li>
							<li><a target="_blank" href="http://www8.caixa.gov.br/siopiinternet/simulaOperacaoInternet.do?method=inicializarCasoUso">Faça uma simulação</a></li>
							<li><a href="#">Contato</a></li>
							<?php if( isset($user['User'])): ?>
								<li><a href="<?php echo $this->webroot ?>users/logout">Sair</a></li>
							<?php endif;?>
						</ul>
					</div><!--/.nav-collapse --> 
				</div><!--/.container-fluid --> 
			</nav>
		</header>
		
		<!-- Begin Main -->
		<div role="main" class="main pgl-bg-grey">
			
			<div class="text-center">
				<?php echo $this->Session->flash(); ?>
			</div>
			<?php echo $this->fetch('content'); ?>
			
		</div>
		<!-- End Main -->
<br/>
		<!-- Begin footer -->
		<footer class="pgl-footer">
			<div class="container">
				<div class="pgl-copyrights text-center">
					<p>Copyright © 2014 <a href="<?php echo $this->webroot ?>pages/contato">BelaMares</a> Construtora. Desenvolvido por <a href="">Techi9</a></b></p>
				</div>
			</div>
		</footer>
		<!-- End footer -->
			
	</div>
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="<?php echo $this->webroot ?>vendor/jquery.min.js"></script> 
	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="<?php echo $this->webroot ?>bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo $this->webroot ?>vendor/owl-carousel/owl.carousel.js"></script>
	<script src="<?php echo $this->webroot ?>vendor/flexslider/jquery.flexslider-min.js"></script>
	<script src="<?php echo $this->webroot ?>vendor/chosen/chosen.jquery.min.js"></script>
	<!-- <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?v=3&amp;sensor=true"></script>
	<script src="<?php echo $this->webroot ?>vendor/gmap/gmap3.min.js"></script>
	<script src="<?php echo $this->webroot ?>vendor/gmap/gmap3.infobox.min.js"></script>
	<script src="<?php echo $this->webroot ?>vendor/gmap/gmap.js"></script>
	-->
	<!-- Theme Initializer -->
	<script src="<?php echo $this->webroot ?>js/theme.plugins.js"></script>
	<script src="<?php echo $this->webroot ?>js/theme.js"></script>
	<script src="<?php echo $this->webroot ?>js/jquery.autocomplete.js"></script> 
	<script src="<?php echo $this->webroot ?>js/jquery.autocomplete.min.js"></script> 
	<!-- Style Switcher -->
	<script type="text/javascript" src="<?php echo $this->webroot ?>style-switcher/js/switcher.js"></script>
	
	<script type="text/Javascript">
		$(document).ready(function(){  
			$("#BilletArchivename").autocomplete("<?php echo $this->webroot ?>clients/find.json", {
				minChars: 2,
				autoFill: true,
				 showResult: function(data) {
				 	data = $.parseJSON(data);			 	
				 	return (data.clients.nome);
				},
				onItemSelect: function(data) {
					data2 = $.parseJSON(data.value);
					$("#BilletArchivename").val(data2.clients.nome);
					$("#BilletClientcod").val(data2.clients.id);
				},
				selectOnly: true
			});


			$("#clientcpf").keydown(function (e) {
			        // Allow: backspace, delete, tab, escape, enter and .
			        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
			             // Allow: Ctrl+A
			            (e.keyCode == 65 && e.ctrlKey === true) || 
			             // Allow: home, end, left, right
			            (e.keyCode >= 35 && e.keyCode <= 39)) {
			                 // let it happen, don't do anything
			                 return;
			        }
			        // Ensure that it is a number and stop the keypress
			        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
			            e.preventDefault();
			        }
			 });			
		});

	$( "#clientPesquisar" ).click(function() {
		var cpf = $("#clientcpf").val();
		$.ajax({
			type: "POST",
			data: {cpfcode:cpf},
			url: "<?php echo $this->webroot ?>billets/find",
			success: function(data){
				obj = $.parseJSON(data);
				$("#lista").removeClass('hidden')
				$.each(obj, function( index, value ) {
					console.log(value);				
					$("#results").append("<tr><td>"+value.b.cod+"</td><td>"+value.c.name+"</td><td>"+value.b.archivename+"</td><td>"+value[0].created+"</td><td><a  target='_blank' href='<?php echo $this->webroot ?>files/"+value.b.archivename+ "'class='btn btn-primary'>Baixar</a></td></tr>");
				});				

				
		  	}
		});	
	});				
	</script>
</body>
</html>