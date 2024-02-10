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
        echo "le magasin « " . $this->magasin . " » posséde un rayon : " . $this->nom;
    }


}