<?php

class Utilisateur
{
    public const ID = "id";
    public const NOM = "nom";
    public const PRENOM = "prenom";
    public const ADRESSE_POSTAL = "adresse_postal";
    public const VILLE = "ville";
    public const MAIL = "mail";
    public const PSEUDO = "pseudo";
    public const MOT_DE_PASSE = "mot_passe";
    public const IS_ADMIN = "isAdmin";
    const TABLE = "utilisateur";

    private $id;
    private $nom;
    private $prenom;
    private $adresse_postal;
    private $code_postal;
    private $ville;
    private $mail;
    private $pseudo;
    private $mot_passe;
    private $isAdmin;

    private $liste_message_erreur_active = [];
    private static $LISTE_MESSAGE_ERREUR =
    [

        "nom-vide" =>
            "Le nom ne doit pas être vide",
 
        "prenom-vide" =>
            "Le prénom ne doit pas être vide",

        "courriel-vide" =>
            "Le courriel ne doit pas être vide",
            
        "pseudo-vide" =>
            "Le nom d'utilisateur ne doit pas être vide",
        
        "mot-passe-vide" =>
            "Le mot de passe ne doit pas être vide",

        "mot-passe-errone" =>
            "Les mots de passe doivent être identique",
        
        "adresse-vide" =>
            "L'adresse ne doit pas être vide",
        
        "code-postal-vide" =>
            "Le code postal ne doit pas être vide",

        "ville-vide" =>
            "La ville ne doit pas être vide"
       
    ];

    function __construct(object $attribut){
        if(!is_object($attribut)) $attribut = (object)[];

        $this->setId($attribut->id ?? null);
        $this->setNom($attribut->nom ?? "");
        $this->setPrenom($attribut->prenom ?? "");
        $this->setAdresse_postal($attribut->adresse_postal ?? "");
        $this->setCode_postal($attribut->code_postal ?? "");
        $this->setVille($attribut->ville ?? "");
        $this->setMail($attribut->mail ?? "");
        $this->setPseudo($attribut->pseudo ?? "");
        $this->setMot_passe($attribut->mot_passe ?? "");
        $this->setIsAdmin($attribut->isAdmin ?? false);
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
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
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
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
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of adresse_postal
     */ 
    public function getAdresse_postal()
    {
        return $this->adresse_postal;
    }

    /**
     * Set the value of adresse_postal
     *
     * @return  self
     */ 
    public function setAdresse_postal($adresse_postal)
    {
        $this->adresse_postal = $adresse_postal;

        return $this;
    }

    /**
     * Get the value of code_postal
     */ 
    public function getCode_postal()
    {
        return $this->code_postal;
    }

    /**
     * Set the value of code_postal
     *
     * @return  self
     */ 
    public function setCode_postal($code_postal)
    {
        $this->code_postal = $code_postal;

        return $this;
    }

    /**
     * Get the value of ville
     */ 
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set the value of ville
     *
     * @return  self
     */ 
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get the value of mail
     */ 
    public function getMail()
    {
        return $this->mail;
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
     * Get the value of pseudo
     */ 
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Set the value of pseudo
     *
     * @return  self
     */ 
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get the value of mot_passe
     */ 
    public function getMot_passe()
    {
        return $this->mot_passe;
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

    public function getIsAdmin()
    {
        return $this->isAdmin;
    }

    
    public function setIsAdmin($isAdmin)
    {
        $this->isAdmin = $isAdmin;

        return $this;
    }


    public function ValiderUtilisateurPremiereEtape()
    {
        $this->liste_message_erreur_active = [];
        $this->isPseudoValide();
        $this->isCourrielValide();
    }
    public function ValiderUtilisateurDeuxiemeEtape()
    {
        $this->liste_message_erreur_active = [];
        $this->isNomValide();
        $this->isPrenomValide();
        $this->isAdresseValide();
        $this->isCodePostalValide();
        $this->isVilleValide();
    }

    public function ValiderUtilisateurModification()
    {
        $this->liste_message_erreur_active = [];
        $this->isNomValide();
        $this->isPrenomValide();
        $this->isAdresseValide();
        $this->isCodePostalValide();
        $this->isVilleValide();
        $this->isPseudoValide();
        $this->isCourrielValide();
    }
    private function isNomValide()
    {
        if($this->nom == "")
        {
            array_push($this->liste_message_erreur_active, self::$LISTE_MESSAGE_ERREUR['nom-vide']);
            
        }
    }
    private function isPrenomValide()
    {
        if($this->prenom == "")
        {
            array_push($this->liste_message_erreur_active, self::$LISTE_MESSAGE_ERREUR['prenom-vide']);
        }
    }
    private function isPseudoValide()
    { 
        if($this->pseudo == "")
        {
            array_push($this->liste_message_erreur_active, self::$LISTE_MESSAGE_ERREUR['pseudo-vide']);
        }
    }
    public function isMotDePasseValide($confirmationMotPasse)
    { 
        if($this->mot_passe == "")
        {
            array_push($this->liste_message_erreur_active, self::$LISTE_MESSAGE_ERREUR['mot-passe-vide']);
        }
        if($this->mot_passe != $confirmationMotPasse)
        {
            array_push($this->liste_message_erreur_active, self::$LISTE_MESSAGE_ERREUR['mot-passe-errone']);
        }
    }
    public function isMotDePasseValideModification($confirmationMotPasse)
    { 
        if($this->mot_passe != $confirmationMotPasse)
        {
            array_push($this->liste_message_erreur_active, self::$LISTE_MESSAGE_ERREUR['mot-passe-errone']);
        }
    }
    private function isCourrielValide()
    {
        if($this->mail == "")
        {
            array_push($this->liste_message_erreur_active, self::$LISTE_MESSAGE_ERREUR['courriel-vide']);
        }
    }
    private function isAdresseValide()
    {
        if($this->adresse_postal == "")
        {
            array_push($this->liste_message_erreur_active, self::$LISTE_MESSAGE_ERREUR['adresse-vide']);
        }
    }
    public function isCodePostalValide()
    {
        if($this->code_postal == "")
        {
            array_push($this->liste_message_erreur_active, self::$LISTE_MESSAGE_ERREUR['code-postal-vide']);
        }
    }
    public function isVilleValide()
    {
        if($this->ville == "")
        {
            array_push($this->liste_message_erreur_active, self::$LISTE_MESSAGE_ERREUR['ville-vide']);
        }
    }

    public function getListeErreurActive()
    {
        return $this->liste_message_erreur_active;
    }
}