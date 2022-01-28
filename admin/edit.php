<?php include'../connection.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Service</title>
    <link rel="stylesheet" href="serviceStyle.css">
</head>
<body>
<div class="containerServices">
        <div class="contentServices">

        <?php 
            $users = array();
            $sql = "SELECT `title` FROM `services` WHERE `id`='$_REQUEST[id]'";

            $result = mysqli_query($conn,$sql);

            if($row = mysqli_fetch_assoc($result)){
                $users[] = $row;
            }

        ?>
            <form method="post">
                <fieldset>
                    <legend>Update Service</legend>

                    <div>
                        <input type="text" name="title" id="title"
                        value="<?=$users[0]['title']?>"
                        placeholder="Service Title" required>

                    </div>
                    <div class="buttons">
                        <button name="update" value="Update" id="update">update</button>
                    </div>
                </fieldset>
            </form>
            <?php 
                if(isset($_POST['update'])){
                    $title = $_POST['title'];
                    $sql = "UPDATE `services` SET `title`='$title' WHERE `id`='$_REQUEST[id]'";

                    if(mysqli_query($conn,$sql)){
                        header("location:services.php");
                      // echo "updated";
                    }
                    else{
                        echo "Something went wrong.."+ mysqli_error($conn);
                    }
                }
            ?>
        </div>
</body>
</html>