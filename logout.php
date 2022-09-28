<!--Logout method PHP-->
<?php
                        
    if(isset($_POST['logout']))
    {
        session_destroy();
        //header("location:./index.php");
        echo "<script>location.replace('index.php');</script>";
    }
                        
?>
