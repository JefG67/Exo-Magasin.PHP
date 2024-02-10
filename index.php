

<?php 
spl_autoload_register(function ($class_name) {
    require $class_name . '.php';
});

// galeries
$galerieMarchande = new GalerieMarchande("Auchan");
$galerieMarchande2 = new GalerieMarchande("Leclerc");

// magasins
$magasin1 = new Magasin("Nike", $galerieMarchande);
$magasin2 = new Magasin("Adidas", $galerieMarchande);
$magasin3 = new Magasin("Kaporal", $galerieMarchande);

// rayons
$rayons1 = new Rayons("sport", $magasin1);
$rayons2 = new Rayons("pull", $magasin1);
// produits

// affichages
$galerieMarchande->afficherInfos();
$galerieMarchande2->afficherInfos();

$magasin1->afficherInfos();
$magasin2->afficherInfos();
$magasin3->afficherInfos();

$rayons1->afficherInfo();

