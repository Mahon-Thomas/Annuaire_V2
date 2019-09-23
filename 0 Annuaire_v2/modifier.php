<?php
require 'header.php';
require 'fonction.php';
$id = $_GET['id'];
$ligne = getEmploye($id);
$cnx = getCnx();

if(isset($_POST['newnom']) AND !empty($_POST['newnom']) AND $_POST['newnom'] != $ligne['nom']) {
    $newnom = htmlspecialchars($_POST['newnom']);
    $insertnom = $cnx->prepare("UPDATE employe SET nom = ? WHERE id = ?");
    $insertnom->execute(array($newnom, $ligne['id']));
    header('Location: employes.php?id='.$ligne['id'].'&action=1');
 }
   if(isset($_POST['newprenom']) AND !empty($_POST['newprenom']) AND $_POST['newprenom'] != $ligne['prenom']) {
    $newprenom = htmlspecialchars($_POST['newprenom']);
    $insertprenom = $cnx->prepare("UPDATE employe SET prenom = ? WHERE id = ?");
    $insertprenom->execute(array($newprenom, $ligne['id']));
    header('Location: employes.php?id='.$ligne['id'].'&action=1');
 }
    if(isset($_POST['newage']) AND !empty($_POST['newage']) AND $_POST['newage'] != $ligne['age']) {
    $newage = htmlspecialchars($_POST['newage']);
    $insertage = $cnx->prepare("UPDATE employe SET age = ? WHERE id = ?");
    $insertage->execute(array($newage, $ligne['id']));
    header('Location: employes.php?id='.$ligne['id'].'&action=1');
 }

 if(isset($_POST['newville']) AND !empty($_POST['newville']) AND $_POST['newville'] != $ligne['ville']) {
    $newville = htmlspecialchars($_POST['newville']);
    $insertage = $cnx->prepare("UPDATE employe SET ville = ? WHERE id = ?");
    $insertage->execute(array($newville, $ligne['id']));
    header('Location: employes.php?id='.$ligne['id'].'&action=1');
 }

 if(isset($_POST['newmail']) AND !empty($_POST['newmail']) AND $_POST['newmail'] != $ligne['email']) {
	$newmail = htmlspecialchars($_POST['newmail']);
	$insertmail = $cnx->prepare("UPDATE employe SET email = ? WHERE id = ?");
	$insertmail->execute(array($newmail, $ligne['id']));
	header('Location: employes.php?id='.$ligne['id'].'&action=1');
 }
?>
<article>
   <h2>Fiche employés <strong> <?php echo $ligne['nom']; ?></strong></h2>
        <table>
               <tbody>
                  </tr>

				  <form method="POST" action="" enctype="multipart/form-data">
                  <tr>
                     <td>Nom</td>
					 <td><input type="text" name="newnom" placeholder="nom" value="<?php echo $ligne['nom']; ?>" /></td>
                  </tr>
                  <tr>
                     <td>Pr&eacute;nom</td>
                     <td><input type="text" name="newprenom" placeholder="prenom" value="<?php echo $ligne['prenom']; ?>" /></td>
                  </tr>
                  <tr>
                     <td>Age</td>
                     <td>
					 <input type="numeric" name="newage" placeholder="age" value="<?php echo $ligne['age']; ?>" />
                     </td>
                  </tr>
                  <tr>
                     <td>Ville</td>
                     <td>
					 <input type="text" name="newville" placeholder="ville" value="<?php echo $ligne['ville']; ?>" />
                     </td>
                  </tr>
                  <tr>
                     <td>Courriel</td>
                     <td>
					 <input type="email" name="newemail" placeholder="email" value="<?php echo $ligne['email']; ?>" />
                     </td>
                  </tr>
                  <tr>
                     <td>Date d'embauche</td>
                     <td>
                        <?php echo $ligne['date']; ?>
                     </td>
                  </tr>
 					<tr>
				
				  <tr>
                     <td colsplan="2" >
					 
                        <input type="submit" value="Modifier mon profil">
 					
                     </td>
                  </tr>
 					
				  </form>
                  <!--
                  <tr>
                     <td colspan="2">
                        <input type="submit" name="action" value="Envoyer">
                     </td>
                  </tr>
                  -->
               </tbody>
            </table>

    </article>  
        <?php   
            // Fermeture de la connexion
            unset($cnx);
            require("footer.php"); 

        ?>