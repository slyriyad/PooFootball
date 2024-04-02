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


        public function __toString()
        {
            return $this->nom.' '.$this->dateCreation ;
        }


        public function ajouterContrat(Contrat $contrat)
        {
            $this->contrats[] = $contrat;

        }


        public function listerJoueurs()
        {
            echo "<div style='display:flex;flex-direction:column;justify-content:space-around;padding:1vw;margin:2vw;width:20vw;height:20vw;background-color:blue;color:white;border-radius:5px'>
            <p style='font-weight:700;'>";
            echo $this;
            echo"</p>
            <div>";
            foreach ($this->contrats as $contrat) {
                echo $contrat->getJoueur()." ".$contrat->getAnneeDebutsaison(). "<br>";
            }

            echo "</div>
            </div>";
        }   
}