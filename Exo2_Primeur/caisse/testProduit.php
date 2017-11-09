<?php
// !!!!!!!! INSTANCIATION    //
// !!!!!!!  OBJETS



	// C'est un fichier de tests "unitaires" il sert a tester toutes les méthodes de la classe une par une

	// pour afficher les erreurs pour ce script 
	ini_set('display_errors','1');

	// inclure le fichier contenant la 
	// définition de la classe
	require_once("src/Produit.php");
	require_once("src/ProduitKilo.php");
	require_once("src/ProduitUnit.php");

	// instanciation
	$PK = new ProduitKilo(2, 5);
 	$PU = new ProduitUnit(20, 3);
	// instanciation
	$PK2 = new ProduitKilo(5, 25);
 	$PU2 = new ProduitUnit(10, 25);
	// instanciation
	$PK3 = new ProduitKilo(10, 40);
 	$PU3 = new ProduitUnit(20, 10);


    echo $PK;
    echo $PU;
    echo $PK->calculer()."€<br/>";
    echo $PU->calculer()."€<br/>";
    

    // $PK->setPrix(5);
    // $PK->setKilo(25);
    // $PU->setPrix(10);
    // $PU->setNombre(25);


    echo $PK2;
    echo $PU2;
    echo $PK2->calculer()."€<br/>";
    echo $PU2->calculer()."€<br/>";

    echo $PK3;
    echo $PU3;
    echo $PK3->calculer()."€<br/>";
    echo $PU3->calculer()."€<br/>";


    echo Produit::nbInstance()." Produit(s) ont été créés";
    echo "Dont  ".ProduitKilo::nbInstance()." Produit(s) au kilo";
    echo "Et ".ProduitUnit::nbInstance()." Produit(s) à l'unité";

?>