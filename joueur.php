<?php

class Joueur {
    private string $nom;
    private string $prenom;
    private DateTime $dateNaissance;
    private $nationalite;
    private $equipes = [];
    
    public function __construct(string $nom, string $prenom,string $dateNaissance,Pays $nationalite) 
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = new DateTime($dateNaissance);
        $this->nationalite = $nationalite;
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
         * Get the value of dateNaissance
         */ 
        public function getDateNaissance()
        {
                return $this->dateNaissance;
        }

        /**
         * Set the value of dateNaissance
         *
         * @return  self
         */ 
        public function setDateNaissance($dateNaissance)
        {
                $this->dateNaissance = $dateNaissance;

                return $this;
        }


        public function ajouterEquipe(Equipe $equipe)
        {
            $this->equipes[] = $equipe;
        }

        public function listerEquipes()
        {
            foreach ($this->equipes as $equipe) {
                echo $equipe->getNom() . "<br>";
            }
        }
}