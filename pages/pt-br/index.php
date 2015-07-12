<!--
  jQuery library
-->
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>

<!--
  jCarousel library
-->
<script type="text/javascript" src="js/jcarousel/lib/jquery.jcarousel.pack.js"></script>

<!--
  GitHub commits widget
-->
<script type="text/javascript" src="js/github-commits-widget/github.commits.widget-3.js"></script>

<!--
  Github commits widget stylesheet
-->

<link rel="stylesheet" type="text/css" href="js/github-commits-widget/style.css" />

<!--
  jCarousel core stylesheet
-->
<link rel="stylesheet" type="text/css" href="js/jcarousel/lib/jquery.jcarousel.css" />
<!--
  jCarousel skin stylesheet
-->
<link rel="stylesheet" type="text/css" href="js/jcarousel/skins/tango/skin.css" />

<script type="text/javascript" src="js/jcarousel/lib/thickbox/thickbox.js"></script>
<link rel="stylesheet" href="js/jcarousel/lib/thickbox/thickbox.css" type="text/css" media="screen" />

<script type="text/javascript">
<!--
$(document).ready(function() {
    $("#mycarousel").jcarousel({
      'visible': 1,
      'scroll': 1,
      'wrap': 'both'
    });
});
//-->
</script>

<!-- Contents -->

      <div id="whatistitle" style="margin-bottom: 10px";>
	<h1>Compartilhe, Converse, Navegue. Anonimamente. Na Internet Livre.</h1>
      </div>
      <div class="whatis">
	<p>
	  Compartilhe arquivos, interaja em fóruns, navegue e publique, anonimamente e sem medo de bloqueio ou censura! Então, conecte-se a seus amigos com mais segurança!
	  <br/>
	  <a href="whatis.html">Saiba mais!</a>
	</p>
      </div>

      <div id="screenshots_container">
	<div id="screenshot_nojs">
	     <a href="image/screenshot/browse.png"><img src="image/screenshot/browse.png"
	     alt="Bookmarks" width="383" height="309" /></a>
	     <p style="text-align: center;"><a href="screenshots.html">Mais imagens de Freenet</a></p>
	</div>
	<div id="screenshot_js" style="display: none;">
           <ul id="mycarousel" class="jcarousel-skin-tango">
             <li><a href="image/screenshot/browse.png" class="thickbox"><img src="image/screenshot/browse.png" width="383" height="311" alt="Bookmarks" /></a></li>
             <li><a href="image/screenshot/sone.png" class="thickbox"><img src="image/screenshot/sone.png" width="383" height="298" alt="Sone" /></a></li>
             <li><a href="image/screenshot/fms.png" class="thickbox"><img src="image/screenshot/fms.png" width="383" height="298" alt="FMS forum" /></a></li>
           </ul>
	</div>
      </div>


      <div id="default" class="whatis" style="clear:left; margin-top: 10px; color: red;">
      	   <p>Não fomos capazes de detectar o seu Sistema Operacional. Por favor, habilite o javascript, ou vá para a <a href="download.html">página de download</a> para instalar o Freenet.</p>
      </div>

      <div id="windows" class="sprites download">
   	<a href="jnlp/FreenetInstaller.exe">
   	   <span id="software">Freenet</span>
   	   <span id="action">Baixar</span>
   	   <span id="version">0.7.5 para Windows</span>
   	</a>
      </div>

      <div id="macos" class="sprites download">
        <a href="download.html#nojws">
   	   <span id="software">Freenet</span>
   	   <span id="action">Instalar</span>
   	   <span id="version">0.7.5 para OS X</span>
   	</a>
      </div>
	
	<div id="unix">
	     <div class="download sprites">
	     	  <a href="download.html#nojws">
	     	     <span id="software">Freenet</span>
	     	     <span id="action">Instalar</span>
	     	     <span id="version">0.7.5 para GNU/Linux & Unix</span>
	     	  </a>
	     </div>
	     <p style="clear: left;">
		Se isso não funcionar, por favor consulte as 
	     	<a href="download.html#unix">instruções de instalação</a>. Você pode querer experimentar <a href="http://freesocial.draketo.de/">este guia</a> de configuração do Freenet e de software relacionado a bate-papo etc.
	     </p>
	</div>
	
	<p style="clear:left; padding-left: 20px; font-size: 12px;"><a href="download.html">Instruções de instalação e instaladores para outros sistemas.</a></p>

    <div style="clear: both; padding-top: 20px;">
    	<div id="donate_button">
	     <h4>Faça uma doação</h4>
	     <p>Não cobramos nada de ninguém por baixar e usar Freenet, somos uma organização sem fins lucrativos que depende de suas doações para sobreviver.</p>
	     <p>Nosso saldo atual é <b>$MONEYBALANCE</b>.</p>
<!--	     <p>Nosso saldo atual de <b>$MONEYBALANCE</b> pagará este servidor e nosso único desenvolvedor pago em meio a outros <b>MONEYDAYS days</b>.</p> -->
	     <p><a href="donate.html">Doe!</a></p>
	</div>
  <div id="news">
	<h4>Últimas notícias</h4>

	<p>
	<?php 
		include("pages/en/latestnews.php");
	?>
    </p>
    <p>
	  <a href="news.html">Notícias antigas</a>
	</p>
    <p>
      Notas de lançamento com mais detalhes, destinadas aos desenvolvedores são postadas na <a href="https://emu.freenetproject.org/pipermail/devl/">devl mailing list</a>.
    </p>
      </div>


    </div>

    <div id="commits" style="clear: both;">
        <h4>Última atividade desenvolvida</h4>
        <div id="latest-commits"></div>
    </div>
    <script type="text/javascript">
        $(function() {
            $('#latest-commits').githubInfoWidget(
                { users: ['freenet', 'freenet'],
                  repos: ['fred', 'plugin-WebOfTrust'],
                  branches: ['next', 'next'],
                  last: 5, limitMessageTo: 50 });
        });
    </script>

      <script type="text/javascript">
  			 hideDiv("windows");
			 hideDiv("macos");
			 hideDiv("unix");
			 hideDiv("screenshot_nojs");
			 showDiv("screenshot_js");
			 // Try to detect if Sun Java 1.6.0 or higher is installed
			 var Java = PluginDetect.isMinVersion('Java', '1,6,0');
			 
			 // Os detection
			 var OSName="";
			 if (navigator.appVersion.indexOf("Win")!=-1)
			    OSName="windows";
			 else if (navigator.appVersion.indexOf("Mac")!=-1)
			      OSName="macos";
			 else if (navigator.appVersion.indexOf("X11")!=-1)
			      OSName="unix";
			 else if (navigator.appVersion.indexOf("Linux")!=-1)
			      OSName="unix";
			 
  			 if(OSName == "windows") {
				showDiv("windows");
				hideDiv("default");
  		 	 } else if (OSName != "") {
			       	showDiv(OSName);
				hideDiv("default");
			 } else {
			   	showDiv("windows");
				showDiv("macos");
				showDiv("unix");
				showDiv("default");
			 }
      </script>
