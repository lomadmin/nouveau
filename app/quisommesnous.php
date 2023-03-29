<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Immobilier </title>
        <?php include "includes/head.php"?>
    </head>
    <body>
        <header>   
            <?php include "includes/navigation.php"?> 
        </header>
        <div class = "container" >
            
            <?php
                $sql = 'select * from proprietaires';
                $query = $pdo->prepare($sql);

                //$sql = 'Select * From villes;';
                //$query = $pdo->prepare($sql);
                
                
                //Execute the query 
                $query->execute();
                // Fetch all rows 
                $owners = $query->fetchAll(PDO::FETCH_OBJ);
                // ¤ $cities = $query->fetchAll(PDO::FETCH_OBJ);
                // display cities
                $total = $query->rowCount();
                echo "<h1> liste des propriétaires  <span class='badge bg-primary'><i class='bi bi-person-circle'></i> $total</span></h1>";

                include 'includes/tableau.php';
               
        ?>
        
        <?php include "includes/footer.php"?>
        </div>
    </body>
</html>