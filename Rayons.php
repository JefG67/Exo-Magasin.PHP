<?php

class Rayons {

    private string $nom;
    private Magasin $magasin;


public function __construct(string $nom, Magasin $magasin) {
        $this->nom = $nom;
        $this->magasin = $magasin;
        $this->magasin->addRayon($this);
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
public function setNom(string $nom)
{
    $this->nom = $nom;

    return $this;
}

/**
 * Get the value of magasin
 */ 
public function getMagasin()
{
    return $this->magasin;
}

/**
 * Set the value of magasin
 *
 * @return  self
 */ 
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