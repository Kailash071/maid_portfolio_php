<?php //include"top.php";
//include($_SERVER['DOCUMENT_ROOT'].'/../includes/top.php');
include'../connection.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link rel="stylesheet" href="serviceStyle.css">
</head>

<body>
    <div class="containerServices">
        <div class="contentServices">
            <form method="post">
                <fieldset>
                    <legend>Add a sercies</legend>

                    <div>
                        <input type="text" name="title" id="title" placeholder="Service Title" required>

                    </div>
                    <div class="buttons">
                        <button name="send" value="send" id="send">Send</button>
                    </div>
                </fieldset>
            </form>
            <?php
            if (isset($_POST["send"])) {
                $title = $_POST["title"];

                $sql = "INSERT INTO  `services` (title) VALUES('$title')";

                if (mysqli_query($conn, $sql)) {
                 //   echo "<script >alert('Service added..');</script>";
                 
                } else {
                    echo "<script >alert('Couldn't add the service. please try again later.');</script>";
                }
            }
            ?>

            <div class="viewServices">
                <?php
                $sql = "SELECT `id`,`title` FROM `services` ORDER BY `title`";
                $result = mysqli_query($conn, $sql);
                $users = array();

                while ($row = mysqli_fetch_assoc($result)) {
                    $users[] = $row;
                }
                //  print_r($users);
                ?>

                <h3>Services</h3>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($users as $user) {
                            echo "<tr>";

                            echo "<td>";
                            echo $user['id'] . '</br>';
                            echo "</td>";

                            echo "<td>";
                            echo $user['title'] . '</br>';
                            echo "</td>";

                            echo "<td>";
                            echo    "<button class='edit'><a href=\"edit.php?id=".$user['id']."\">Edit</a></button>";
                            echo    "<button><a href=\"delete.php?id=".$user['id']."\">Delete</a></button>" .'</br>';
                            echo "</td>";

                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>