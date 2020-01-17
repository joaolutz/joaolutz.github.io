<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="Robots" content="index,follow" />
	<meta name="author" content="Luka Cvrk (www.solucija.com)" />
	<meta name="description" content="Site pessoal de Jo&atilde;o Gabriel M&eacute;ssi Lutz, analista de sistemas, publicit&aacute;rio e m&uacute;sico." />
	<meta name="keywords" content="software, java, lutz, it" />
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="css/screen.css" media="screen" />
	<title>Jo&atilde;o Lutz - Software Developer</title>
</head>
<body>
	<div id="content">
		<p id="top">contato@joaolutz.com</p>
		<div id="logo">
			<h1><a href="index.html">jo&atilde;o.lutz</a></h1>
		</div>
		<ul id="menu">
			<li><a href="index.html">Home</a></li>
			<li><a href="projetos.html">Projetos</a></li>
			<li><a href="artigos.html">Artigos</a></li>
			<li><a href="parceiros.html">Parceiros</a></li>
			<li class="current"><a href="contato.html">Contato</a></li>
		</ul>
		<div class="line"></div>
		<div class="left">
			<h4>Enviar mensagem</h4>
            <form id="contact-form" method="post" action="contato.php">
			<?php include("email.php")?>
            <table cellspacing="10">
				<tr>
					<td>Nome:</td>
					<td><input name="nome" type="text" value="<?echo $nome;?>" /></td>
				</tr>
				<tr>
					<td>E-mail:</td>
					<td><input name="email" type="text" value="<?echo $email;?>" /></td>
				</tr>
                <tr>
					<td>Assunto:</td>
					<td><input name="assunto" type="text" value="<?echo $assunto;?>" /></td>
				</tr>
				<tr>
					<td>Mensagem:</td>
					<td><textarea name="mensagem"><?echo $mensagem;?></textarea></td>
				</tr>
				<tr>
					<td><input name="btnEnviar" type="submit" value="Enviar" style="width:100px; margin-right:15px;"/></td>
					<td><input name="btnLimpar" type="submit" value="Limpar" style="width:100px;"/></td>
				</tr>
            </table>
            </form>
			<br/>
			<br/>
		</div>
		<div class="right">
			<h4>Contato</h4>
			<p>(16) 98164-8915 (Tim) - WhatsApp<br/>Skype: johnnylutz84<br/><a href="mailto:contato@joaolutz.com">contato@joaolutz.com</a></p>
			<h4>Localiza&ccedil;&atilde;o</h4>
			<iframe width="630" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.br/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=&amp;q=Araraquara+-+S%C3%A3o+Paulo&amp;aq=0&amp;oq=araraquara&amp;sll=-22.546141,-48.635523&amp;sspn=6.177202,10.821533&amp;ie=UTF8&amp;hq=&amp;hnear=Araraquara,+S%C3%A3o+Paulo&amp;t=m&amp;z=10&amp;ll=-21.784797,-48.178554&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com.br/maps?f=q&amp;source=embed&amp;hl=pt-BR&amp;geocode=&amp;q=Araraquara+-+S%C3%A3o+Paulo&amp;aq=0&amp;oq=araraquara&amp;sll=-22.546141,-48.635523&amp;sspn=6.177202,10.821533&amp;ie=UTF8&amp;hq=&amp;hnear=Araraquara,+S%C3%A3o+Paulo&amp;t=m&amp;z=10&amp;ll=-21.784797,-48.178554" style="color:#0000FF;text-align:left">Exibir mapa ampliado</a></small>
		</div>
		<div id="footer">
			<p>Jo&atilde;o Lutz &copy; 2014 &minus; Todos os direitos reservados</p>
		</div>	
	</div>
</body>
</html>