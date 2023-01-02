<?php
include 'config.php';
if(isset($_GET['deleteid'])) {
    $id=$_GET['deleteid'];
    $sql="delete from `poll` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        echo '<script>alert("Deleted successfully."); location.replace(document.referrer)</script>';
    } else {
        echo '<script>alert("Unsuccessful deletion. Please try again.");</script>';
    }
}

?>