<!doctype html>
<html lang="fr">
<?php
$titre = "Contact";
$description = 'Contactez l\'équipe Virtual Travel via ce formulaire de contact';
?>
<?php include("header.php") ?>
    <div class="container">
        <div class="col-12 titre_contenu_page">
            <h2>CONTACTEZ-NOUS</h2>
            <p>Pour toute question ou information, merci de nous laisser un message ci-dessous (réponse sous 24h), ou par téléphone au 04 50 00 00 00.</p>
            <p>Réservation obligatoire</p>
        </div>
    </div>

    <section class="page_accueil_background">
        <div class="container page_accueil">

<!-- formulaire -->
              <?php include('formulaire.php'); ?>
        </div>

        <!-- module maps-->
        <div class="container googlemaps">
            <div class="row">
                <iframe id= "maps" class="col-md-5 col-sm-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2776.173293209776!2d6.100588515777842!3d45.90784501175113!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478b85412d20d46f%3A0xcdf72ac7f7fdadd0!2sLes%20Papeteries%20-%20Image%20Factory!5e0!3m2!1sfr!2sfr!4v1576589322866!5m2!1sfr!2sfr"
                        height="300"  frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                <div class="col-md-2"></div>
                <div id= "textmaps" class="col-md-5 col-sm-12"><h3><img src="images/maps2.png" alt="icon adress">Comment nous trouver?</h3><p>Les papeteries -Image Factory<br /> 1, 3 Esplanade Augustin Aussedat, 74960, France</p></div>
            </div>
        </div>
    </section>

    <!-- footer-->
<?php include("footer.php") ?>
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