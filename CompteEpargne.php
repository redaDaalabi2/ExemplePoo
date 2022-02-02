<?php

    require_once 'CompteBancaire.php';

    class CompteEpargne extends CompteBancaire
    {
        private $tauxInteret;

        public function __construct($devise, $solde, $nom, $tauxInteret)
        {
            CompteBancaire::__construct($devise, $solde, $nom);
            $this->tauxInteret = $tauxInteret;
        }

        public function getTauxInteret()
        {
            return $this->tauxInteret;
        }

        public function calculerInterets($ajouterAuSolde = false)
        {
            $interets = $this->getSolde() * $this->tauxInteret;
            if ($ajouterAuSolde == true)
                $this->setSolde($this->getSolde() + $interets);
            return $interets;
        }
        //__toString détermine comment l'objet est affiché en tant que chaîne de caractères
        public function __toString()
        {
            return CompteBancaire::__toString() . '. Son taux d\'interet est de ' . $this->tauxInteret * 100 . '%.';
        }
    }

?>