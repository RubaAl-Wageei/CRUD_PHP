
<?php 

require_once('config.php');

$id = $_GET['ID'];
$sql = "DELETE FROM Employees WHERE ID=$id";

$delete = $db->prepare($sql);
if ($delete->execute('ID'=$id)){
    header("Location: index.php");
}


$db->execute();

?>