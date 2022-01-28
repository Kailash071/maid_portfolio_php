<?php include'../connection.php';?>

<?php
    $sql = "DELETE From `services` WHERE `id`= '$_REQUEST[id]'";

    if(mysqli_query($conn,$sql)){
        //echo "Sercive Deleted.. ";
      header("location:services.php");
    }
    else{
        echo "Something went Wrong.."+ mysqli_error($conn);
    }
?>