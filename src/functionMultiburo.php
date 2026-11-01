<?php

function getBureau($srch, $idNom, $idPrenom)
{

    $tmp = "<table><thead><tr><th>Type de salle</th><th>Nombre de place</th></tr></thead><tbody>";
    $rep = request($srch);
    if($rep['ok'])
    {
        foreach($rep['data'] as $ligne)
        {
            
            $tmp.= "<tr><td>".$ligne['lib']."</td><td>".$ligne['nb_place']."</td><td>
            <form action='multi_calvin.php' method='post'>
                <input type='hidden' name='id_ressource' value='".$ligne['id_ressource']."'>
                <input type='hidden' name='date' value='$srch'>
                <input type='hidden' name='nom' value='$idNom'>
                <input type='hidden' name='prenom' value='$idPrenom'>
                
                <input type='submit' value='Réserver' name='reserver'>
            </form>
            </td></tr>";
        }
        $tmp .= '</tbody></table>';
    }
    else
        $tmp = $rep['error'];      
    return $tmp;
}

function getReserve($idUser, $idRes, $srch)
{

    $tmp = "";
    $rep = reservation($idUser, $idRes, $srch);
    if($rep['ok'])
    {
        
        $tmp = "<div class='center'><p>Réservation effectuée avec succès !</p></div>";
    }
    else
        $tmp = $rep['error'];      
    return $tmp;
}

?>