<?php
use Fpdf\Fpdf;
class PDF extends FPDF {
  // Header
  function Header() {
    // Logo : 8 >position à gauche du document (en mm), 2 >position en haut du document, 80 >largeur de l'image en mm). La hauteur est calculée automatiquement.
    $this->Image('static\img\Milk_and_Mocha_test.jpg',8,2);
    // Saut de ligne 20 mm
    $this->Ln(20);

    // Titre gras (B) police Helbetica de 11
    $this->SetFont('Helvetica','B',11);
    // fond de couleur gris (valeurs en RGB)
    $this->setFillColor(230,230,230);
     // position du coin supérieur gauche par rapport à la marge gauche (mm)
    $this->SetX(70);
    // Texte : 60 >largeur ligne, 8 >hauteur ligne. Premier 0 >pas de bordure, 1 >retour à la ligneensuite, C >centrer texte, 1> couleur de fond ok  
    $this->Cell(60,8,'TEST',0,1,'C',1);
    // Saut de ligne 10 mm
    $this->Ln(10);    
  }
  // Footer
  function Footer() {
    // Positionnement à 1,5 cm du bas
    $this->SetY(-15);
    // Police Arial italique 8
    $this->SetFont('Helvetica','I',9);
    // Numéro de page, centré (C)
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
  }

  // Fonction en-tête des tableaux en 3 colonnes de largeurs variables
function entete_table($position_entete) {
	$this->SetDrawColor(183); // Couleur du fond RVB
	$this->SetFillColor(221); // Couleur des filets RVB
	$this->SetTextColor(0); // Couleur du texte noir
	$this->SetY($position_entete);
	// position de colonne 1 (10mm à gauche)	
	$this->SetX(10);
	$this->Cell(60,8,'Ville',1,0,'C',1);	// 60 >largeur colonne, 8 >hauteur colonne
	// position de la colonne 2 (70 = 10+60)
	$this->SetX(70); 
	$this->Cell(60,8,'Pays',1,0,'C',1);
	// position de la colonne 3 (130 = 70+60)
	$this->SetX(130); 
	$this->Cell(30,8,'Repas',1,0,'C',1);

	$this->Ln(); // Retour à la ligne
}
}

?>