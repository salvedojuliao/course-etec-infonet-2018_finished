<!doctype html> 
<html>
<head>
<meta charset="UTF-8">
<title>Formulário</title>
<style type= "text/css">
@charset "utf-8";
/* reset browser styles */
html, body, div, span, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp,small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, 
figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary,
time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	vertical-align: baseline;
}
article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section {
	display: block;
}

.corpo {
position: relative;
width: 1440px;
height: 192px;
margin: 0px;
}

a{
font-family: arial
font-size: 2.2em;
text-decoration: none;
color: #fff;
}


.bannerpreto{
	position:fixed;
	width: 1440px;
	height: 50px;
	background-color: black;
	z-index: 10;
}

.inicio {
    background-color: black;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
	font-family: arial;
	margin-left: 201px;
	z-index: 1000;
}

.dropdown1 {
    position: relative;
    display: inline-block;
	margin-left: 120px;
	z-index: 1000;
}

.dropdown1-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 170px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	margin-left:  201px;
	z-index: 1000;
}

.dropdown1-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
	font-family: arial;
	z-index: 1000;
}

.dropdown1-content a:hover {background-color:  #f01788}

.dropdown1:hover .dropdown1-content {
    display: block;
	z-index: 1000;
}


.dropdown1:hover .inicio {
    background-color: grey;
	z-index: 1000;
}

.temas {
    background-color: black;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
	font-family: arial;
    cursor: pointer;
	z-index: 1000;
}

.dropdown2 {
    position: relative;
    display: inline-block;
	z-index: 1000;
}

.dropdown2-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 200px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1000;
	font-family: arial;
	z-index: 1000;
}

.dropdown2-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
	z-index: 1000;
}

.dropdown2-content a:hover {background-color:  #f01788}

.dropdown2:hover .dropdown2-content {
    display: block;
	z-index: 1000;
}


.dropdown2:hover .temas {
    background-color: grey;
	z-index: 1000;
}

.historia {
    background-color: black;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
	font-family: arial;
    cursor: pointer;
	z-index: 1000;
}

.dropdown3 {
    position: relative;
    display: inline-block;
	z-index: 1000;
}

.dropdown3-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 220px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1000;
	font-family: arial;
	z-index: 1000;
}

.dropdown3-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
	z-index: 1000;
}

.dropdown3-content a:hover {background-color: #f01788}

.dropdown3:hover .dropdown3-content {
    display: block;
	z-index: 1000;
}


.dropdown3:hover .historia {
    background-color: grey;
	z-index: 1000;
}

.depoimento {
    background-color: black;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
	font-family: arial;
    cursor: pointer;
	z-index: 1000;
}

.dropdown4 {
    position: relative;
    display: inline-block;
	z-index: 1000;
}

.dropdown4-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1000;
	font-family: arial;
	z-index: 1000;
}

.dropdown4-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
	z-index: 1000;
}

.dropdown4-content a:hover {background-color:  #f01788}

.dropdown4:hover .dropdown4-content {
    display: block;
	z-index: 1000;
}


.dropdown4:hover .depoimento {
    background-color: grey;
}
.galeria {
    background-color: black;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
	font-family: arial;
    cursor: pointer;
	z-index: 1000;
}

.dropdown5 {
    position: relative;
    display: inline-block;
	z-index: 1000;
}

.dropdown5-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 220px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 4;
	font-family: arial;
	z-index: 1000;
}

.dropdown5-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
	z-index: 1000;
}

.dropdown5-content a:hover {background-color:  #f01788}

.dropdown5:hover .dropdown5-content {
    display: block;
	z-index: 1000;
}


.dropdown5:hover .galeria {
    background-color: grey;
	z-index: 1000;
}

.somos {
    background-color: black;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
	font-family: arial;
    cursor: pointer;
	z-index: 1000;
}

.dropdown6 {
    position: relative;
    display: inline-block;
	z-index: 1000;
}

.dropdown6-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 1px 8px 16px 0px rgba(0,0,0,0.2);
     z-index: 1000;
	font-family: arial;
	z-index: 1000;
}

.dropdown6-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
	z-index: 1000;
}

.dropdown6-content a:hover {background-color:  #f01788}

.dropdown6:hover .dropdown6-content {
    display: block;
	z-index: 1000;
}


.dropdown6:hover .somos {
    background-color: grey;
	z-index: 1000;
}
.fundodologo{
	position: absolute;
	top: 50px;
	background-color: #35A3AD;
	width: 1440px;
	height: 150px;
	z-index: 2;
}






#logo{
	position: absolute;
	top: 10px;
	left: 640px;
	z-index: 3;
}

#predio{
	position: absolute;
	right: 0px;
	width: 1440px;
	oppacity: 80%;
	height: 120px;
	z-index: 2;
}



