<?php include "top.php";
include "connection.php";
?>

<div class="content">
    <?php
    $name = "Kanta Bai";
    ?>
    <div class="contentIndex">

        <div class="info">
            <h1>Hello, I'm</h1>
            <h2><?php echo  $name ?></h2>
            <p>Professional House Maid</p>
            <div class="buttons">
                <button id="btnEmail">Email Me <span> <i class="fas fa-paper-plane"></i></span></button>
            </div>
        </div>
        <div class="img">
            <img src="./Assets/images/photo.png" alt="IMG NOT FOUND">
        </div>
    </div>


</div>
<div class="contactForm" id="contactForm">
    <form method="post">
        <div class="contactDiv">
            <div class="labels">
                <h4>Email Me</h4>
                <h3> <span><i class="fas fa-times" id="btnClose"></i></span></h3>
            </div>
            <div class="inputs">

                <input type="email" name="email" id="email" placeholder="Email" required autofocus>
                <input type="text" name="name" id="name" placeholder="Your Name" required>

            </div>
            <div class="subject">
                <input type="text" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="textarea">

                <textarea name="message" id="message" cols="80" rows="5" placeholder="Message" required></textarea>

            </div>
            <div class="buttons">
                <button id="send" value="Send" name="send">Send <span><i class="fas fa-paper-plane"></i> </span>
                </button>

            </div>
        </div>
    </form>
    <script>
        const btnEmail = document.querySelector("#btnEmail")
        const message = document.querySelector("#message")
        const contactForm = document.querySelector("#contactForm")
        const btnClose = document.querySelector("#btnClose")

        btnEmail.addEventListener("click", function(e) {
            contactForm.style.display = "flex"        
         
        })

        btnClose.addEventListener("click", function(e) {
            contactForm.style.display = "none"
        })
       
    </script>

    <?php
    if (isset($_POST["send"])) {

        // echo "<script >alert('doneee..');</script>";
        $email = $_POST["email"];
        $name = $_POST["name"];
        $message = $_POST["message"];
        $subject = $_POST["subject"];


        // $resultCheck = "SELECT email FROM messages WHERE email='" . $email . "' ";
        // if (mysqli_query($conn, $resultCheck)) {
        //     echo "<script >alert('Already Existing , Try using another Email.');</script>";
        // } else {
        $sql = "INSERT INTO messages  (email,name,message,subject) values ('$email','$name','$message','$subject')";

        if (mysqli_query($conn, $sql)) {
            echo "<script >alert('Message Sent..');</script>";
            //    echo '<script>showAlert();window.setTimeout(function() {HideAlert();},2000);</script>';
            //    echo "meta http-equiv='refresh' content='0';url=index.php";
        } else {
            echo "<script >alert('Couldn't send the message. please try again later.');</script>";
        }
    }
    //}
    ?>

</div>
<?php include "bottom.php"; ?>