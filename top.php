<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous" />
    <title>Portfoilo</title>
    <link rel="stylesheet" href="style.css">
   
</head>

<body>
    <div class="container">
        <div class="header" id="header">
            <?php
            $links = array(
                "Home" => "index.php",
                "About" => "about.php",
                "Services" => "services.php",
                "Contact" => "contact.php"
            );
            ?>
            <div class="logo">
                <a href="./index.php">
                    <img src="./Assets/images/kb_logo.png" alt="LOGO NOT FOUND"> </img>
                </a>


            </div>
            <div class="navbar" id="navbar" >
                <div class="menuDiv">
                    <span><i class="fas fa-bars" id="menuBar"></i></span>
                    <span><i class="fas fa-times" id="menuClose"></i></span>
                </div>
           
                <ul id="navbarUl">
                    <?php
                    foreach ($links as $name => $path) {
                        $activePage =  basename($_SERVER['PHP_SELF'], ".php");
                        $activelink = $activePage . ".php";
                        //    echo $activelink . " ";
                        //echo $path;
                        // $var = explode(".", $path)[0];
                        $a = ($activelink == $path) ? 'active' : 'inActive';
                        // echo "Class status:". $a;
                        //
                        echo "<li>
                            <a  class='$a' href=\"" . $path . "\">" . $name . "</a>
                                </li>";
                    }
                    ?>
                </ul>
            </div>
         
        </div>
  