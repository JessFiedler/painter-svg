<?php

//////////////////////////////
// Inclusion des dépendances /
//////////////////////////////
include "class/Shape.php";
include "functions.php"; 
include "class/Rectangle.php";
include "class/Square.php";
include "class/Ellipse.php";
include "class/Circle.php";
include "class/Polygon.php"; 
include "class/Triangle.php";


///////////////////////
// Traitement PHP ici /
///////////////////////



$rect = genRectangle(70,80,100,150,"pink",1) ;
$svg='';
$svg=$svg.$rect;

$square = genSquare(100,120,80,"yellow","black",1) ;
$svg2='';
$svg2=$svg2.$square;

$circle = genCircle(350,350,120,"blue",1) ;
$svg3='';
$svg3=$svg3.$circle;

$ellipse = genEllipse(600,200,120,50,"grey","red",1);
$svg4='';
$svg4=$svg4.$ellipse;

$triangle = genTriangle([250,60,100,400,400,400],"black","green",0.5);
$svg5='';
$svg5=$svg5.$triangle;

$rect2 = new Rectangle();
$rect2 -> setlocation(100,250);
$rect2 -> setSize(50, 30);
$rect2 -> setColor("orange", 0.5);
$svg.=$rect2->draw();

$circle2 = new Circle();
$circle2 -> setlocation(800,400);
$circle2 -> setSize(120);
$circle2 -> setColor("black",1);
$svg.=$circle2->draw();

$ellipse2 = new Ellipse();
$ellipse2 -> setlocation(60,30);
$ellipse2 -> setSize(40,60);
$ellipse2 -> setColor("red",1);
$svg.=$ellipse2->draw();

$square2 = new Square();
$square2 -> setlocation(450,250);
$square2 -> setSize(50);
$square2 -> setColor("grey", 1);
$svg.=$square2->draw();

// Création d'un second triangle en utilisant la classe Triangle
$objTriangle = new Triangle();
$objTriangle->setCoordinates(550, 600, 150, 12, 487, 96, 489, 48, 51, 520);
$objTriangle->setColor('orange', 0.9);
$svg .= $objTriangle->draw();

// CRéation d'un polygone avec la classe Polygon
$objPolygon = new Polygon();
$objPolygon->setPoints([150,200,522,54,144,300,63,587,452,100]);
$objPolygon->setColor('maroon', 1);
$svg .= $objPolygon->draw();

//////////////////////////////////////
// Affichage : inclusion du template /
//////////////////////////////////////
include 'index.phtml';
