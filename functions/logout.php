<?php
    session_start();
    if(isset($_SESSION)){
        session_destroy();
    }
        header("Location: /roleAttribution.php?connected=1");
    
