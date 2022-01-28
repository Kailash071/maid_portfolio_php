<?php  include("../connection.php");?>

<?php
    $sql = "SELECT `name`,`email`,`message`,`subject`,`created_at` FROM `messages` ORDER BY `created_at` ";
    $result = mysqli_query($conn,$sql);
    $users = array();

    while ($row= mysqli_fetch_assoc($result)){
        $users[] = $row;
    }
  //  print_r($users);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages</title>
    <link rel="stylesheet" href="messageStyle.css">
</head>
<body>
    <div class="containerTable">
        <h3>Users</h3>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Subject</th>
                    <th>Date/Time</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($users as $user){
                        echo "<tr>";

                        echo "<td>";
                        echo $user['name'].'</br>';
                        echo "</td>";

                        echo "<td>";
                        echo $user['email'].'</br>';
                        echo "</td>";

                        echo "<td>";
                        echo $user['message'].'</br>';
                        echo "</td>";

                        echo "<td>";
                        echo $user['subject'].'</br>';
                        echo "</td>";

                        echo "<td>";
                        echo $user['created_at'].'</br>';
                        echo "</td>";
                        
                        echo "<td>";
                        echo "<button><a href=\"mailto://".$user["email"]."?subject=Reply to .".$user["subject"]."\">Reply</a></button>".'</br>';
                        echo "</td>";
                        
                        echo "</tr>";       
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
