<?php

class Produits{
    private string $nom;
    private Rayons $rayons;



public function __construct(string $nom, Rayons $rayons){
    $this->nom=$nom;
    $this->rayons=$rayons;
    $this->rayons->addProduit($this);
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

    
    public function getRayons()
    {
        return $this->rayons;
    }

   
    public function setRayons(Rayons $rayons)
    {
        $this->rayons = $rayons;

        return $this;
    }

    public function __toString() {
        return $this->nom;
        
    }

    public function afficherInfo(){
        $result = $this->rayons->compterProduit();
        echo "le rayon « " . $this->rayons . " » posséde " . $result. "<br>";

    }

}

