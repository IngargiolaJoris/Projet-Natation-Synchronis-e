<?php
/**
 * Created by PhpStorm.
 * User: joris ingargiola
 * Date: 03/07/2018
 * Time: 09:30
 */
function curPageURL() {
    $pageURL = 'http';
    if (@$_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
    $pageURL .= "://";
    if ($_SERVER["SERVER_PORT"] != "80") {
        $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
    } else {
        $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
    }
    return $pageURL;
}

function valid()
{
    $idparticipation = null;
    $idjuge = curPageURL();
    $note = null;
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=iNatationBdd;charset=utf8', 'postgres', 'AZERTY123');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
    $req = $bdd->prepare('INSERT INTO notation(idnotation, idparticipation, idjuge, note)VALUES( NULL, :idparticipation, :idjuge, :note )');
    $req->execute(array(
        'idparticipation' => $idparticipation,
        'idjuge' => $idjuge,
        'note' => $note
    ));
}