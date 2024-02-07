<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>
<body>


<?php
    

    if(isset($_GET['genera_password'])) {
        
        if(isset($_GET['lunghezza_password'])) {
            $lunghezza_password = $_GET['lunghezza_password'];
            
            $password_generata = randomPassword($lunghezza_password);
           
            echo "<p class='text-light'>Password generata: $password_generata</p>";
        } 
    }

    // Funzione per generare una password casuale stackoverflow
    function randomPassword($lunghezza) {
        $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
        $pass = "";
        for ($i = 0; $i < $lunghezza; $i++) {
            $n = rand(0, strlen($alphabet)-1);
            $pass .= $alphabet[$n];
        }
        return $pass;
    }
?>


    
</body>
</html>