<?php

require 'Personnage.php';



$merlin = new Personnage("Merlin");
$harry = new Personnage("Harry");


$merlin->attaque($harry);

if ($harry->mort()){
    echo 'Harry est mort !';
} else {
    echo  'Harry a survécu avec ' . $harry->vie . ' points de vie.';
}

