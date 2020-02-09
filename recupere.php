<?php

$username="root";
$password='';
$dbname="projetcommentaires";
$servername="localhost";
$conn =new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error){
    echo "faute";
    die("connect failed:".$conn->connect_error);
}
else{
    $conn->select_db($dbname);
}




$recup_messages= $conn->query("SELECT nom, message FROM commdata ORDER  by id  DESC");
//$recup_messages->execute();

//$recup_messages->execute(array("id"=>($_POST['nom']),($_POST['message'])));//*************revoir ici
while( $row = $recup_messages->fetch_assoc()){

     echo "nom: ". $row['nom']."<br>";
    echo "message: ". $row['message']."<br>";

}
foreach ($recup_messages as $message) {//revoir***********************************************
    ?>
    <h4><?php echo $message['nom'] ?></h4>
    <P><?php echo $message['message'] ?></P>
    <hr/>
    <?php
}
    ?>

