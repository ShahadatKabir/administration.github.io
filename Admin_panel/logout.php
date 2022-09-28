<!--Logout method PHP-->
<?php
                        
    if(isset($_POST['Logout']))
    {
        session_destroy();
        //header("location: ./admin_login.php");
        echo "<script>location.replace('admin_login.php');</script>";
    }
                        
?>
