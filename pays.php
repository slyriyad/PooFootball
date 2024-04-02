<?php

class Pays {
    private string $nom;
    private $equipes = [];

    public function __construct(string $nom) 
    {
        $this->nom = $nom;
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