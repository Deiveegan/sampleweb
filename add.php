

<?php
   include "cn.php";

    // Check connection 1
   // Check connection 3
<<<<<<< HEAD
   //enrolled 
=======
   // New resolevd
>>>>>>> d17acdd... Resolved
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "insert into std (name,dept,age,pass) values ('$_POST[name]','$_POST[dept]',$_POST[age],'$_POST[pass]')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        echo "<a href='index.php'>Go Back</a>";
    } 
    else{
            echo "Error: " . $sql . "<br>" . $conn->error;
     }
     // End of call


    $conn->close();
?>