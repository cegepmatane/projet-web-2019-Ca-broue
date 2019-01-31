<?php
/**
 * Created by PhpStorm.
 * User: xela
 * Date: 31/01/19
 * Time: 2:05 PM
 */



function afficherPiedDePage($page = null){

    // En cas d'erreur avec le paramètre $page, un objet $page vide est créé.
    if(!is_object($page)) $page = (object)[];

    ?>
    <footer role="contentinfo">
        <address>
            <p>Pour plus d'information
                <a href="mailto:admin@example.com">Mail de la brasserie Mustermann</a>.
            </p>
        </address>
        <small>Copyright &copy; <time>2019</time></small>
    </footer>
    </body>
    </html>

    <?php

}