<?php
require ('header.php');
require 'fonction.php';
$resultats = getEmployes();

?>
<article>
   <h2>Liste des employés </h2>
   <table>
      <tr> 
        <th>#</th>
        <th> Nom </th> 
        <th> Prénom </th> 
        <th> Email </th> 
        <th> Age </th> 
        <th> Ville </th> 
        <th> Date Embauche </th> 
        <th>  Actions </th> 
      </tr>
<?php
      foreach ($resultats as $ligne) 
      {
         echo "<tr>";
            echo "<td>" . $ligne['id'] . "</td>";
            echo "<td>" . $ligne['nom'] . "</td>" ;
            echo "<td>" . $ligne['prenom'] . "</td>";
            echo "<td>" . $ligne['email'] . "</td>";
            echo "<td>" . $ligne['age']   . "</td>";
            echo "<td>" . $ligne['ville']   . "</td>";
            echo "<td>" . $ligne['date'] . "</td>";
            if ($_GET['action'] == 1)
            {
               echo "<td>";
                  echo "<a title='Lire' href= 'employe.php?id=" . $ligne['id'] . "'><img src='style/read.png'/></a> ";
                  echo "&nbsp;&nbsp;&nbsp;";
                  echo "<a title='Modifier' href = 'modifier.php?id=" . $ligne['id'] . "'><img src='style/edit.png'/></a> ";
                  echo "&nbsp;&nbsp;&nbsp;";
                  echo '<a title="Supprimer" href="supprimer.php"><img src="style/delete.png"/></a> ';
               echo "</td>" ;
            }
            else 
            {
               echo "<td></td>" ;
            }
         echo "</tr>";
      }

      // Fermeture de la connexion
        unset($cnx);
?>

   </table>
</article>

<?php require("footer.php"); ?>