<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Form_Hub</title>
</head>
<body>
    <div class="container">
    <img src="img/technology.png" alt="">
    <p>Student Attendance</p><br>
    <form action="login.php" method="POST">
        <!--the for attribute of the <label> tag should be = to the id attribute of the <input> tag-->
        <input type="text" id="name" name="user_name" placeholder="Full_Name" style="padding: 7px; width: 16em;" required><br><br>
        <input type="text" name="matricNo" placeholder="Matric_Number" style="padding: 7px; width: 16em;" required><br><br>
        <input type="text" name="level" placeholder="Level" style="padding: 7px; width: 16em;" required><br><br>
        <input type="submit" name="submit" value="Submit"><br><br><br>

        <script>
            if (onclick="submit"){
                alert('New User Register Success');
            }
        </script>

        <a href="admin.php" style="text-decoration: none; color: rgb(46, 144, 214)">Student list</a>


        
        
    </form></div>
    
</body>
</html>