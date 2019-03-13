<?php
    include_once "../../commun/vue/fragment/entete-fragment.php";
    include_once "../../commun/vue/fragment/pied-de-page-fragment.php";

    $page = (object)[
        "titre" => "Nous contactez",
        "titrePrincipal" => "Nous contactez",
        "itemMenuActif" => ""
    ];

    function afficherPage($page = null){
        if(!is_object($page))
            $page = (object)[];

        afficherEntete($page);

        ?> 

        <form action="" method="post">
            <div>
                <label for="prenom">Votre prénom</label>
                <input type="text" name="prenom" id="prenom-contact">

                <label for="nom">Votre nom</label>
                <input type="text" name="nom" id="nom-contact">

                <label for="courriel">Votre courriel</label>
                <input type="email" name="courriel" id="courriel-contact">

                <label for="sujet">Sujet du message</label>
                <input type="text" name="sujet" id="sujet-contact">

                <label for="message">Votre message</label>
                <textarea name="message" id="message-contact" cols="30" rows="10"></textarea>
            </div>

            <button type="submit">Envoyer le message</button>
        </form>

        <?php

        afficherPiedDePage($page);
    }

    afficherPage($page);
?>