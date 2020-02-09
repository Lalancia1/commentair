<?php
//echo'coucouje suis là';

$servername="localhost";
$username="root";
$password='';
$dbname="projetcommentaires";
$servername="localhost";
$conn =new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error){
   // echo "faute";
    die("connect failed:".$conn->connect_error);
}
else{
    $conn->select_db($dbname);
}


//$conn->query($sql);

if(isset($_POST['name'], $_POST['messenger']) && !empty($_POST['name'])&& !empty($_POST['messenger'])){
   global $conn;
    echo 'test';
    $nom = $_POST['name'];
    $message = $_POST['messenger'];
    $sql = $conn->prepare("INSERT INTO commdata(nom,message) VALUES( ?, ?)");
    $sql->bind_param("si", $_POST['name'], $_POST['messenger']);
    $sql->execute();
    //$stmt->close();


    echo "VOS DONNEES SONT BIEN ENVOYEES";

}else{
    echo "<span  class='erreur'>ECHEC  DES ENVOIES  VEUILLEZ RENOUVELLER VOTRE REQUETE</span>";
}