<?php
include 'connexion.php';
$contenu = $_POST['contenu'];
$contenu = $conn->real_escape_string($contenu);
$ajd = date("Y-m-d");




if(isset($_POST['contenu'])){
    $req = "INSERT INTO entree (date, content) VALUES ('".$ajd."','".$contenu."');";
    $res = $conn->query($req); 
}



header('Location: index.php');
exit;

?>
