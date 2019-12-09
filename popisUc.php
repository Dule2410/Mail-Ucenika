<?php
$popisUC = array("bilic.tereza", "cepocvitan.luka", "frankovic.rea", "gale.antonela", "horvat.tomislav", "ilijevi.josip", "kerim.alberto", "kosovic.bartol",
    "kupresak.marko", "matic.jan", "nogic.nino", "pavlekovic.dino", "rodic.tin", "rumiha.petar", "savic.luka", "stracenski.monika", "saric.matej", "skrlec.luka",
    "splajt.renato", "vlatkovic.josip", "vukovic.patrik", "zaninovic.ana");

$regex = "@gmail.com";
$user_name = filter_input(INPUT_GET, 'user_name');
if (in_array($user_name, $popisUC)) {
    echo $user_name , $regex;
}
