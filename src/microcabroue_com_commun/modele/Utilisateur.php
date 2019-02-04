<?php
class Utilisateur
{
    public const ID = "id";
    public const NOM = "nom";
    public const mail = "mail";
    public const MOT_PASSE = "MOT_PASSE";

    private const NOM_NOMBRE_CARACTERE_MAXIMUM = 24;
    private const MAIL_NOMBRE_CARACTERE_MAXIMUM = 30;
    private const MOT_PASSE_NOMBRE_CARACTERE_MAXIMUM = 24;

    private static $LISTE_MESSAGE_ERREUR = [];
    private static $LISTE_INFORMATION_CHAMP = [];

    public static function getInformation($champ){

        if(empty(self::$LISTE_INFORMATION_CHAMP)){

            self::$LISTE_INFORMATION_CHAMP["id"] = (object)
            [
                "etiquette" => "",
                "defaut" => "",
                "indice" => "",
                "description" => "",
                "obligatoire" => null
            ];

            self::$LISTE_INFORMATION_CHAMP["nom"] = (object)
            [
                "etiquette" => "nom",
                "defaut" => "",
                "indice" => "Ex. : Smith (nombre maximum de caractères : " .
                            self::NOM_NOMBRE_CARACTERE_MAXIMUM .
                            " )",
                "description" => "pseudo",
                "obligatoire" => true
            ];

            self::$LISTE_INFORMATION_CHAMP["mail"] = (object)
            [
                "etiquette" => "mail",
                "defaut" => "",
                "indice" => "Ex. : monnom@courriel.com " .
                            "(nombre maximum de caractères : " .
                            self::COURRIEL_NOMBRE_CARACTERE_MAXIMUM .
                            " )",
                "description" => "Adresse électronique",
                "obligatoire" => true
            ];
        }

        $nomClasse = get_called_class();
        $constante = "$nomClasse::" . strtoupper($champ);
        if(!defined($constante)) return null;
        return self::$LISTE_INFORMATION_CHAMP[$champ];
    }

    private static function getListeMessageErreur(){

        if(empty(self::$LISTE_MESSAGE_ERREUR)){

            self::$LISTE_MESSAGE_ERREUR =
            [
                "id_personne-invalide" =>
                    true,

                "nom-vide" =>
                    "Le nom ne doit pas être vide",

                "nom-trop-long" =>
                    "Le nombre maximum de caractères pour le nom est : " .
                    self::NOM_NOMBRE_CARACTERE_MAXIMUM ,

                "nom-non-alphabetique" =>
                    "Le nom doit contenir uniquement des lettres",


                "prenom-vide" =>
                    "Le prénom ne doit pas être vide",

                "prenom-trop-long" =>
                    "Le nombre maximum de caractères pour le prénom est : " .
                    self::PRENOM_NOMBRE_CARACTERE_MAXIMUM ,

                "prenom-non-alphabetique" =>
                    "Le prénom doit contenir uniquement des lettres",


                "courriel-vide" =>
                    "Le courriel ne doit pas être vide",

                "courriel-invalide" =>
                    "Le courriel n'est pas valide",

                "courriel-trop-long" =>
                    "Le nombre maximum de caractères pour le courriel est : " .
                    self::COURRIEL_NOMBRE_CARACTERE_MAXIMUM
            ];
        }
        return self::$LISTE_MESSAGE_ERREUR;
    }

    private $listeMessageErreurActif = [];

    private $id;
    private $nom;
    private $mail;
    private $mot_passe;


    function __construct(object $attribut){
        if(!is_object($attribut)) $attribut = (object)[];

        $this->$setNom($attribut->nom ?? "");
        $this->$setMail($attribut->mail ?? "");
        $this->$setMot_passe($attribut->mot_passe ?? "");
        $this->$setId($attribut->id ?? null);
    }

    public function isValide($champ = null){

        if(null == $champ){

            $this->setId($this->id);
            $this->setNom($this->nom);
            $this->setMot_Passe($this->mot_passe);
            $this->setMail($this->mail);

            return empty($this->listeMessageErreurActif);

        }

        $nomClasse = get_class();
        $constante = "$nomClasse::" . strtoupper($champ);
        if(!defined($constante)) return false;

        return !isset($this->listeMessageErreurActif[$champ]);

    }

    public function getListeMessageErreurActif($champ){
        return $this->listeMessageErreurActif[$champ] ?? [];
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Get the value of mail
     */ 
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Get the value of mot_passe
     */ 
    public function getMot_passe()
    {
        return $this->mot_passe;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Set the value of mail
     *
     * @return  self
     */ 
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Set the value of mot_passe
     *
     * @return  self
     */ 
    public function setMot_passe($mot_passe)
    {
        $this->mot_passe = $mot_passe;

        return $this;
    }
}