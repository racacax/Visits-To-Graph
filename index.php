<?php
$serv = array(basename(__FILE__)=>"");
$serv = strtr($_SERVER['REQUEST_URI'],$serv);
$file = 'config.php';
if(file_exists($file))
{ echo file_get_contents('http://'.$_SERVER['HTTP_HOST'].$serv.'graphs/index.php'); } else { if(isset($_POST['urlcompteur'])) {
$person = '<?php 
$urlcompteur = "'.$_POST['urlcompteur'].'";
$nomdusite = "'.$_POST['sitename'].'";
?>';
file_put_contents($file, $person, FILE_APPEND | LOCK_EX);
}
?>
<head>
<meta charset="utf-8">
</head>
<body>
<h1>Configuration de <i>Visits to Graph</i></h1>

<?php if(isset($_POST['urlcompteur'])) { ?>
Intégrez ce code HTML sur votre site web : <code>&lt;img src="<?php echo $_POST['urlcompteur'].'compteur.php'; ?>"&gt;</code>
<?php } if(empty($_POST['urlcompteur'])) { ?>

<span>Veuillez vérifier que ces informations sont les bonnes, modifiez-les si nécessaire et cliquer sur OK (obligatoirement) :</span><br>
<form action="<?php echo basename(__FILE__); ?>" method="post">
Répertoire du compteur : <input style="width:250px" name="urlcompteur" value="<?php if(empty($_POST['urlcompteur'])) { echo 'http://'.$_SERVER['HTTP_HOST'].$serv.'compteur/'; } else { echo $_POST['urlcompteur']; } ?>"></input><br>
Nom de votre site/projet : <input name="sitename" style="width:250px" value="<?php if(empty($_POST['sitename'])) { echo 'Mon site'; } else { echo $_POST['sitename']; } ?>"></input><br>
<input value="OK" type="submit">
</form>
<span>Une fois la configuration terminée, le fichier index.php affichera une page blanche pour éviter toute modification malveillante. Si un jour, vous voulez changer votre configuration, supprimez le fichier config.php.</span><br><?php } ?>
<br><i>Visits To Graph</i> version 1.0. Crée par <a href="http://forum-racacax.ga">Racacax</a><?php } ?>