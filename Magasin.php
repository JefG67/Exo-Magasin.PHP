<?php

class Magasin {
    // attributs

    private string $nom;
    private GalerieMarchande $galerieMarchande;
    private array $rayons;


    public function __construct(string $nom, GalerieMarchande $galerieMarchande){
        $this->nom = $nom;
        $this->galerieMarchande = $galerieMarchande;
        $this->galerieMarchande->addMagasin($this);
        $this->rayons = [];
    }




    public function getNom(){
        return $this->nom;
    }
      
     
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

  
    public function getGalerieMarchande()
    {
        return $this->galerieMarchande;
    }

   
    public function setGalerieMarchande($galerieMarchande)
    {
        $this->galerieMarchande = $galerieMarchande;

        return $this;
    }

    public function getRayons()
    {
        return $this->rayons;
    }

   
    public function setRayons($rayons)
    {
        $this->rayons = $rayons;

        return $this;
    }

    
    public function addRayon(Rayons $rayon){
        $this->rayons[] = $rayon;
    }

    public function __toString() {
        return $this->nom;
        
    }
    public function compterRayons(){
    
        $result1 = count($this->rayons); 
        $result1 = $result1 . " rayons : ";
        foreach($this->rayons as $nom) {
            $result1 = $result1 . " " . $nom . " ";
        }
        return $result1;
        
           
    }
    
    public function afficherInfos(){
        // afficher
        echo
        // les infos de ce magasin
        "Le magasin $this a pour galerie marchande "
        // et la représentation en string de sa galerie
        . $this->galerieMarchande . "<br>";
    }


    
 
}    








































































    // // constructeur
    // public function __construct(GalerieMarchande $galerieMarchande) {
    //     $this->galerieMarchande = $galerieMarchande;

    //     $this->galerieMarchande->ajouterMagasin($this);
    // }

    // // méthodes

    // // afficher les infos du magasin et de la galerie marchande liée
    // public function afficherInfos() {
    //     echo "$this" . $this->galerieMarchande;
    // }

    // // getters/setters
    // public function getGalerieMarchande() {
    //     return $this->galerieMarchande;
    // }

    /**
     * Get the value of nom
     */ 
   
