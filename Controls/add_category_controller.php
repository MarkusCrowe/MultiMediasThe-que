
<?php
    $bddPDO = new PDO('sqlite:Private/DataBase/Project_Database.db');
    $bddPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $Categorie_manager = new CategorieManager($bddPDO);

    // On recupere le nom etabli pour l'inserer dans la base de donnée
    if (isset($_POST["categorie"])){
        $Categories = new Categorie([
            "Categorie_name" => $_POST["categorie"],
        ]);
    
        if ($Categories->isCategorieValid()){
            $Categorie_manager->insertCategorie($Categories);
            // $sucess = "Catégorie créée"; 
            header("Location: ?page=category");   
        }else{
            $errors = $Categories->getErrors();
        }
    }
    require "Views/add_category.php"
?>