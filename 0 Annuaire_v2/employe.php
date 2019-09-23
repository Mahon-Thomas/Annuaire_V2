<?php
require 'header.php';
require 'fonction.php';
$id = $_GET['id'];
$ligne = getEmploye($id);

?>
<article>
   <h2>Fiche employés <strong> <?php echo $ligne['nom']; ?></strong></h2>
        <table>
               <tbody>
                  </tr>
                  <tr>
                     <td>Nom</td>
                     <td><?php echo $ligne['nom']; ?></td>
                  </tr>
                  <tr>
                     <td>Pr&eacute;nom</td>
                     <td><?php echo $ligne['prenom']; ?></td>
                  </tr>
                  <tr>
                     <td>Age</td>
                     <td>
                        <?php echo $ligne['age']; ?>
                     </td>
                  </tr>
                  <tr>
                     <td>Ville</td>
                     <td>
                       <?php echo $ligne['ville']; ?>
                     </td>
                  </tr>
                  <tr>
                     <td>Courriel</td>
                     <td>
                        <?php echo $ligne['email']; ?>
                     </td>
                  </tr>
                  <tr>
                     <td>Date d'embauche</td>
                     <td>
                        <?php echo $ligne['date']; ?>
                     </td>
                  </tr>
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