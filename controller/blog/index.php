<?php

// On demande les 5 derniers billets (model)
include_once('model/blog/get_billets.php');
$billets = get_billets(0, 5);

// On effectue du traitement sur les données (controller)
// Ici, on doit surtout sécuriser l'affichage
foreach($billets as $cle => $billet)
{
    $billets[$cle]['titre'] = htmlspecialchars($billet['titre']);
    $billets[$cle]['contenu'] = nl2br(htmlspecialchars($billet['contenu']));
}

// On affiche la page (view)
include_once('view/blog/index.php');