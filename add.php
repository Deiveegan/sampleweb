

<?php
   include "cn.php";

    // Check connection 1
   // Check connection 3
<<<<<<< HEAD

=======
<<<<<<< HEAD
   //enrolled 
=======
   // New resolevd
>>>>>>> d17acdd... Resolved
>>>>>>> 5ffa522e81eaae6edfb4141ec7ad5ee74b2328d0
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
