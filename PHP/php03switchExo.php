<?php
/*

-1- Ecrire un 'switch($humeur)' qui renseignera deux variables $bgcolor et $txcolor
	$humeur="happy" => $bgcolor = "hotpink"; $txcolor = "white";
	$humeur="bof" 	=> $bgcolor = "gainsboro"; $txcolor = "grey";
	$humeur="bad" 	=> $bgcolor = "dimgrey"; $txcolor = "black";
	default 		=> $bgcolor = "White"; $txcolor = "lightgrey";

-2- Dans le paragraphe, insérer avec du php le texte "I feel $humeur today" si la variable $humeur est définie, sinon : "(-.-)Zzz…"

-3- Dans la balise <p style="">, renseigner l'attribut 'style' pour que le background du paragraphe et la couleur du texte soient $bgcolor et $txcolor 

Tip :  ($humeur)? doThisIfTrue : doThatIfFalse

*/


//-----------------------------------------
$humeur = "";// "happy", "bof", "bad", ""

switch($humeur){
	// your code here
}
//-----------------------------------------


?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>php03switchExo</title>

		<style>
			body{
				font-family:Arial;
				text-align:center;
			}
			p{
				width:500px;
				margin:40px auto;
			}
			pre{
				font-family:monospace;
				text-align:left;
				margin-top:20px;
				display:inline-block;
				margin: 30px auto;
			}
		</style>

	</head>

	<body>

		<p style=""></p>

	<pre>
.---. .-..-. .---. 
: :; :: :; : : :; :
:  _.':    : :  _.'
: :   : :: : : :   
:_;   :_;:_; :_; 03  
	</pre>
	</body>
</html>