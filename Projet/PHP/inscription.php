<?php
require ('base.php');
if(!empty($_POST['usernameins']) || strlen($_POST['usernameins']) < 6)
{	


			$passe = mysql_real_escape_string(htmlspecialchars($_POST['passwordins']));
			$passe2 = mysql_real_escape_string(htmlspecialchars($_POST['passwordinsconf']));
		
	 		if($passe == $passe2)
			{
		
				$username = mysql_real_escape_string(htmlspecialchars($_POST['usernameins']));
				$email = mysql_real_escape_string(htmlspecialchars($_POST['emailins']));
		
				// Je vais crypter le mot de passe.
				$passe = sha1($passe);

				mysql_query("INSERT INTO users VALUES('', '$username', '$passe', '$email')");
			}
			else
			{	
				echo 'Les deux mots de passe que vous avez rentrés ne correspondent pas…';
			}
		
	}

else
{
echo 'Le username est trop court ou inexistant ';
}



?>