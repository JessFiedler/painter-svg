<?php

// Définition des fonctions
// génère le code de la fonction, il faut l'appeler si on veut s'en servir

function genRectangle(int $x, int $y, int $width, int $height, string $color, float $opacity){
    return '<rect x="'.$x.'" y="'.$y.'" width="'.$width.'" height="'.$height.'" fill="'.$color.'" opacity="'.$opacity.'"/>';
};

function genSquare(int $x, int $y, int $size, string $fillcolor, string $strokecolor, float $opacity){
    return '<rect x="'.$x.'" y="'.$y.'"  width="'.$size.'" height="'.$size.'"fill= "'.$fillcolor.'" stroke="'.$strokecolor.'" opacity="'.$opacity.'"/>';
}; 

function genCircle(int $cx, int $cy, int $r, string $color, float $opacity){
     return '<circle cx="'.$cx.'" cy="'.$cy.'" r="'.$r.'"  fill="'.$color.'" opacity="'.$opacity.'"/>';
};


function genEllipse(int $cx, int $cy, int $rx, int $ry, string $fillcolor, string $strokecolor, float $opacity){
    return '<ellipse cx="'.$cx.'" cy="'.$cy.'" rx="'.$rx.'" ry="'.$ry.'" fill="'.$fillcolor.'" stroke="'.$strokecolor.'" opacity="'.$opacity.'"/>';
};

function genTriangle(array $points, string $fillcolor, string $strokecolor, float $opacity){
    return '<polygon points="'.implode(" ", $points).'" fill="'.$fillcolor.'" stroke="'.$strokecolor.'" opacity="'.$opacity.'"/>';
};
