<?php

class GalerieMarchande {
    // attributs
    private string $nom;
    private array $magasins;

    // constructeur
    public function __construct(string $nom) { 
        $this->nom = $nom;
        $this->magasins = [];
    }




   
    public function getNom()
    {
        return $this->nom;
    }

         
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;

    }

    public function getMagasins()
    {
        return $this->magasins;
    }
    
    public function setMagasins($magasins)
    {
        $this->magasins = $magasins;

        return $this;
    }

    public function addMagasin(Magasin $magasin){
        $this->magasins[] = $magasin;
    }

    public function __toString() {
        return $this->nom;
        
    }

    public function afficherInfos(){
        // si le tableau des magasins n'est pas vide (si cette galerie contient au moins 1 magasin)
        if (!empty($this->magasins)) {
            
            $result = "Magasins dans la galerie $this (" . count($this->magasins) . " magasin(s)) : <br> ";
            foreach ( $this->magasins as $magasin){
                $result = $result . $magasin."<br> ";
            }
        
            echo $result;

        } else {
            // sinon la galerie n'a pas de magasin

            echo "La galerie $this n'a aucun magasin pour le moment...<br>";
        }
    }



}

























































































    // méthodes

    // public function ajouterMagasin(Magasin $magasin) {
    //     $this->magasins[] = $magasin;
    // }

    // // afficher les infos de cette galerie marchande et de tous les magasins liés
    // public function afficherInfos() {
    //     echo $this;

    //     foreach ($this->magasins as $magasin) {
    //         echo $magasin;
    //     }
    // }

    // // getters/setters
    // public function getMagasins() {
    //     return $this->magasins;
    // }

    /**
     * Get the value of magasins
     */ 
   