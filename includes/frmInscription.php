<form action="index.php?page=inscription" method="post">
    <div>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" value="<?=$nom?>" />
    </div>
    <div>
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" value="<?=$prenom?>" />
    </div>
    <div>
        <label for="email">E-mail :</label>
        <input type="text" id="email" name="email" value="<?=$email?>" />
    </div>
    <div>
        <label for="mdp1">Mot de passe :</label>
        <input type="password" id="mdp1" name="mdp1" />
    </div>
    <div>
        <label for="mdp2">Vérification mot de passe :</label>
        <input type="password" id="mdp2" name="mdp2" />
    </div>
    <div>
    <label>Entrer le texte dans l'image</label>
        <input name="captcha" type="text">
        <img src="captcha.php" style="vertical-align: middle;"/>
    </div>
    <div>
        <input type="reset" value="Effacer" />
        <input name= "submit" type="submit" value="Envoyer" />
    </div>
    <input type="hidden" name="frmInscription" />
</form>