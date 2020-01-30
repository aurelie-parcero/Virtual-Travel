<!DOCTYPE html>
<html lang="fr" id="html_acc">
<?php
$titre = "Equipe";
$description = 'L\'équipe Virtual Travel vous accueille dans nos locaux du lundi au samedi. Voici les profils de nos collaborateurs';
?>
<?php include("header.php") ?>

    <div class="container">
        <div class="col-12 titre_contenu_page">
            <h2>NOTRE EQUIPE</h2>
            <p>Vous souhaitez mieux les connaitre?<br /> Cliquez sur le profil qui vous intéresse pour consulter sa page!</p>
        </div>
    </div>

    <div class="container-fluid page_accueil_background">
        <div class="container page_equipe">
         <div class="row justify-content-center titre_contenu_page">
            <div class="photo_page_equipe col-lg-6 col-sm-12">
                <a href="index.php?page=muzaffer" target="_blank"><img src="images/muzaffer.png" ></a>
                <h3>Muzaffer</h3>
            </div>
            <div class="photo_page_equipe col-lg-6 col-sm-12">
                <a href="index.php?page=matthias" target="_blank"><img src="images/matthias.png" ></a>
                <h3>Matthias</h3>
            </div>
            <div class="photo_page_equipe col-lg-6 col-sm-12">
                <a href="index.php?page=hyejin" target="_blank"><img src="images/hyejin.png" ></a>
                <h3>Hyejin</h3>
            </div>
            <div class="photo_page_equipe col-lg-6 col-sm-12">
                <a href="index.php?page=aurelie" target="_blank"><img src="images/aurelie.png" ></a>
                <h3>Aurélie</h3>
            </div>
         </div>
        </div>
    </div><?php include("footer.php") ?>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
                crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
                integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
                crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
                integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
                crossorigin="anonymous"></script>

    </body>
</html>