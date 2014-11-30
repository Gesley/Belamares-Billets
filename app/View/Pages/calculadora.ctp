	<link rel="stylesheet" href="http://www.calculadoraonline.com.br/custom/css/calculadorabasica.css" type="text/css" />

	<script src="/templates/expression/js/selectnav.min.js"></script>

 <script src="http://www.calculadoraonline.com.br/media/jui/js/jquery.min.js" type="text/javascript"></script>
  <script src="http://www.calculadoraonline.com.br/media/jui/js/jquery-noconflict.js" type="text/javascript"></script>
  <script src="http://www.calculadoraonline.com.br/media/jui/js/jquery-migrate.min.js" type="text/javascript"></script>
  <script src="http://www.calculadoraonline.com.br/media/system/js/tabs-state.js" type="text/javascript"></script>
  <script src="http://www.calculadoraonline.com.br/custom/js/jquery.cookie.js" type="text/javascript"></script>
  <script src="http://www.calculadoraonline.com.br/custom/js/calculadorabasica.js" type="text/javascript"></script>
  <script src="http://www.calculadoraonline.com.br/custom/js/printelement.js" type="text/javascript"></script>
  <script src="http://www.calculadoraonline.com.br/media/system/js/mootools-core.js" type="text/javascript"></script>
  <script src="http://www.calculadoraonline.com.br/media/system/js/core.js" type="text/javascript"></script>
  <script src="http://www.calculadoraonline.com.br/media/system/js/mootools-more.js" type="text/javascript"></script>
  <script src="http://www.calculadoraonline.com.br/media/jui/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="http://www.calculadoraonline.com.br/media/com_finder/js/autocompleter.js" type="text/javascript"></script>
  <script type="text/javascript">
function keepAlive() {	var myAjax = new Request({method: "get", url: "index.php"}).send();} window.addEvent("domready", function(){ keepAlive.periodical(840000); });
jQuery(document).ready(function()
				{
					jQuery('.hasTooltip').tooltip({"html": true,"container": "body"});
				});
  </script>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script src="/templates/expression/js/selectivizr-min.js"></script>
<script src="/templates/expression/js/modernizr.js"></script>
<![endif]-->
<!--[if (lt IE 9) & (gt IE 6) & (!IEMobile)]>
<script src="/</templates/expression/js/imgSizer.js"></script>
<script>
addLoadEvent(function() { imgSizer.collate(); });
function addLoadEvent(func) { var oldonload = window.onload; if (typeof window.onload != 'function') { window.onload = func; } else { window.onload = function() { if (oldonload) { oldonload(); } func(); } } }
</script>
<![endif]-->

<script type="text/javascript">
  WebFontConfig = {
    google: { families: [ 'Open+Sans:300italic,400italic,400,300,700,700italic,800:latin' ] }
  };
  (function() {
    var wf = document.createElement('script');
    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
  })(); 
  </script>

<style>
	.corpo{
		margin: 0 auto;
	}
