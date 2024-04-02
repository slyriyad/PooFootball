<?php

class Equipe {
    private string $nom;
    private int $dateCreation;
    private Pays $pays;
    private $contrats = [];

    public function __construct(string $nom, int $dateCreation, Pays $pays) 
    {
        $this->nom = $nom;
        $this->dateCreation = $dateCreation;
        $this->pays = $pays;
        $this->pays->ajouterEquipe($this);
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
         * Get the value of dateCreation
         */ 
        public function getDateCreation()
        {
                return $this->dateCreation;
        }

        /**
         * Set the value of dateCreation
         *
         * @return  self
         */ 
        public function setDateCreation($dateCreation)
        {
                $this->dateCreation = $dateCreation;

                return $this;
        }


        public function ajouterContrat(Contrat $contrat)
        {
            $this->contrats[] = $contrat;

        }


        public function listerJoueurs()
        {
            foreach ($this->contrats as $contrat) {
                echo $contrat->getJoueur()->getPrenom()." ".$contrat->getJoueur()->getNom()." ".$contrat->getAnneeDebutsaison() . "<br>";
            }
        }   
}