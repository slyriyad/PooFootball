<?php

class Joueur {
    private string $nom;
    private string $prenom;
    private DateTime $dateNaissance;
    private $nationalite;
    private $contrats = [];
    
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
        
        /**
         * Get the value of nationalite
         */ 
        public function getNationalite()
        {
            return $this->nationalite;
        }
    
        /**
         * Set the value of nationalite
         *
         * @return  self
         */ 
        public function setNationalite($nationalite)
        {
            $this->nationalite = $nationalite;
    
            return $this;
        }

        public function ajouterContrat(Contrat $contrat)
        {
            $this->contrats[] = $contrat;

        }

        public function __toString()
        {
            return $this->prenom . ' ' . $this->nom;
        }


        public function calculerAge()
{
        $dateActuelle = new DateTime();
        $difference = $this->dateNaissance->diff($dateActuelle);
        return $difference->y; // Retourne l'âge en années
}



    public function listerEquipes()
        {
            echo "<div style='display:flex;flex-direction: column;justify-content:space-around;padding:1vw;margin:1vw;width:20vw;height:20vw;background-color:rgb(106, 175, 92);color:white;border-radius:5px'>
            <div class='haut'><p style='font-weight:700;margin:0px'>";
            echo $this;
            echo"</p>
            <p style='margin:0px;font-size:1vw;'>";
            echo $this->getNationalite()." ".$this->calculerAge();
            echo "</p></div><div class='bas'>";
            foreach ($this->contrats as $contrat) {
                echo $contrat->getEquipe()->getNom() ." ".$contrat->getAnneeDebutsaison() . "<br>";
            }
            echo "</div>
            </div>";
        }

}