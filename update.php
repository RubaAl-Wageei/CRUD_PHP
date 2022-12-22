
<?php 

require_once('./config.php');

$id  =$_GET['ID'];
// $sql = "SELECT * FROM Employees WHERE ID=:ID";

// $update = $db->prepare($sql);
// $update->execute([':ID' => $id]);

// $user = $update->fetch(PDO::FETCH_OBJ);

if (isset ($_POST['name']) && isset($_POST['address']) && isset ($_POST['salary']))
{
    $name = $_POST ['name'];
    $address = $_POST ['address'];
    $salary = $_POST ['salary'];
    $insert = "UPDATE Employees SET 'EmployeeName'=$name , 'EmployeeAddress'=$address , 'Salary'=$salary WHERE 'ID'=$id";

    $db->prepare($insert);
    $db->exec($insert);
    // $state = $db->query($insert);

}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees Form</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

<form method="post">
    <div class="container" >
    <h2>Update Employee Data</h2>
        <div class="mb-3 mt-5">
            <label for="Name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name"  id="name" aria-describedby="emailHelp" value="<?php $user->EmployeeName ; ?>" >
        </div>
        <div class="mb-3">
            <label for="Address" class="form-label">Address</label>
            <input type="text" class="form-control"  name="address"  id="address"  value="<?php $user->EmployeeAddress; ?>">
        </div>
        <div class="mb-3">
            <label for="Salary" class="form-label">Salary</label>
            <input type="text" class="form-control"  name="salary"  id="salary"  value="<?php $user->Salary; ?>">
        </div>
        
        <button type="submit" class="btn btn-warning">Update Employee</button>
  </div>
</form>

</body>
</html>