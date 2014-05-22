<?php                                                                   //page de création des fonctions pour lier notre site à la bdd

function dbconnect($serveur, $port, $pseudo, $pass, $nombase) {         //fonction de connection à la bdd (à besoin des infos contenues dans config.inc.php)
    $dsn = 'mysql:dbname='.$nombase.';host='.$serveur.';port='.$port;   //dsn = data source name

    try {
        $dbh = new PDO($dsn, $pseudo, $pass);                           //en cas d'échec, affiche connexion échouée
    } catch (PDOException $e) {                                         //dbh = data base handle
        echo 'Connexion échouée : ' . $e->getMessage();
        exit;
    }
    return $dbh;
}

function dbdisconnect($session) {                                       //fonction de déconnexion à la bdd
    $session=NULL;
}

function dbexec($session, $query) {                                     //fonction d'enregistrement mise à jour ou suppression - de modification
    $exec = $session->exec($query);
    return $exec;
}

function dbquery($session, $query){										// Fonction de requête sql (pour lister des informations par ex)
    $results= $session->query($query);  
    
    if ($results==false){												// S'il n'y a pas de résultat afficher 'error [...]'
        echo 'error in your sql request'.$query;
        exit;
    }
    $results_array = $results->fetchAll(PDO::FETCH_ASSOC);				// Insérer les résultats dans un tableau associatif
    return $results_array;												// Retourne le tableau de résultats
}

?>