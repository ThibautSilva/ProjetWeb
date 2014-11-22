<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta  charset="utf-8">
        <title>Titre de la page</title>
    </head>

    <body>   

	<?php
	    include('BlogControler.php');
	    include('Base.php');
	    $bc = new BlogControler();
	    $bc->callAction($_GET);
	    $dblink = Base::getConnection();
	?>
    </body>

</html>