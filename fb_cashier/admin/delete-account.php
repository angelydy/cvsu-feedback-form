<?php
include 'config.php';
if(isset($_GET['deleteaccid'])) {
    $id=$_GET['deleteaccid'];
    $sql="delete from `user` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        echo '<script>alert("Deleted successfully."); location.replace(document.referrer)</script>';
    } else {
        echo '<script>alert("Unsuccessful deletion. Please try again.");</script>';
    }
}

?>