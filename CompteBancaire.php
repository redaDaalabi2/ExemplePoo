<?php

    class CompteBancaire
    {
        private $devise;
        private $solde;
        private $nom;

        public function __construct($devise, $solde, $nom)
        {
            $this->devise = $devise;
            $this->solde = $solde;
            $this->nom = $nom;
        }

        public function getDevise()
        {
            return $this->devise;
        }
        public function getSolde()
        {
            return $this->solde;
        }
        public function getNom()
        {
            return $this->nom;
        }
        protected function setSolde($solde)
        {
            $this->solde = $solde;
        }
        public function crediter($montant) {
            $this->solde += $montant;
        }
        //__toString détermine comment l'objet est affiché en tant que chaîne de caractères
        public function __toString()
        {
            return "Le solde du compte de " . $this->nom . " est de " . $this->solde . " " . $this->devise;
        }
    }

?>