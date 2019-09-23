<!DOCTYPE html> 
   <head> 
      <title>Lire la table employé</title> 
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
   </head> 
<body> 
 
 
<?php
 require 'fonction.php';
$sql = "DELETE FROM employes WHERE id  = 1";
$stmt = $cnx->prepare($sql);
$stmt->bindParam(1, $_POST['id'], PDO::PARAM_INT);   
$stmt->execute();

 ?>
 
 
</body> 
</html>
