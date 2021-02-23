<?php
    include "../classes/database.php";
    if(isset($_POST['ime']) && isset($_POST['mail'])){
        $ime=$_POST['ime'];
        $mail=$_POST['mail'];
        $crud=new Database();
        $values = array($_POST['ime'],$_POST['mail']);
        $crud->insert('newsletter',$values);
    }

?>

