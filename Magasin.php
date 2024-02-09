<?php

class Magasin {
    // attributs

    private string $nom;
    private GalerieMarchande $galerieMarchande;


    public function __construct(string $nom, GalerieMarchande $galerieMarchande){
        $this->nom = $nom;
        $this->galerieMarchande = $galerieMarchande;
        $this->galerieMarchande ->addMagasin ($this);
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

    public function __toString() {
        return $this->nom;
        
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
   