#banner2{
	top: 200px;
	position: absolute;
	width: 1440px;
	height: 72px;
	background: #F01788;
	z-index: 4;
}

#titulo{
	font: bold 25px "Trebuchet MS", Arial, Helvetica, sans-serif;
	color: white;
	margin-left: 612px;;
	padding-top: 20px;
}


#barra1{
	position: relative;
	width: 99px;
	height: 8780px;
	background: #000;
	top: -300px;
	z-index: 1;
}

#barra2{
	position: absolute;
	width: 110px;
	height: 8665px;
	background: #000;
	margin-left: 1319px;
	left: 11px;
	top: 30px;
	z-index: 1;
}

#geral{
	position: relative;
	width: 1440px;
	height: 8700px;
	background: #ccc;
	z-index: 2;
}

#rodape
{
	position: absolute;
	margin-top: -318px;
	z-index: 10;
	width: 1440px;

}



h2{
	font-size: 30px;
}


.titulo{
	top: 0px;
	position: absolute;
	width: 1440px;
	height: 72px;
	z-index: 4;

}

.titulo h1 {
	margin-top: 300px;
	font-size: 35px;
	font-family: arial;
	z-index: 10;
}

form {
	position: absolute;
	font-family: arial;
	font-size: 20px;
	color: #000;
	background-color: pink;
	width: 800px;
	height: 650px;
	margin-top: -600px;
	margin-right: auto;
	margin-left: 355px;;
	padding-top: 30px;
	padding-right: 1px;
	padding-bottom: 1px;
	padding-left: 1px;
	border: medium solid #000;
	border-radius: 20px;
	z-index: 8;
}

  fieldset{
	  border-radius: 20px;
	  font-family: arial;
	  border-radius: 20px;
	  margin-left: 20px;
	  z-index: 10;
	  font-family: arial;
 }
	 
input[type=text]{   
    border-radius:4px;
    -moz-border-radius:4px;
    -webkit-border-radius:4px;
    box-shadow: 1px 1px 2px #333333;    
    -moz-box-shadow: 1px 1px 2px #333333;
    -webkit-box-shadow: 1px 1px 2px #333333;
    background: #cccccc; 
    border:1px solid #000000;
	z-index: 10;
	font-family: arial;
}
 
textarea{
    border: 1px solid #000000;
    background:#cccccc;
    height:300px;
	width: 755px;
    border-radius:4px;
    -moz-border-radius:4px;
    -webkit-border-radius:4px;
    box-shadow: 1px 1px 2px #333333;    
    -moz-box-shadow: 1px 1px 2px #333333;
    -webkit-box-shadow: 1px 1px 2px #333333;
	z-index: 20;
	font-size: 20px;
	font-family: arial;
}
 
input[type=text]:hover, textarea:hover{ 
         background: #ffffff; border:1px solid #990000;
		 z-index: 10;
		 font-family: arial;
}
 
input[type=submit]{
        background:#000;
        color:#ffffff;
		font-family: arial;
		font-size: 18px;
		z-index: 11;
		position: relative;
}	

input[type=reset]{
        background:#000;
        color:#ffffff;
		font-family: arial;
		font-size: 18px;
		z-index: 11;
		position: absolute;
}  


form p{
	font-family: arial;
	font-size: 18px;
	z-index: 10;
}

#linha{
	position: absolute;
	top: 490px;
	left: -60px;
	z-index: 3;
}

.titulo {
	position: absolute;
    color: black;
    padding: 16px;
    font-size: 20px;
	font-family: arial;
	z-index: 100;
	top: 170px;
	left: 320px;
	z-index: 9;
}

.titulo h1{
	position: absolute;
    background-color: white;
    color: black;
    padding: 16px;
    font-size: 20px;
	font-family: arial;
	z-index: 1000;
	border: solid 1px #000;
	border-radius: 20px;
	z-index: 9;
}



.codigo{
	width: 1010px;
	position: absolute;
    color: black;
    padding: 50px;
    font-size: 20px;
	font-family: arial;
	z-index: 100;
	top: 330px;
	left: 170px;
	z-index: 9;
	background: #fff;
	border-radius: 2%;
}

.email{
	margin-top: 10px;
}

.historia3{
	width: 100px;
	height: 1440px;
}

.voltar{
	position: absolute;
	font-family: arial;
	margin-top: -50px;
	margin-left: 880px;
	color: #fff;
	background: #000;
	border-radius: 5%;
	width: 100px;
	height: 30px;
	padding: 40px;
}

.voltar h1{
	position: absolute;
	font-size: 30px;
	left: 50px;
}
</style>
</head>
<body>
<div id="geral">
	
