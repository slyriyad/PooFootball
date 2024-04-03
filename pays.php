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


        public function __toString()
        {
            return $this->nom;
        }


        public function ajouterEquipe(Equipe $equipe)
        {
            $this->equipes[] = $equipe;
        }

        public function listerEquipes()
        {
            echo "<div style='display:flex;flex-direction:column;justify-content:space-around;width:20vw;padding:1vw;margin:1vw;width:20vw;height:20vw;background-color:rgb(188, 102, 101);color:white;border-radius:5px'>
            <div><p style='font-weight:700;'>";
            echo $this;
            echo"</p></div>
            <div>";
            foreach ($this->equipes as $equipe) {
                echo $equipe->getNom() . "<br>";
            }   
            
            echo "</div>
            </div>";
        }
}