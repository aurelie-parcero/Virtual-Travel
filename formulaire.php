<?php
session_start();

function fillsession($array_session, $array_post){
    foreach ($array_post as $key => $value) {
        $array_session = $array_post;
    }
    return $array_session;
}

if(isset($_POST['envoyer'])) {
        $_SESSION = fillsession($_SESSION, $_POST);
    if (empty($_POST['civilite']) || empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['email']) || empty($_POST['choix']) || empty($_POST['message'])) {

        if (empty($_POST['nom'])) {
            echo '<div class="error_form">Veuillez renseigner votre nom.</div>';
        } elseif (empty($_POST['prenom'])) {
            echo '<div class="error_form">Veuillez renseigner votre prénom.</div>';
        } elseif (empty($_POST['email'])) {
            echo '<div class="error_form">Veuillez renseigner votre email.</div>';
        } elseif (empty($_POST['message'])) {
            echo '<div class="error_form">Veuillez renseigner le champ "message"</div>';
        } else {
            echo '<div class="error_form">Veuillez renseigner tous les champs!</div>';
        }
    } else {
        if (preg_match("#[\w,;./\:*€'()]{5,600}#", $_POST['message'])) {
            echo '<div class="validate_form">Merci pour votre message.</div>';
            $post = "\n.**NOUVEAU CLIENT**\nNom: " . $_POST['nom'] . "\nPrénom: " . $_POST['prenom']. "\nEmail: " .$_POST['email']. "\nRaison du contact: " .$_POST['choix']. "\nMessage: " .$_POST['message'];
            file_put_contents ( 'traitement.txt' , $post, FILE_APPEND);
            $_SESSION['message'] = '';
        } else {
            echo '<div class="error_form">Votre message doit contenir au moins 5 caractères</div>';
        }
    }
}

?>

<form method="post" action="index.php?page=contact" class="formulaire">

    <div>
        <label for="civilite">Civilité :</label><br />
        <select name="civilite" id="civilite"
                value="<?php if(isset($_SESSION['civilite'])){
            echo $_SESSION['civilite'];}?>"
                required>
            <option value="">Veuillez choisir une option</option>
            <option value="monsieur" <?php if (isset($_SESSION['civilite'])){echo ($_SESSION['civilite']=='monsieur')?'selected':'';}?>>Monsieur</option>
            <option value="madame" <?php if (isset($_SESSION['civilite'])){echo ($_SESSION['civilite']=='madame')?'selected':'';}?>>Madame</option>
        </select>
    </div>
    <br />

    <div>
        <label for="name">Nom :</label><br />
        <input type="text" id="nom" name="nom" placeholder="Entrez votre nom"
               value="<?php
        if(isset($_SESSION['nom'])){
            echo $_SESSION['nom'];}
         ?>">
    </div>
    <br />
    <div>
        <label for="prenom">Prénom :</label><br />
        <input type="text" id="prenom" name="prenom" placeholder="Entrez votre prénom"
               value="<?php if(isset($_SESSION['prenom'])){
            echo $_SESSION['prenom'];}?>"
               required>
    </div>
    <br />
    <div>
        <label for="email">Email: </label><br />
        <input type="email"  name="email" id="email" placeholder="Entrez votre email"
               value="<?php if(isset($_SESSION['email'])){
            echo $_SESSION['email'];}?>"
               required>
    </div>
    <br />
    <div>
        <label for="choix" >Votre demande concerne: </label><br />
        <input type=radio id=voyage name=choix value='voyage virtuel'<?php if (isset($_SESSION['choix'])){echo ($_SESSION['choix']=='voyage virtuel')?'checked':'';}?>> Le voyage virtuel<br />
        <input type=radio id=reservation name=choix value='reservation' <?php if (isset($_SESSION['choix'])){echo ($_SESSION['choix']=='reservation')?'checked':'';}?>> Une réservation<br />
        <input type=radio id=seance name=choix value='déroulement séance' <?php if (isset($_SESSION['choix'])){echo ($_SESSION['choix']=='déroulement séance')?'checked':'';}?>> Le déroulement de la séance<br />
        <input type=radio id=bon name=choix value='bon cadeau' <?php if (isset($_SESSION['choix'])){echo ($_SESSION['choix']=='bon cadeau')?'checked':'';}?>> Un bon cadeau<br />
        <input type=radio id=autre name=choix value='autre' <?php if (isset($_SESSION['choix'])){echo ($_SESSION['choix']=='autre')?'checked':'';}?>> Autre<br />
    </div>
    <br />
    <div>
        <label for="message">Votre message: </label><br />
        <textarea id="message" name="message" rows="5" cols="50" placeholder="Votre message ici" required><?php if(isset($_SESSION['message'])){echo $_SESSION['message'];} ?></textarea><br />
    </div>
    <br />
    <div>
        <button type="submit" class="btn btn-light btn btn-outline-dark" name="envoyer">Envoyer</button>
    </div>
</form>
