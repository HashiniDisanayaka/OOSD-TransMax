<?php
    $con = mysqli_connect ('127.0.0.1','root','');
    $Name = $_POST['name'];
    $Address = $_POST['address'];
    $Email = $_POST['email'];
    $Password = $_POST['password'];
    $Hint = $_POST['hint'];
    $sql = "INSERT INTO ownerdata (Name,Address,Email,Password,Hint) VALUES ('$Name','$Address','$Email','$Password','$Hint')";


    if (!con)
    {
        echo 'Not connected to the server';
    }

    if (!mysqli_select_db($con, 'transmax'))
    {
        echo 'Database is not selected';
    }

    


    if (!mysqli_query($con,$sql))
    {
        echo 'Sorry. We could not register. Try again';
    }
    else
    {
        echo 'Registration Successful. Thank you.';
    }
    header("refresh:2; url=main2.html");
?>