<?php
    session_start();
    
    $_SESSION['Logged'] = false;
    session_destroy();
    
    header('Location: ../index.php');
?>