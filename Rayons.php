<?php

class Rayons
{

    private string $nom;
    private Magasin $magasin;
    private array $produits;


    public function __construct(string $nom, Magasin $magasin)
    {
        $this->nom = $nom;
        $this->magasin = $magasin;
        $this->magasin->addRayon($this);
        $this->produits = [];
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
    public function getProduits()
    {
        return $this->produits;
    }

    public function setProduits($produits)
    {
        $this->produits = $produits;

        return $this;
    }

    public function addProduit(Produits $produit){
        $this->produits[] = $produit;
    }

    public function compterProduit()
    {
        $result = count($this->produits);
        foreach($this->produits as $nom){
            $result = $result . " " . $nom . " ";
        }
        return $result;
    }

    public function __toString()
    {
        return $this->nom;
    }

    public function afficherInfo()
    {
        $result = $this->magasin->compterRayons(); //important pour pouvoir renvoyer le resultat de la function compter de la page magasin ( a  faire verifier)
        echo "le magasin « " . $this->magasin . " » posséde " . $result. "<br>";
    }
}
