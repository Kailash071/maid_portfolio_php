<?php include "top.php"; ?>
<div class="content">
    <?php
    include 'connection.php';

    $sql = "SELECT `title` FROM `services` ";
    $result = mysqli_query($conn, $sql);
    $services = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $services[] = $row;
    }
    //  print_r($services);
    ?>
    <div class="cards">
        <?php
        foreach ($services as $service) {
            echo "<div class=\"card\">";
		 echo	"<a>" . $service["title"] . "</a>";
				echo "</div>";
            }
            ?>
          </div>

</div>
<?php include "bottom.php"; ?>