</style>
<div class="corpo" id="cp_calc">
	<div id="menu_visor">
		<span class="slnk" onclick="calcula()">Calcular</span> 
		<span class="slnk" onmouseover="mostramenu('#cmen1')" onmouseout="esconde_menu('#cmen1')">Opções
			<div style="position: absolute; text-align: left; display: none;" id="cmen1" onmouseout="escondemenu('#cmen1')"><div class="mod1" id="men_01">
				<span class="ilumina" onclick="escolheMenu(1)">Imprimir Resultados</span><br>
				<span class="ilumina" onmouseover="mostramenu('#cmen11')">Mudar Tema
					<div style="position: absolute; text-align: left; display: none;" id="cmen11" onmouseout="escondemenu('#cmen11')"><div class="mod1" id="men_011">
						<span class="ilumina" onclick="escolheMenu(2)">Azul</span><br>
						<span class="ilumina" onclick="escolheMenu(3)">Verde</span><br> 
						<span class="ilumina" onclick="escolheMenu(4)">Rosa</span><br> 
					</div></div>
				</span><br>				
			</div></div>
		</span> 
		<span class="slnk" style="width:60px" onmouseover="mostramenu('#cmen2')" onmouseout="esconde_menu('#cmen2')">Modo
			<div style="position: absolute; text-align: left; display: none;" id="cmen2" onmouseout="escondemenu('#cmen2')"><div class="mod1" id="men_02">
				<span class="ilumina" onclick="escolheMenu(5)">Assistido</span><br>
				<span class="ilumina" onclick="escolheMenu(6)">Convencional</span><br> 
			</div></div>
		</span> 
		<span class="slnk" onmouseover="mostramenu('#cmen3')" onmouseout="esconde_menu('#cmen3')">Memória
			<div style="position: absolute; text-align: left; display: none;" id="cmen3" onmouseout="escondemenu('#cmen3')"><div class="mod1" id="men_03">
				<span class="ilumina" onclick="escolheMenu(7)">Mostrar valor da memória</span><br>
				<span class="ilumina" onclick="escolheMenu(8)">Recuperar valor da memória</span><br> 
				<span class="ilumina" onclick="escolheMenu(9)">Guardar valor do visor</span><br> 
				<span class="ilumina" onclick="escolheMenu(10)">Limpar memória</span><br> 
			</div></div>
		</span> 
		<span class="slnk" style="width:115px" onmouseover="mostramenu('#cmen4')" onmouseout="esconde_menu('#cmen4')">Arredondamento
			<div style="position: absolute; text-align: left; display: none;" id="cmen4" onmouseout="escondemenu('#cmen4')"><div class="mod1" id="men_04">
				<span class="ilumina" onclick="escolheMenu(11)">Sem arredondamento</span><br>
				<span class="ilumina" onclick="escolheMenu(12)">1 casa decimal</span><br> 
				<span class="ilumina" onclick="escolheMenu(13)">2 casas decimais</span><br> 
				<span class="ilumina" onclick="escolheMenu(14)">3 casas decimais</span><br> 
				<span class="ilumina" onclick="escolheMenu(15)">4 casas decimais</span><br> 
				<span class="ilumina" onclick="escolheMenu(16)">5 casas decimais</span><br> 
			</div></div>
		</span> 
		<span class="slnk" onmouseover="mostramenu('#cmen5')" onmouseout="esconde_menu('#cmen5')" style="width:80px">Histórico
			<div style="position: absolute; text-align: left; display: none;" id="cmen5" onmouseout="escondemenu('#cmen5')"><div class="mod1" id="men_05">
				<span class="ilumina" onclick="escolheMenu(17)">Salvar</span><br>
				<span class="ilumina" onclick="escolheMenu(18)">Imprimir</span><br> 				
				<span class="ilumina" onclick="escolheMenu(19)">Limpar</span><br> 
			</div></div>
		</span>
		<span class="slnk" onmouseover="mostramenu('#cmen7')" onmouseout="esconde_menu('#cmen7')" style="width:60px">Limpar
			<div style="position: absolute; text-align: left; display: none;" id="cmen7" onmouseout="escondemenu('#cmen7')"><div class="mod1" id="men_07">
				<span class="ilumina" onclick="escolheMenu(20)">Visor</span><br>
				<span class="ilumina" onclick="escolheMenu(21)">Histórico</span><br>				
			</div></div>
		</span>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<span id="btn_va" style="cursor: pointer;" onmouseover="mostramenu('#cmen6')" onclick="escolheMenu(23)"><i class="icon-refresh"></i> Versão Antiga</span>
	</div>
	<div id="opt_visor">
		<span class="slnk2" style="font-size:10px" title="Calcular" onclick="calcula()">∑</span> <span class="slnk2" title="Limpar Visor" onclick="ce()">C</span> <span class="slnk2" title="Limpar histórico" onclick="hc()">HC</span> <span class="slnk2" title="Salvar histórico" onclick="hs()">HS</span> <span class="slnk2" title="Limpar memória" onclick="mc()">MC</span> <span class="slnk2" title="Recuperar valor da memória" onclick="mr()">MR</span> <span class="slnk2" title="Armazenar valor do visor na Memória" onclick="ms()">MS</span> <span class="slnk2" title="Somar memória com o valor do visor" onclick="mp()">M+</span>
	</div>
	<div id="visor">
		<div style="position:absolute;width:700px"><div id="DVAviso"></div></div>
		<input type="text" id="TIExp" onkeyup="calculaInst()" onkeypress="vcalc(event)"><br>
		<span id="c_inst" style="margin-top:10px;padding-left:10px;font-weight:normal"></span>		
	</div>
	<div id="btn_bck" class="btn_bckmeu1" title="Backspace" onclick="back___spc()"><i class="icon-chevron-left"></i></div>
	<div style="height:140px">
		<center>
			<div class="btn1" onclick="populaval('7')">7</div><div class="btn1" onclick="populaval('8')">8</div><div class="btn1" onclick="populaval('9')">9</div> <div class="btn1" title="Adição" onclick="populaval('+')">+</div><div class="btn1" title="Parêntese de abertura" onclick="populaval('(')">(</div><div class="btn1" title="Regra de três" onclick="c_r3()">R3</div><div class="btn1" style="margin-left:0px;width:107px" title="Módulo: resto de divisão" onclick="populaval(' mod ')">MOD</div>			
		</center>
		<center>
			<div class="btn1" onclick="populaval('4')">4</div><div class="btn1" onclick="populaval('5')">5</div><div class="btn1" onclick="populaval('6')">6</div> <div class="btn1" title="Subtração" onclick="populaval('-')">-</div><div class="btn1" title="Parêntese de fechamento" onclick="populaval(')')">)</div><div class="btn1" title="Porcentagem" onclick="c_porc()">%</div><div class="btn1" style="margin-left:0px;width:107px" title="Logaritimo de y na base x" onclick="c_logn()">log <sub>x</sub><sup>y</sup></div>
		</center>
		<center>
			<div class="btn1" onclick="populaval('1')">1</div><div class="btn1" onclick="populaval('2')">2</div><div class="btn1" onclick="populaval('3')">3</div> <div class="btn1" title="Multiplicação" onclick="populaval('*')">×</div><div class="btn1" title="Raiz quadrada" onclick="c_raizq()">√</div><div class="btn1" title="Raiz cúbica" onclick="c_raizc()"><sup>3</sup>√</div><div class="btn1" style="margin-left:0px;width:107px" title="Raiz enésima" onclick="c_raizn()"><sup>n</sup>√</div>
		</center>
		<center>
			<div class="btn1" onclick="populaval('0')">0</div><div class="btn1" onclick="populaval(',')">,</div><div class="btn1" onclick="calcula()">=</div> <div class="btn1" title="Divisão" onclick="populaval('/')">÷</div><div class="btn1" title="Elevado ao quadrado" onclick="c_aoq()">x<sup>2</sup></div><div class="btn1" title="Elevado ao cubo" onclick="c_aoc()">x<sup>3</sup></div><div class="btn1" style="margin-left:0px;width:107px" title="Exponencial" onclick="c_exp()">x<sup>y</sup></div>
		</center>
	</div>	
	<div id="visor_resultado">
	</div>	
</div>