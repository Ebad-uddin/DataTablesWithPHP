<?php 
$connection = mysqli_connect("localhost", "root", "", "raw_data");

$result = mysqli_query($connection, "SELECT * from `jewellery`");
if(mysqli_num_rows($result) > 0){
  

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tables</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
</head>
<body>
    <div class="container">
        <h1>Data Tables</h1>

    
<table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <?php 
              while ($data  = mysqli_fetch_assoc($result)){
                echo ' <tr>
                <td>'.$data['id'].'</td>
                <td>'.$data['tittle'].'</td>
                <td>'.$data['price'].'</td>
               
            </tr>';
            }
        }
            ?>
        </tbody>
           
</table>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
<script>
    new DataTable('#example');
</script>
</html>