<?php

require 'Form.php';

$form = new Form($_POST);

?>

<form action="#" method="post">
    <?php
    echo $form->input('username');
    echo $form->input('password');
    echo $form->submit();
    ?>
</form>

















<!--//require 'Personnage.php';-->
<!---->
<!---->
<!--//$merlin = new Personnage("Merlin");-->
<!--//$harry = new Personnage("Harry");-->
<!--//-->
<!--//$merlin->setNom('Jules');-->
<!--//-->
<!--//var_dump($merlin->getNom());-->
<!--//var_dump($merlin->getAtk());-->
<!---->
<!---->
<!---->
<!---->
<!--//$merlin->attaque($harry);-->
<!--//-->
<!--//if ($harry->mort()){-->
<!--//    echo 'Harry est mort !';-->
<!--//} else {-->
<!--//    echo  'Harry a survécu avec ' . $harry->vie . ' points de vie.';-->
<!--//}-->
<!--//-->
<!--//echo "<br>";-->
<!--//echo $merlin->getNom();-->
