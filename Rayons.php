<?php

class Rayons {

    private string $nom;
    private Magasin $magasin;


public function __construct(string $nom, Magasin $magasin) {
        $this->nom = $nom;
        $this->magasin = $magasin;
        $this->magasin->addRayon($this);
}


public function getNom()
{
    return $this->nom;
}


public function setNom(string $nom)
{
    $this->nom = $nom;

    return $this;
}


public function getMagasin()
{
    return $this->magasin;
}


public function setMagasin(Magasin $magasin)
{
    $this->magasin = $magasin;

    return $this;
}


    public function __toString() {
        return $this->nom;
        
    }

    public function afficherInfo(){
        $result = $this->magasin->compterRayons(); //important pour pouvoir renvoyer le resultat de la function compter de la page magasin ( a  faire verifier)
        echo "le magasin « " . $this->magasin . " » posséde ". $result;
    }

}