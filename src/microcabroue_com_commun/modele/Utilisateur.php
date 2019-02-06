<?php

class Utilisateur
{


    private $id;
    private $nom;
    private $prenom;
    private $adresse_postal;
    private $code_postal;
    private $ville;
    private $mail;
    private $pseudo;
    private $mot_passe;


    function __construct(object $attribut){
        if(!is_object($attribut)) $attribut = (object)[];

        $this->$setId($attribut->id ?? null);
        $this->$setNom($attribut->nom ?? "");
        $this->$setPrenom($attribut->prenom ?? "");
        $this->$setAdresse_postal($attribut->adresse_postal ?? "");
        $this->$setCode_postal($attribut->code_postal ?? "");
        $this->$setVille($attribut->ville ?? "");
        $this->$setMail($attribut->mail ?? "");
        $this->$setPseudo($attribut->pseudo ?? "");
        $this->$setMot_passe($attribut->mot_passe ?? "");
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
}