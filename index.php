
<?php 

require_once('./config.php');


$sql = "SELECT * FROM Employees ORDER BY ID DESC";

 $getuser = $db->prepare($sql);
 $getuser->execute();
 
 $user = $getuser->fetchAll();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/6487c144b2.js" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container mt-5">
        <div> <h2>Employee Details</h2></div>
       
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="submit" class="btn btn-warning mb-5">Add New Employee</button>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>EmployeeName</th>
                    <th>EmployeeAddress</th>
                    <th>Salary</th>
                    <th>Action</th>
                </tr>
            <?php foreach ($user as $person => $data): ?>
                <?php 
                //  if ($data['is deleted']==1){
                //     continue;
                //  } 
                ?>
                <tr>
                    <td> <?php echo $data['ID']; ?> </td>
                    <td> <?php echo $data['EmployeeName']; ?> </td>
                    <td> <?php echo $data['EmployeeAddress']; ?> </td>
                    <td> <?php echo $data['Salary']; ?> </td>
                    <td>
                        <a href="update.php?ID=<?php echo $data['ID']; ?>" class="btn btn-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                                <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                                <path d="M16 5l3 3"></path>
                            </svg>
                        </a>

                        <a  onclick="return confirm('Are you sure you want to delete this entry ? ')" href="delete.php?id=<?php echo $data['ID'];  ?>" class="btn btn-warning">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24"   stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <line x1="4" y1="7" x2="20" y2="7"></line>
                                <line x1="10" y1="11" x2="10" y2="17"></line>
                                <line x1="14" y1="11" x2="14" y2="17"></line>
                                <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                            </svg>
                        </a>
                        
                    </td>
                </tr>
                <?php endforeach; ?>

            </thead>
        </table>
   </div>
</body>
</html>