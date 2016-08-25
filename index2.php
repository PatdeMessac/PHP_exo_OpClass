<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head>
       <title>ECHANGE DE FORMULAIRE en PHP</title>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   </head>
   <body>
   
  <form action="cible.php" method="POST">
  	<input type="text" name="prenom" />
  	
	<textarea name="message" rows="8" cols="45" style="color : brown" >
		Solde sur le Lorem Ipsum, Raconte ta vie et passe sur C8 : 
	</textarea>

	<p>NATIONALITE</p>
	<select name="choix"><p>NATIONALITE</p>
	    <option value="français">français</option>
	    <option value="anglais">anglais</option>
	    <option value="allemand">allemand</option>
	    <option value="autre">autre</option>
	    <option value="choix3" selected="selected">Choix 3</option><!--choix par defaut-->
	</select>

	
<p>Cocher la case</p>
<input type="checkbox" name="case" id="case" /> <label for="case">Ma case à cocher</label><!--LABEL : permet de cocher la case aussi en cliquant sur le nom -->
</p>

<p>Aimez-vous les frites ?

<input type="radio" name="frites" value="oui" id="oui" checked="checked" /> <label for="oui">Oui</label>

<input type="radio" name="frites" value="non" id="non" /> <label for="non">Non</label>
</p>

<input type="submit" value="valider" />

  </form>
   
   </body>
</html>
