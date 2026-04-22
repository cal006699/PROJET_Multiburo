<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Multiburo</title>
    <link rel="stylesheet" href="style.css">
    <?php
    include("functionMultiburo.php");
    include("database.inc.php");
    include("model.inc.php")
    ?>
</head>
        <div class="container">
            <h1>Multiburo</h1>
            <form action="multi_calvin.php" method="post">
                <input type="date" value="2026-04-03" name="date">

                <p>Prénom: </p><input type="text" name="prenom">
                <p>Nom: </p><input type="text" name="nom">
                <input type="submit" value="Valider" name="reserver">
                <input type="reset">
            </form>
            <?php
                
                $idRes = "";
                $srch = '';
                $tmp = '';
                $idNom ="";
                $idPrenom ="";
                if($_SERVER['REQUEST_METHOD'] == 'POST')
                {
                    if(isset($_POST['date']))
                    {
                        $srch = $_POST['date'];
                    }
                    if(isset($_POST['prenom']))
                    {
                        $idPrenom = $_POST['prenom'];
                    }
                    if(isset($_POST['nom']))
                    {
                        $idNom = $_POST['nom'];
                    }
                    if(isset($_POST['id_ressource']))
                    {
                        $idRes = $_POST['id_ressource'];
                    }
                    if(isset($_POST["reserver"]))
                    {
                        $resultatUser = srchUser($idPrenom, $idNom);

                        if ($resultatUser['ok'] == true) {
                            $idUser = $resultatUser['id_user']; 
                            
                            if (!empty($idRes)) {
                                echo getReserve($idUser, $idRes, $srch); 
                            } else {
                                echo "Choisissez une ressource sélectionnée.";
                            }
                            
                        } else {
                            echo "Erreur : Utilisateur non trouvé.";
                        }
                    }
                }
                

                echo getBureau($srch, $idNom, $idPrenom);
                
                
            ?>
            
        </div>
    </body>
</html>