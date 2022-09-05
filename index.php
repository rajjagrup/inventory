<?php

    // Connect to the localhost

    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname   =  "myDB";

    //Makes the connects to the database

    $conn =  mysqli_connect($servername, $username, $password, $dbname);
    
    //Checks the connect 
    if($conn->connect_error)
    {
        die("Connections Failed" .$conn->connect_error);
    }

    //Stores the data inputs
    $sql = "Insert the vaules given()";

    //Check to see if data was added 
    if(mysqli_query($conn, $sql))
        {
            echo "New record has been added!";        
        }
    else
        {
            echo  "Error:  " .$sql."<br>" .mysqli_error($conn); 
        }

    
   mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css">
    <title>PHP Form Demo</title>
</head>
<body>
    <main>
        <form action="insert.php" method="post">
            <div>
                <label for="name">Name:</label>
                <input type="text" name="name" required="required" placeholder="Enter your name" />
            </div>

            <div>
                <label for="name">Email:</label>
                <input type="email" name="email" required="required" placeholder="Enter your email" />
            </div>

            <button type="submit">Subscribe</button>
        </form>
    </main>
</body>
</html>

