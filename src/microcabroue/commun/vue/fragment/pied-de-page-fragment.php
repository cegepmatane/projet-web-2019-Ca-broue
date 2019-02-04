<?php

function afficherPiedDePage($page = null){

    // En cas d'erreur avec le paramètre $page, un objet $page vide est créé.
    if(!is_object($page)) $page = (object)[];

    ?>
    <footer role="contentinfo">

        <div>
            <h5>
                <a href="./accueil">
                    <img src="" alt="Accueil Ça Broue">
                </a>
            </h5>

            <a href="https://cabroue.home.blog/">Forum</a>
            <a href="./a-propos">À propos de nous</a>
            <a href="./contact">Nous contactez</a>
        </div>

        <hr>

        <div>
            <a href="mailto:admin@example.com">
                <img src="" alt="Mail de Ça Broue">
            </a>
            <a href="https://www.facebook.com">
                <img src="" alt="Facebook Ça Broue">
            </a>
        </div>

        <div>
            <small>&copy; <time><?=date("Y");?></time>, ÇaBroue.com, inc.</small>
            <small>616 Avenue St Rédempteur, Matane, QC G4W 1L1</small>
            <small><address>cabroue@gmail.com</address></small>
        </div>
    </footer>
    </body>
    </html>

    <?php

}
