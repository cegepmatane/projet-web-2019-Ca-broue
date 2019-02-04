<?php

function afficherPiedDePage($page = null){

    // En cas d'erreur avec le paramètre $page, un objet $page vide est créé.
    if(!is_object($page)) $page = (object)[];

    ?>
    <footer class="page-footer font-small pt-3">
        <div class="container text-center text-md-left">

            <div class="row">

                <div class="col-md-4 mx-auto">
                <p>Notre mission est d’offrir des bières uniques brassées avec passion et par la suite, donner une occasion de la déguster avec une vaste sélection d'événements.</p>
                </div>

                <hr class="clearfix w-100 d-md-none">

                <div class="col-md-2 mx-auto">

                <ul class="list-unstyled">
                    <li>
                        <a href="https://cabroue.home.blog/">Forum</a>
                    </li>
                    <li>
                        <a href="./a-propos">À propos de nous</a>
                    </li>
                    <li>
                        <a href="./contact">Nous contactez</a>
                    </li>
                </ul>

                </div>
            </div>
        </div>
        <hr>

        <ul class="list-unstyled list-inline text-center">
            <li class="list-inline-item">
                <a class="btn-floating btn-fb mx-1"
                href="https://www.facebook.com/">
                <i class="fab fa-facebook-f"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-tw mx-1"
                href="https://twitter.com/">
                <i class="fab fa-twitter"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-yt mx-1"
                href="https://youtube.com/">
                <i class="fab fa-youtube"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-git mx-1"
                href="https://github.com/">
                <i class="fab fa-github"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-insta mx-1"
                href="https://instagram.com/">
                <i class="fab fa-instagram"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-maps mx-1"
                href="https://www.google.com/maps/place/C%C3%A9gep+de+Matane/@48.840691,-67.497435,15z/data=!4m5!3m4!1s0x0:0xa2ab048394234f5a!8m2!3d48.840691!4d-67.497435">
                <i class="fas fa-map-marker-alt"> </i>
                </a>
            </li>
        </ul>

        <div class="footer-copyright text-center py-3">
            <p>&copy; <time><?=date("Y");?></time>, ÇaBroue.com, inc.</p>
            <p>616 Avenue St Rédempteur, Matane, QC G4W 1L1</p>
            <p><a href="mailto:admin@example.com">cabroue@gmail.com</a></p>
        </div>
    </footer>
    </body>
    </html>

    <?php

}

