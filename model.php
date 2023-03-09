<?php
function getObjetPDO($base){
    $dsn = "mysql:host=127.0.0.1;port=8889;dbname=$base";
    $user = "root";
    $pass = "root"; 
    try {
        $bdd = new PDO ($dsn,$user,$pass);
    }
    catch(PDOException $e) {
        $errorMessage = date('l jS \of F Y h:i:s A ');
        $errorMessage .= " Le code erreur est : ".$e->getCode();
        $errorMessage .= " Le message : ".$e->getMessage();
        $errorMessage .= " Le fichier : ".$e->getFile();
        $errorMessage .= "\n";
        // Chemin du fichier log
        $logFile = "errors.log";
        // Chemin du fichier accès non autorisé 
        $logFileAccess = "access.log";
        // Enregistrement du message d'erreur dans le fichier log
        error_log($errorMessage, 3, $logFile);
        if ($e->getCode() == 1045)
        {
            error_log($errorMessage, 3, $logFileAccess);
        }
        return false;
    }
    return $bdd;
}

function getAllPompiers(){
    $req = "SELECT Matricule, NomPompier, PrenomPompier, TelPompier, SexePompier
            FROM Pompier
            ORDER BY NomPompier;";
    $bdd = getObjetPDO("DSC");
    if ($bdd != false )
    {
        return $bdd->query($req);
    }
    else
    {
        return false;
    }
}