<div class="corpo">
	<div class="bannerpreto">
			<div class="dropdown1">
				<a href="index.html"><button class="inicio">Início</button></a>
				<div class="dropdown1-content">
				</div>
			</div>
			<div class="dropdown2">
				<button class="temas">Temas</button>
				<div class="dropdown2-content">
					<a href="Violencia.html">O que é Violência ?</a>
					<a href="conceitos.html">Violência Contra LGBT</a>
					<a href="Feminicidio.html">Feminicídio</a>
				</div>
			</div>
			<div class="dropdown3">
					<button class="historia">Conte Sua História</button>
					<div class="dropdown3-content">
					<a href="FormularioExemplo.html">Escreva</a>	
					<a href="como denunciar.html">Como denunciar?</a>
				</div>
			</div>
			<div class="dropdown4">
				<a href="Depoimentos.html"><button class="depoimento">Depoimentos</button></a>
				<div class="dropdown4-content">
				</div>
			</div>
			<div class="dropdown5">
				<a href="galeria.html"><button class="galeria">Galeria De Imagens</button></a>
				<div class="dropdown5-content">
				</div>
			</div>
			<div class="dropdown6">
				<button class="somos">Quem Somos</button>
				<div class="dropdown6-content">
				<a href="Quem Somos.html">Sobre</a>
			</div>
	</div>
	</div>
</div>

<div class="fundodologo">
	<img id="logo" src="../Imagens/Logo.png" alt="Logo do site">
	<img id="prediooficial" src="../Imagens/prediooficial.png" alt="predio">
</div>

<div id="banner2">
	<h1 id="titulo"> Conte Sua História </h1>
</div>


	<div id="barra1"></div>
	<div id="barra2"></div>
	<img id="rodape" src="../Imagens/Rodape.png" alt="Rodapé com as redes sociais">


<div class="codigo">
<div class="voltar">
	<a href="FormularioExemplo.html"><h1> Voltar </h1></a>
</div>
<?php
$Nome = $_POST['usr_Nome'];
$Email = $_POST['usr_Email'];
$Cidade = $_POST['usr_Cidade'];
$Estado = $_POST['usr_Estado'];
$sexo = $_POST['sexo'];
$genero = $_POST['genero'];
$historia = $_POST['usr_Historia'];



// Validação dos dados do formulário
// Verificação de campos vazios 

$erro = Array(); // array com os erros encontrados
echo '<p align="center" ATENÇÃO </p> ';
foreach($_POST as $chv => $vlr)
{
		if ($vlr == "" and substr($chv,0,3) == "usr")
		{
				echo  '';
				$erro[] = "O Campo " . substr($chv, 4). " Não foi informado. <br />";
				echo  '';
				echo  '';
		}
		if($chv == "usr_Email")
			if(!strstr($Email, '@'))
				$erro[] = '<p class="email"> E-mail inválido </p>';	
				
}			

if(sizeof($erro)==0)
	{	
				echo  '<p align="left"></p>';
				echo '<h1>Dados Enviados Com Sucesso!</h1>';
				echo "<br>";
				echo "<br>";
				echo "<br>";
				echo " <strong> Nome:  </strong>" . "" . $Nome;
				echo "<br>";
				echo "<br>";
				echo " <strong> Email:  </strong>" . "" . $Email;
				echo "<br>";
				echo "<br>";
				echo " <strong> Idade:  </strong>" . "" . $Cidade;
				echo "<br>";
				echo "<br>";
				echo " <strong> Esttado:  </strong>" . "" . $Estado;
				echo "<br>";
				echo "<br>";
				echo " <strong> Sexo:  </strong>" . "" . $sexo;
				echo "<br>";
				echo "<br>";
				echo " <strong> Gênero:  </strong>" . "" . $genero;
				echo "<br>";
				echo "<br>";
				//echo '<strong class="historia3"> História:  </strong> ' . "" . $historia . "";
				echo '<strong> História: </strong>';
				echo "<br>";
				$str = $historia;
				echo "<br>";

				$rs = str_replace( PHP_EOL, '<br>', chunk_split( $str, 97 ) );

				echo $rs;
				
				/*// Tudo Ok, mostramos os dados 
				echo  '<p align="left"><font color="black"><b>';
				echo 'Dados informados no Cadastro:</b></font></p>';
				echo '<table border=0 cellpadding=5 cellspacing=5>';
				reset($_POST);
			
			foreach($_POST as $chv => $vlr) {
			if(substr($chv,0,3)=="usr") {
				echo "<tr><td>" . ucfirst(strtolower(substr($chv,4))) . "</td> ";
				echo "<td><b>" . $vlr . "</b></td></tr>\n";
					}
				}
				echo '<tr><td height=60 valign="bottom"><b>Dados Enviados Com Sucesso!</td></tr>';
				echo '</table>';
				*/
}



echo '<p align="left"><font color="Black"> <font-family: arial><b>';
foreach($erro as $vlr)
{
	echo  '';
	echo "$vlr<br>";
	echo  '';
}

/*echo '</br></font></p>';*/

?>



</div>


</body>
</html>

