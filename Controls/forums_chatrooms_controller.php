<?php   
    $bddPDO = new PDO('sqlite:Private/DataBase/Project_Database.db');
    $bddPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $forums_chatrooms = new ChatroomsManager($bddPDO); 

    require "Views/forums_chatrooms.php"
?>