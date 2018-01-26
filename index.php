<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">

        <ul class="nav nav-pills">
            <li class="active"><a data-toggle="pill" href="#home1">Home</a></li>
            <li><a data-toggle="pill" href="#admin">Admin</a></li>
            <li><a data-toggle="pill" href="#contact">Contact</a></li>
        </ul>


        <div class="tab-content">
            <div id="home1" class="tab-pane fade in active">
                <h3>HOME</h3>
                <?php
               include "cn.php";
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                } 
                
                $sql = "SELECT name, dept FROM std";
                $result = $conn->query($sql);
                echo "<table border=5>";
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                       
                        echo "<tr><td>" .$row["name"]. "</td><td>" .$row["dept"]. "</td></tr>";
                    }
                    echo "</table>";
                } else {
                    echo "0 results";
                }
                $conn->close();
                ?>

            </div>
            

            <div id="admin" class="tab-pane fade">
                <h3>Control Panel Login</h3>
                <h4>Enter Username and Password</h4>
                <form action="/admin" method="post">
                    Name:<br>
                    <input type="text" name="name">
                    <br>
                    Password:<br>
                    <input type="text" name="pass">
                    <br><br>
                    <input type="submit" value="Submit">
                </form> 
            </div>
                <div id="contact" class="tab-pane fade">
                <h3>Contact Deatails</h3>
                
                </div>
            </div>
        </div>
   
    </body>

</html>