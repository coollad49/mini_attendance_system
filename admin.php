<?php 
include ('login.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Admin</title>
</head>
<body>
    <div class="panel panel-default">
        <div class="panel panel-body">
            <form action="index.php">
                <table class="table table-striped">
                    <tr>
                        <th>S/N</th><th>Student Name</th><th>Matric Number</th><th>level</th>
                    </tr>
                
                    <?php 
                        // this $query retrives all data from the table in the database
                        $query = "SELECT * FROM students_records;"; // put a semicolon for sql and for php.

                        // 
                        $result = mysqli_query($connect, $query);

                        $serial_num = 0;
                        
                        // row_check asks the database if there is any value...
                        $row_check = mysqli_num_rows($result);
                        
                        if($row_check > 0){
                            while($row = mysqli_fetch_array($result)){
                                $serial_num ++;

                                echo "<tr><td>".$serial_num. "</td><td>". $row['fullname'] . "</td><td>". $row['MatricNo'] . "</td><td>". $row['level'] . "</td></tr>";

                            }
                        }
                    ?>    
        
                
                </table>
            </form>
        </div>
    </div>
</body>
</html>