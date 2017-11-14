<?php

class Personnage {
//Par défaut les variables sont en "private" ==> on crée des "getters"
// pour y avoir accès en dehors de la classe.
    private $vie = 40;
    private $atk = 30;
    private $nom;
//"protected": moins strict que "private"
// car on pourrait y accéder par des enfants de la classe (héritage).

    public function __construct($nom){
        $this->nom = $nom;
    }

    public function regenerer($vie = null){
       if (is_null($vie)) {
           $this->vie = 100;
       } else {
           $this->vie += $vie;
       }
    }

    public function mort(){
        return $this->vie <= 0;
        }

        //private car pas besoin en dehors de la classe (-> que dans la fonction attaque() ).
    private function empecher_negatif() {
        if ($this->vie <= 0){
            $this->vie = 0;
        }
    }

    // Passer un objet en paramètre d'une fonction
    public function attaque($cible){
        $cible->vie -= $this->atk;
        $cible->empecher_negatif();
    }

    // SETTERS
    public function setNom($nom){
        $this->nom = $nom;
    }


    // GETTERS
    public function getNom(){
        return $this->nom;
    }

    public function getVie(){
        return $this->vie;
    }

    public function getAtk(){
        return $this->atk;
    }



}
