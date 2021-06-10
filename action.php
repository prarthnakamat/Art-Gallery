<?php
    $fname=$_POST['fname']; 
    $email=$_POST['email']; 
    $comment=$_POST['comment']; 

    $conn = new mysqli('localhost','root','','db_contact');
    if($conn-> connect_error){
        die('Connection Failed :' .$con->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into tbl_contact(fname,email,comment)
        values(?,?,?)");
        $stmt->bind_param('sss',$fname,$email,$comment);
        $stmt->execute();
        echo "comment submitted...";
        $stmt->close();
        $conn->close();
    }
?>