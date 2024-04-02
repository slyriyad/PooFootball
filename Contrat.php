<?php

class Contrat {
    private Joueur $joueur;
    private Equipe $equipe;
    private int $anneeDebutsaison;

    public function __construct(joueur $joueur, equipe $equipe, int $anneeDebutsaison) 
    {
        $this->joueur = $joueur;
        $this->equipe = $equipe;
        $this->anneeDebutsaison = $anneeDebutsaison;


        $this->joueur->ajouterContrat($this);
        $this->equipe->ajouterContrat($this);
    }


        /**
         * Get the value of joueur
         */ 
        public function getJoueur()
        {
                return $this->joueur;
        }

        /**
         * Set the value of joueur
         *
         * @return  self
         */ 
        public function setJoueur($joueur)
        {
                $this->joueur = $joueur;

                return $this;
        }

        /**
         * Get the value of anneeDebutsaison
         */ 
        public function getAnneeDebutsaison()
        {
                return $this->anneeDebutsaison;
        }

        /**
         * Set the value of anneeDebutsaison
         *
         * @return  self
         */ 
        public function setAnneeDebutsaison($anneeDebutsaison)
        {
                $this->anneeDebutsaison = $anneeDebutsaison;

                return $this;
        }

        /**
         * Get the value of equipe
         */ 
        public function getEquipe()
        {
                return $this->equipe;
        }

        /**
         * Set the value of equipe
         *
         * @return  self
         */ 
        public function setEquipe($equipe)
        {
                $this->equipe = $equipe;

                return $this;
        }
}