<?php
include('../config.php');
$serv = array(basename(__FILE__)=>"");
$serv = strtr($_SERVER['REQUEST_URI'],$serv);
if(isset($_POST['graphique']) && ($_POST['graphique'] == "Diagramme en baton 3D")) { $graph = "3d-column-interactive"; }
if(isset($_POST['graphique']) && ($_POST['graphique'] == "Courbe")) { $graph = "areaspline"; }
if(isset($_POST['graphique']) && ($_POST['graphique'] == "Diagramme en baton")) { $graph = "columnsimple"; }
if(isset($_POST['graphique']) && ($_POST['graphique'] == "Ligne 1")) { $graph = "hos"; }
if(isset($_POST['graphique']) && ($_POST['graphique'] == "Ligne 2")) { $graph = "linebasic"; }
if(isset($_POST['graphique']) && ($_POST['graphique'] == "Ligne avec label")) { $graph = "linelabels"; }
if(isset($_POST['graphique']) && ($_POST['graphique'] == "Diagramme en cercle")) { $graph = "pie3d"; }
if(isset($_POST['mode']) && ($_POST['mode'] == "Par Jour")) { $mode = "day"; }
if(isset($_POST['mode']) && ($_POST['mode'] == "Par Mois")) { $mode = "month"; }
if(isset($_POST['mois']) && ($_POST['mois'] == "Janvier")) { $mois = "01"; }
if(isset($_POST['mois']) && ($_POST['mois'] == "Février")) { $mois = "02"; }
if(isset($_POST['mois']) && ($_POST['mois'] == "Mars")) { $mois = "03"; }
if(isset($_POST['mois']) && ($_POST['mois'] == "Avril")) { $mois = "04"; }
if(isset($_POST['mois']) && ($_POST['mois'] == "Mai")) { $mois = "05"; }
if(isset($_POST['mois']) && ($_POST['mois'] == "Juin")) { $mois = "06"; }
if(isset($_POST['mois']) && ($_POST['mois'] == "Juillet")) { $mois = "07"; }
if(isset($_POST['mois']) && ($_POST['mois'] == "Août")) { $mois = "08"; }
if(isset($_POST['mois']) && ($_POST['mois'] == "Septembre")) { $mois = "09"; }
if(isset($_POST['mois']) && ($_POST['mois'] == "Octobre")) { $mois = "10"; }
if(isset($_POST['mois']) && ($_POST['mois'] == "Novembre")) { $mois = "11"; }
if(isset($_POST['mois']) && ($_POST['mois'] == "Décembre")) { $mois = "12"; }
?>
<head>
<meta charset="utf-8">
<title>Visits to Graph : Statistiques de <?php echo $nomdusite; ?></title>
</head>
<h1><i>Visits to Graph</i> : Statistiques de <?php echo $nomdusite; ?></h1>
<span>Visits to Graph dispose de plusieurs graphiques pour lire vos statistiques. Ils ont tous le même fonctionnement basique et certains ont quelques fonctionnalités facultatives.<br>
Pour avoir un graphique qui analyse vos stats par jour selon le mois, vous rajoutez après celui-ci ?mode=day&m=Le Numéro du mois choisi&y=L'année choisie<br>
Pour avoir un graphique qui analyse vos stats par mois selon l'année, vous rajoutez après celui-ci ?mode=month&y=L'année choisie<br>
Vous pouvez bien sûr utiliser l'utilitaire ci-dessous qui vous permettra de générer le lien du graphique :<br>
<form action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="post">
Graphique : <SELECT name="graphique" size="1">
<OPTION>Diagramme en baton 3D
<OPTION>Courbe
<OPTION>Diagramme en baton
<OPTION>Ligne 1
<OPTION>Ligne 2
<OPTION>Ligne avec label
<OPTION>Diagramme en cercle
</SELECT>
Mode : <SELECT name="mode" size="1">
<OPTION>Par Jour
<OPTION>Par Mois
</SELECT>
Année : <SELECT name="annee" size="1">
<OPTION>2015
<OPTION>2016
<OPTION>2017
<OPTION>2018
<OPTION>2019
<OPTION>2020
<OPTION>2021
<OPTION>2022
<OPTION>2023
</SELECT>
Mois (Si l'option <i>Par Jour</i> est choisie) : <SELECT name="mois" size="1">
<OPTION>Janvier
<OPTION>Février
<OPTION>Mars
<OPTION>Avril
<OPTION>Mai
<OPTION>Juin
<OPTION>Juillet
<OPTION>Août
<OPTION>Septembre
<OPTION>Octobre
<OPTION>Novembre
<OPTION>Décembre
</SELECT>
<input value="OK" type="submit">
</form>
<br>
<?php 
if(isset($_POST['graphique'])) { 
echo "L'URL de votre graph est http://".$_SERVER['HTTP_HOST'].$serv.$graph."/index.php?mode=".$mode."&y=".$_POST['annee']."&m=".$mois; 
?> <br><iframe style="border:none" src="<?php echo "http://".$_SERVER['HTTP_HOST'].$serv.$graph."/index.php?mode=".$mode."&y=".$_POST['annee']."&m=".$mois; ?>" width="80%" height="500"></iframe> <?php } 
?>
<br><br><i>Visits To Graph</i> version 1.0. Crée par <a href="http://forum-racacax.ga">Racacax</a>