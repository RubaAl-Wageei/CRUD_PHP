
<?php 

$servername = "localhost";
$username = "root";
$password = "";
$table = "Employees";


try {
    // start connection with database 
    $db = new PDO ("mysql:host=$servername;dbname=CRUD_Database", $username, $password);

    // set the PDO error mode to exception 
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //select type error

    echo "Database Created Successfully";
    
} catch (PDOException $e){
    echo $sql . "<br>" . $e->getMessage();
}

?>