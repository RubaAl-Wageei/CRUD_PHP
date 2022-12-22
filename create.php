
<?php 
require_once('./config.php');


if (isset ($_POST['name']) && isset($_POST['address']) && isset ($_POST['salary']))
{
    $name = $_POST ['name'];
    $address = $_POST ['address'];
    $salary = $_POST ['salary'];
    $insert = "INSERT INTO Employees(ID, EmployeeName, EmployeeAddress, Salary) VALUES(NULL, '$name', '$address', '$salary')";

    $db->prepare($insert);
    $db->exec($insert);

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
    <h2>Add New Employee</h2>
        <div class="mb-3 mt-5">
            <label for="Name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="Address" class="form-label">Address</label>
            <input type="text" class="form-control"  name="address" id="address">
        </div>
        <div class="mb-3">
            <label for="Salary" class="form-label">Salary</label>
            <input type="text" class="form-control"  name="salary" id="salary">
        </div>
        
        <button type="submit" class="btn btn-warning">Add Employee</button>
  </div>
</form>

</body>
</html>