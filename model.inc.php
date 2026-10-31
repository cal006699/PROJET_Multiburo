<?php
function request($srch)
{
    $a ="Saisissez une date et valider la";
    $rep = array();
    try
    {
        $PDO = new PDO('mysql:dbname='.BDD.';host='.HOST.';port='.PORT, LOGIN, PASSW);
        $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $req ="SELECT lib, nb_place, r.id_ressource FROM ressource r LEFT JOIN reservation res ON res.id_ressource = r.id_ressource AND (res.date = :srch_date)
                WHERE res.id_ressource IS NULL; ";
        $stmt = $PDO->prepare($req);

        $stmt->bindParam(':srch_date', $srch, PDO::PARAM_STR, 50);
        $stmt->execute();


        if($result = $stmt->fetchAll())
            {
                $rep['ok'] =  true;
                $rep['data'] = $result;
            }
            else // Si la requête est bonne mais qu'aucune donnée ne correspond aux critères de recherche.
            {
                $rep['ok'] =  false;
                $rep['error'] = '<div class="center"><p><span class="alert">Aucune donnée</span></p></div>';
            }
    }
    
    catch(PDOException $e) // En cas de probleme technique entre php et la bdd
    {
        $rep['ok'] =  false;
        $rep['error'] = '<div class="center"><p><span class="alert">Database error :</span><br>'.$e->getMessage().'</p></div>';
    }
    return $rep;
}


function srchUser($prenom, $nom)
{
    $rep = array();
    try
    {
        $PDO = new PDO('mysql:dbname='.BDD.';host='.HOST.';port='.PORT, LOGIN, PASSW);
        $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $req = "SELECT id_user FROM user WHERE UPPER(nom) = UPPER(:idN) AND UPPER(prenom) = UPPER(:idP);";
        $stmt = $PDO->prepare($req);
        $stmt->bindParam(':idN', $nom, PDO::PARAM_STR, 50);
        $stmt->bindParam(':idP', $prenom, PDO::PARAM_STR, 50);
        $stmt->execute();
        if($result = $stmt->fetchAll())
        {
            $rep['ok'] =  true;
            $rep['id_user'] = $result[0]['id_user']; 
        }
        else 
        {
            $rep['ok'] =  false;
            $rep['error'] = '<div class="center"><p><span class="alert">"Utilisateur non trouvé."</span></p></div>';
        }
    }
    catch(PDOException $e) // En cas de probleme technique entre php et la bdd
    {
        $rep['ok'] =  false;
        $rep['error'] = '<div class="center"><p><span class="alert">Database error :</span><br>'.$e->getMessage().'</p></div>';
    }
    return $rep;
    }

function reservation($idUser, $idRes, $date)
    {
        $rep = array();
        try
        {
            $PDO = new PDO('mysql:dbname='.BDD.';host='.HOST.';port='.PORT, LOGIN, PASSW);
            $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $req = "INSERT INTO reservation (id_ressource, id_user, date) VALUES
                    (:idRes, :idUser,  :dateRes);";
            $stmt = $PDO->prepare($req);
            $stmt->bindParam(':idUser', $idUser, PDO::PARAM_STR);
            $stmt->bindParam(':idRes', $idRes, PDO::PARAM_STR);
            $stmt->bindParam(':dateRes', $date, PDO::PARAM_STR);
            $stmt->execute();
            $rep['ok'] = true;
        }
        catch(PDOException $e) // En cas de probleme technique entre php et la bdd
        {
            $rep['ok'] =  false;
            $rep['error'] = '<div class="center"><p><span class="alert">Database error :</span><br>'.$e->getMessage().'</p></div>';
        }
        return $rep;
    }
?>